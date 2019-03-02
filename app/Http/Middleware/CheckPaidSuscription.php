<?php

namespace App\Http\Middleware;

use Closure;

class CheckPaidSuscription
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $paidUntil = strtotime($request->user->paid_until);

        if(strtotime(date('Ymd')) > $paidUntil) {
            return redirect( route('payingform') );
        }

        return $next($request);
    }
}
