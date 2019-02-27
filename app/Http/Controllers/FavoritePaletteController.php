<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Palette;

class FavoritePaletteController extends Controller
{
    public function index() {
        // return view('pages.gradients.favorites')->with('user', Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'paletteId' => 'required',
        ]);

        if ($validator->fails()) {
            return array(
                'success' => false,
                'msg' => 'Palette does not exist, reload the page and try again.'
            );
        }

        $user = Auth::user();
        $palette = Palette::find($request->input('paletteId'));

        if($user->favoritePalettes->contains($palette)) {
            $user->favoritePalettes()->detach($palette->id);
            return array(
                'success' => true,
                'code' => 0,
                'msg' => 'Not a favorite anymore!',
            );
        } else {
            $user->favoritePalettes()->attach($palette->id);
            return array(
                'success' => true,
                'code' => 1,
                'msg' => 'New favorite palette'
            );
        }

    }
}
