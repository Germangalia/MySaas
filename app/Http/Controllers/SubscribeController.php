<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class SubscribeController extends Controller
{
    public function subscribe(Requests $requests)
    {
        $creditCardToken = $requests->input('stripeToken');
        $user = User::find(1);
        $user->newSubscription('main', 'monthly')->create($creditCardToken);
    }
}
