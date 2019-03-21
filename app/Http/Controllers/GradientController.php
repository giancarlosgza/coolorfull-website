<?php

namespace App\Http\Controllers;

use App\Gradients;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class GradientController extends Controller
{
    //SHOW GRADIENTS
    function showGradients(Gradients $gradient) {
        if(!$gradient->is_public && $gradient->user->id !== Auth::id())
        {
            return back();
        }

        return view('pages.gradients.catalog.show')->with('gradient', $gradient);
    }

    //GENERATOR GRADIENTS
    function generatorGradients(Gradients $gradient) {
        $validSub = Auth::check() ? Auth::user()->validSubscription() : false;
        
        return view('pages.gradients.generator')
                ->with('validSub', $validSub);
    }
    function generatorMGradients(Gradients $gradient) {
        $validSub = Auth::check() ? Auth::user()->validSubscription() : false;

        return view('pages.gradients.mgenerator')
                ->with('validSub', $validSub);
    }

    //SHOW GRADIENTS IN CATALOG
    function catalogGradients(Request $request) {
        $searchQuery = $request->input('q');

        if(empty($searchQuery)) {
            $gradients = Gradients::where('is_public', true)->orderBy('id', 'DESC')->paginate(12);
        } else {
            $gradients = Gradients::where('is_public', true)
                    ->where('name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_1', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_2', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_filter', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_filter_2', 'like', '%' . $searchQuery . '%')
                    ->orderBy('id', 'DESC')->paginate(12);
        }

        return view ('pages.gradients.catalog.catalog')
                    ->with('gradients', $gradients)
                    ->with('searchQuery', $searchQuery)
                    ->with('user', Auth::user());
    }

    //SHOW GRADIENTS ON INDEX
    function indexGradients(Request $request) {
        $searchQuery = $request->input('q');
        $gradients;

        if(empty($searchQuery)) {
            $gradients = Gradients::where('is_public', true)->orderBy('id', 'DESC')->paginate(4);
            return view ('pages.index')->with('gradients',  $gradients)->with('searchQuery', $searchQuery);
        } else {
            $gradients = Gradients::where('is_public', true)
                    ->where('name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_1', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_2', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_filter', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_filter_2', 'like', '%' . $searchQuery . '%')
                    ->orderBy('id', 'DESC')->paginate(9);
        }
        return view ('pages.gradients.catalog.catalog')->with('gradients', $gradients)->with('searchQuery', $searchQuery);
    }
    
    //CREATE GRADIENT POST
    public function newGradients(Request $request)
    {
        // Para checar los input, usa Validation de Laravel
        $validatedData = $request->validate([
            'nombre' => 'required',
            'color_1' => 'required',
            'color_2' => 'required',
            'color_3' => 'nullable',
            'imagen' => 'image|nullable|max:1999',
            'color_filter' => 'required',
            'color_filter_2' => 'required',
        ]);

        if($request->hasFile('imagen')){
            $filenameWithExt = $request->file('imagen')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagen')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('imagen')->storeAs('public/gradients_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //El post es valido
        $gradient = new Gradients;
        
        $gradient->name  = $request->input('nombre');
        $gradient->color_1 = $request->input('color_1');
        $gradient->color_2 = $request->input('color_2');
        $gradient->color_3 = $request->input('color_3');
        $gradient->image_name = $fileNameToStore;
        $gradient->color_filter = $request->input('color_filter');
        $gradient->color_filter_2 = $request->input('color_filter_2');
        $gradient->is_public = true;

        $user = Auth::user();
        $user->gradients()->save($gradient);

        return redirect ('/gradients/admin/panel')->with('success', true);
    }

    //POSTS PANEL
    public function userGradients()
    {
        $user = Auth::user();
        return view('pages.gradients.admin.panel')->with('gradients', $user->publicGradients);
    }

    //UPDATE GET 
    public function showEdit(Gradients $gradient) 
    {
        return view('pages.gradients.admin.edit')->with('gradient', $gradient);
    }

    /*UPDATE POST*/
    function editGradients(Request $request)
    {
        // Para checar los input, usa Validation de Laravel
        $validatedData = $request->validate([
            'gradient_id' => 'required',
            'nombre' => 'required',
            'color_1' => 'required',
            'color_2' => 'required',
            'color_3' => 'nullable',
            'imagen' => 'image|nullable|max:1999',
            'color_filter' => 'required',
            'color_filter_2' => 'required',
        ]);

        if($request->hasFile('imagen')){
            $filenameWithExt = $request->file('imagen')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagen')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('imagen')->storeAs('public/gradients_images', $fileNameToStore);
        } 

        Log::debug('Se validaron los campos');
        Log::debug('Obteniendo gradient con id: ' . $request->input('gradient_id'));

        $gradient = Gradients::find($request->input('gradient_id'));
        $this->authorize('pass', $gradient);

        Log::debug('READY!');

        $gradient->name  = $request->input('nombre');
        $gradient->color_1 = $request->input('color_1');
        $gradient->color_2 = $request->input('color_2');
        $gradient->color_3 = $request->input('color_3');
        $gradient->color_filter = $request->input('color_filter');
        $gradient->color_filter_2 = $request->input('color_filter_2');
        
        if($request->hasFile('imagen')){
            $gradient->image_name = $fileNameToStore;
        }

        $gradient->save();

        return redirect ('/gradients/admin/panel')->with('success', true);
    }

    //DELETE GET 
    public function showDelete(Gradients $gradient) {
        return view('pages.gradients.admin.panel')->with('gradient', $gradient);
    }

    //DELETE POST
    public function deleteGradients(Request $request)
    {
        $gradient = Gradients::find($request->input('gradient_id'));
        $this->authorize('pass', $gradient);

        if($gradient->image_name != 'noimage.jpg'){
            //Eliminar imagen
            Storage::delete('public/gradients_images/'.$gradient->image_name);
        }

        $gradient->delete();
        return redirect ('/gradients/admin/panel')->with('delete', true);
    }

}