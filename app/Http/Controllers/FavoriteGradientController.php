<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gradients;
use Validator;
use Auth;
use Log;

class FavoriteGradientController extends Controller
{

    public function index() {
        // $gradients = Auth::user()->favoriteGradients();
        return 'gian es un pendejo';
        // return view('')->with('gradients', $gradients);
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
            'gradientId' => 'required',
        ]);

        if ($validator->fails()) {
            return array(
                'success' => false,
                'msg' => 'Gradient does not exist, reload the page and try again.'
            );
        }

        $user = Auth::user();
        $gradient = Gradients::find($request->input('gradientId'));

        if($user->favoriteGradients->contains($gradient)) {
            $user->favoriteGradients()->detach($gradient->id);
            return array(
                'success' => true,
                'msg' => 'Not a favorite anymore!',
            );
        } else {
            $user->favoriteGradients()->attach($gradient->id);
            return array(
                'success' => true,
                'msg' => 'New favorite gradient'
            );
        }

    }
}
