<?php

namespace App\Http\Controllers;

use App\Http\Helpers\PayPal\PayPalClient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PayPalCheckoutSdk\Orders\OrdersGetRequest;
use Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $sendAlert = !$user->validSubscription() && !$user->renew_alert;
        $alertMessage = _('Your suscription has come to an end. To renew it click on your name, then on the Renew Subscription link.');

        if($sendAlert)
        {
            $user->renew_alert = true;
            $user->save();
        } else {
            // In our database is valid but this checks that user didnt refund
            $client = PayPalClient::client();
            $response = $client->execute(new OrdersGetRequest($user->paypal_order_id));


            if(isset($response->result->purchase_units[0]->payments->refunds))
            {
                $alertMessage = _('There has been an inconvinient with your payment. We have suspended your subscription.');
                $sendAlert = true;
                $user->renew_alert = true;
                $user->paid_until = Carbon::now()->subMonth();
                $user->save();
            }
        }
        return view('home')->with('alert', $sendAlert)->with('alertMessage', $alertMessage);
    }
}
