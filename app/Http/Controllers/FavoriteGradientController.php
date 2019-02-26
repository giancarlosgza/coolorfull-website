<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class FavoriteGradientController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gradient-id' => 'required',
        ]);

        if ($validator->fails()) {
            return array(
                'success' => false,
                'msg' => 'Gradient does not exist, reload the page and try again.'
            );
        }

        $user = Auth::user();
        
        try {
            $user->favoriteGradients()->attach($request->input('gradient-id'));
            return array(
                'success' => true,
                'msg' => 'New favorite gradient'
            );
        } catch(Exception $e) {
            return array(
                'success' => false,
                'msg' => 'Gradient does not exist, reload the page and try again.'
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
