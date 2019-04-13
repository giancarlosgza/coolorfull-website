<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Gradients;
use Auth;
use Illuminate\Support\Facades\DB;


class ProGradientController extends Controller
{
    /**
     * Stores a new non-public gradient for the user
     * @param Request
     */
    public static function create(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'max:190',
            'color1' => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
            'color2' => ['required', 'regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
            'color3' => ['regex:/^#([A-Fa-f0-9]{6}|[A-Fa-f0-9]{3})$/'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
            ]);
        }

        $gradient = new Gradients();
        $user = Auth::user();

        $gradient->name = $request->name;
        $gradient->color_1 = $request->color1;
        $gradient->color_2 = $request->color2;
        $gradient->color_3 = $request->color3;

        $user->gradients()->save($gradient);
        $gradient->save();

        return response()->json([
            'success' => true,
            'message' => 'everything correct',
        ]);
    }

    //INDEX GRADIENTS
    public function index() {
        //$gradients;
        //$gradients = Gradients::orderBy('id', 'DESC')->paginate(4);
        return view('pages.gradients.save')->with('gradients', Auth::user()->gradients);
    }
}
