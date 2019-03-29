<?php

namespace App\Http\Middleware;

use Closure;

class CheckPaidSubscription
{
    /**
     * Handle an incoming request.
     * If user paid_until date is not null (lifetime sub) or has passed it will
     * redirect to payment form
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $request->user()->paid_until && 
                strtotime(date('Ymd')) > strtotime($request->user()->paid_until) ? 
                redirect( route('payingForm') ) : $next($request);
    }
}
