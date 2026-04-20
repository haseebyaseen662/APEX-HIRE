<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use App\Models\User;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserRegistered
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user;
    public string $appUrl;

    public function __construct(User $user, string $appUrl)
    {
        $this->user = $user;
        $this->appUrl = $appUrl;
    }
}
