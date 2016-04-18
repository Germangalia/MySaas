<?php

namespace App\Listeners;

use App\Events\UserHsaChanged;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class UserCacheForget
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserHsaChanged  $event
     * @return void
     */
    public function handle(UserHsaChanged $event)
    {
        Cache::forget('query.user');
    }
}
