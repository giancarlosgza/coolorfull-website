<?php

namespace App\Http\Controllers;

use App\Palette;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class PaletteController extends Controller
{
    //SHOW GRADIENTS
    function showPalettes(Palette $palette) {
        return view('pages.palette.catalog.show')->with('palette', $palette);
    }

    //SHOW GRADIENTS IN CATALOG
    function catalogPalettes(Request $request) {
        $searchQuery = $request->input('q');
        $palettes;

        if(empty($searchQuery)) {
            $palettes = Palette::orderBy('id', 'DESC')->paginate(12);
        } else {
            $palettes = DB::table('palettes')
                    ->where('name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_1', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_2', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_3', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_4', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_5', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_filter', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_filter_2', 'like', '%' . $searchQuery . '%')
                    ->orderBy('id', 'DESC')->paginate(12);
        }
        return view ('pages.palette.catalog.catalog')->with('palettes', $palettes)->with('searchQuery', $searchQuery);
    }

    //SHOW GRADIENTS ON INDEX
    function indexPalettes(Request $request) {
        $searchQuery = $request->input('q');
        $palettes;

        if(empty($searchQuery)) {
            $palettes = Palette::orderBy('id', 'DESC')->paginate(3);
            return view ('pages.index')->with('palettes',  $palettes)->with('searchQuery', $searchQuery);
        } else {
            $palettes = DB::table('palettes')
                    ->where('name', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_1', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_2', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_3', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_4', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_5', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_filter', 'like', '%' . $searchQuery . '%')
                    ->orWhere('color_filter_2', 'like', '%' . $searchQuery . '%')
                    ->orderBy('id', 'DESC')->paginate(9);
        }
        return view ('pages.palette.catalog.catalog')->with('palettes', $palettes)->with('searchQuery', $searchQuery);
    }
    
    //CREATE GRADIENT POST
    public function newPalettes(Request $request)
    {
        // Para checar los input, usa Validation de Laravel
        $validatedData = $request->validate([
            'nombre' => 'required',
            'color_1' => 'required',
            'color_2' => 'required',
            'color_3' => 'required',
            'color_4' => 'required',
            'color_5' => 'required',
            'imagen' => 'image|nullable|max:1999',
            'color_filter' => 'required',
            'color_filter_2' => 'required',
        ]);

        if($request->hasFile('imagen')){
            $filenameWithExt = $request->file('imagen')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagen')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('imagen')->storeAs('public/palettes_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        //El post es valido
        $palette = new Palette;
        
        $palette->name  = $request->input('nombre');
        $palette->color_1 = $request->input('color_1');
        $palette->color_2 = $request->input('color_2');
        $palette->color_3 = $request->input('color_3');
        $palette->color_4 = $request->input('color_4');
        $palette->color_5 = $request->input('color_5');
        $palette->image_name = $fileNameToStore;
        $palette->color_filter = $request->input('color_filter');
        $palette->color_filter_2 = $request->input('color_filter_2');

        $user = Auth::user();
        $user->palettes()->save($palette);

        return redirect ('/palettes/admin/panel')->with('success', true);
    }

    //POSTS PANEL
    public function userPalettes()
    {
        $user_id = auth()->user('user_id');
        $user = Auth::user();
        return view('pages.palette.admin.panel')->with('palettes', $user->palettes);
    }

    //UPDATE GET 
    public function showEdit(Palette $palette) 
    {
        return view('pages.palette.admin.edit')->with('palette', $palette);
    }

    /*UPDATE POST*/
    function editPalettes(Request $request)
    {
        // Para checar los input, usa Validation de Laravel
        $validatedData = $request->validate([
            'palette_id' => 'required',
            'nombre' => 'required',
            'color_1' => 'required',
            'color_2' => 'required',
            'color_3' => 'required',
            'color_4' => 'required',
            'color_5' => 'required',
            'imagen' => 'image|nullable|max:1999',
            'color_filter' => 'required',
            'color_filter_2' => 'required',
        ]);

        if($request->hasFile('imagen')){
            $filenameWithExt = $request->file('imagen')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagen')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('imagen')->storeAs('public/palettes_images', $fileNameToStore);
        } 

        Log::debug('Se validaron los campos');
        Log::debug('Obteniendo palette con id: ' . $request->input('palette_id'));

        $palette = Palette::find($request->input('palette_id'));
        $this->authorize('pass', $palette);

        Log::debug('READY!');

        $palette->name  = $request->input('nombre');
        $palette->color_1 = $request->input('color_1');
        $palette->color_2 = $request->input('color_2');
        $palette->color_3 = $request->input('color_3');
        $palette->color_4 = $request->input('color_4');
        $palette->color_5 = $request->input('color_5');
        $palette->color_filter = $request->input('color_filter');
        $palette->color_filter_2 = $request->input('color_filter_2');
        
        if($request->hasFile('imagen')){
            $palette->image_name = $fileNameToStore;
        }

        $palette->save();

        return redirect ('/palettes/admin/panel')->with('success', true);
    }

    //DELETE GET 
    public function showDelete(Palette $palette) {
        return view('pages.palette.admin.panel')->with('palette', $palette);
    }

    //DELETE POST
    public function deletePalettes(Request $request)
    {
        $palette = Palette::find($request->input('palette_id'));
        $this->authorize('pass', $palette);

        if($palette->image_name != 'noimage.jpg'){
            //Eliminar imagen
            Storage::delete('public/palettes_images/'.$palette->image_name);
        }

        $palette->delete();
        return redirect ('/palettes/admin/panel')->with('delete', true);
    }
}
