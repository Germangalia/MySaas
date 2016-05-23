<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
        \App\Events\UserLogged::class => [
            \App\Listeners\UserUpdateLastLogin::class,
        ],
        \App\Events\UserHsaChanged::class => [
            \App\Listeners\UserCacheForget::class,
        ],
        \App\Events\ShotoutAdded::class => [
            \App\Listeners\ShotoutSendNotification::class,
        ],
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);

        //
    }
}
