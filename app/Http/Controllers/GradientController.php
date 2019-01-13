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
        return view('pages.gradients.catalog.show')->with('gradient', $gradient);
    }

    //SHOW GRADIENTS IN CATALOG
    function catalogGradients(Request $request) {
        $searchQuery = $request->input('q');
        $gradients;

        if(empty($searchQuery)) {
            $gradients = Gradients::orderBy('id', 'DESC')->paginate(9);
        } else {
            $gradients = DB::table('gradients')
                    ->where('name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_1', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_2', 'like', '%' . $searchQuery . '%')
                    ->orderBy('id', 'DESC')->paginate(9);
        }
        return view ('pages.gradients.catalog.catalog')->with('gradients', $gradients)->with('searchQuery', $searchQuery);
    }

    //SHOW GRADIENTS ON INDEX
    function indexGradients(Request $request) {
        $searchQuery = $request->input('q');
        $gradients;

        if(empty($searchQuery)) {
            $gradients = Gradients::orderBy('id', 'DESC')->paginate(4);
            return view ('pages.index')->with('gradients',  $gradients)->with('searchQuery', $searchQuery);
        } else {
            $gradients = DB::table('gradients')
                    ->where('name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_1', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_2', 'like', '%' . $searchQuery . '%')
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
            'imagen' => 'image|nullable|max:1999',
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
        $gradient->image_name = $fileNameToStore;

        $user = Auth::user();
        $user->gradients()->save($gradient);

        return redirect ('/gradients/admin/panel')->with('success', true);
    }

    //POSTS PANEL
    public function userGradients()
    {
        $user_id = auth()->user('user_id');
        $user = Auth::user();
        return view('pages.gradients.admin.panel')->with('gradients', $user->gradients);
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
            'imagen' => 'image|nullable|max:1999',
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