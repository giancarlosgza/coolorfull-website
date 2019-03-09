<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use PayPalCheckoutSdk\Orders\OrdersGetRequest;
use App\Http\Helpers\PayPal\PayPalClient;

class PaymentController extends Controller
{
    public function create(Request $request) {

        // This is supposed to be passed always because user should have JS client authentication first
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'username' => 'required|string|max:20|unique:users',
        ]);

        $client = PayPalClient::client();
        $response = $client->execute(new OrdersGetRequest($request->input('orderId')));

        if ($validator->fails()) {
            $msg = "User failed to pass form validation but did probably"
                . " pay the amonut."
                . "\nSTATUS CODE: " . $response->statusCode
                . "\nRESULT STATUS: " . $response->result->status
                . "\nOrder ID: " . $response->result->id
                . "\nIntent: " . $response->result->intent
                . "\nName: " . $request->input('name')
                . "\nEmail: " . $request->input('email')
                . "\nPayment for: " . $response->result->purchase_units[0]->amount->value
                . "\nEncrypted Password: " . Hash::make($request->input('password'))
                . "\nEncrypter Password confirm: " . Hash::make($request->input('password_confirmation'))
                . "\nUsername: " . $request->input('username');

            Log::alert('[REGISTER-FORM-VALIDATION-FAILED]');
            Log::alert('[REGISTER-FORM-VALIDATION-FAILED]');
            Log::alert('[REGISTER-FORM-VALIDATION-FAILED] ' . $msg);
            Log::alert('[REGISTER-FORM-VALIDATION-FAILED]');
            Log::alert($validator->errors());
            Log::alert('[REGISTER-FORM-VALIDATION-FAILED]');

            try {
                mail("giancarlosgza@gmail.com","Register form validation failed", $msg);
            } catch (\Exception $e) {
                Log::alert('Email was not send ' . $e->getMessage() );
            }


            return response()->json([
                'success' => false,
                'status' => 'INCORRECT_FORM',
                'data' => $validator->errors()
            ], 200);
        }


        if ($response->statusCode === 200 && $response->result->status == "COMPLETED")
        {
            $paidUntil = null;

            switch($response->result->purchase_units[0]->amount->value)
            {
                case env('MONTHLY_PRICE'):
                    $paidUntil = Carbon::now()->addMonth();
                    break;
                case env('LIFETIME_PRICE'):
                    $paidUntil = null;
                    break;
                default:
                    break;
            }

            $user = User::create([
                'name' => $request->input('name'),
                'username' => $request->input('username'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'paid_until' => $paidUntil
            ]);

            Auth::loginUsingId($user->id, true);

            return response()->json([
                'success' => true,
                'message' => $response->result->status,
            ], 200);
        }

        return response()->json([
            'success' => false,
            'status' => $response->result->status,
        ], 200);

    }

}
