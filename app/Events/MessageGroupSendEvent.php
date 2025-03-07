<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageGroupSendEvent
{

    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;

    /**
     * Create a new event instance.
     */

    /**
     * Create a new event instance.
     */
    public function __construct( $message)

    {
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */

    public function broadcastOn(): array
    {

        return [
            new PresenceChannel('Group.' . $this->message->Group()->first()->id),
        ];
    }

    public function broadcastWith(){
        return [
            'id' => $this->message->id ,
            'sender_id' => $this->message->sender_id,
            'receiver_id' => $this->message->receiver_id,
            'content' => $this->message->content,
            'created_at' =>  jdate($this->message->created_at)->format('H:i A'),
        ];
    }


    public function broadcastAs()
    {
        return 'MessageGroupSend'; // نام رویداد
    }
}
