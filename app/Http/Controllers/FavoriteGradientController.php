<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gradients;
use App\User;
use Validator;
use Auth;
use Log;

class FavoriteGradientController extends Controller
{

    public function index() {
        return view('pages.gradients.favorites')->with('user', Auth::user());
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
            return repsonse()->json(array(
                'success' => false,
                'msg' => 'Gradient does not exist, reload the page and try again.'
            ));
        }

        $user = Auth::user();
        $gradient = Gradients::find($request->input('gradientId'));
        
        if($gradient->is_public)
        {
            if($user->favoriteGradients->contains($gradient)) {
                $user->favoriteGradients()->detach($gradient->id);
                return response()->json(array(
                    'success' => true,
                    'code' => 0,
                    'msg' => 'Gradient ' . $gradient->name . ' is not your favorite anymore.',
                ));
            }
            $user->favoriteGradients()->attach($gradient->id);
            return response()->json(array(
                'success' => true,
                'code' => 1,
                'msg' => 'Gradient ' . $gradient->name . ' is now your favorite.',
            ));
        }

        return response()->json(array(
            'success' => false,
            'msg' => 'Gradient with ID ' . $gradient->id . ' is not valid.'
        ));
    }
}
