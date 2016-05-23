<?php

namespace App\Events;

use App\Events\Event;
use App\Http\Controllers\ShotOutController;
use App\ShotOut;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ShotoutAdded extends Event implements ShouldBroadcast
{
    use SerializesModels;

    public $shotout;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(ShotOut $shotout)
    {
        $this->shotout = $shotout;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        //Diem en quin canal es publica l'esdeveniment per a la llista de subscriptors.
        return ['shoutout-added'];
    }
}
