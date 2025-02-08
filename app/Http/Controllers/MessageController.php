<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Events\MessageChannelSendEvent;
use App\Models\chanel;
use App\Models\conversation;
use App\Models\Message;
use App\Models\Group;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function sendMessage(Request $request){
        // $message = Message::find(1);
        // try {
            $data=$request->validate([
                'sender_id' => 'required|exists:users,id',
                'conversation_id' => 'nullable|exists:conversations,id',
                'receiver_id' => 'nullable|exists:users,id',
                'content' => 'required|string',
                'chanel_id' => 'nullable' ,
                'group_id' => 'nullable'
            ]);

            $message=Message::create($data);

            if($data['chanel_id']){
                event( new MessageChannelSendEvent($message));
            }elseif($data['group_id']){
                event( new MessageSent($message));
            }else{
                event( new MessageSent($message));
            }

            return response()->json(
                ['status' => 'success']
            );

        // } catch (\Throwable $th) {
        //     return response()->json(
        //         ['status' => $th]
        //     );
        // }
    }



    public function ViewChat(int $id , Request $request){
        $conversation=conversation::findOrFail($id);
        Auth::loginUsingId(1);
        $Messages=$conversation->messages()->get();
        $receiverId = $conversation->user1_id == auth()->id() ? $conversation->user2_id : $conversation->user1_id ;
        $chat_target = User::findOrFail($receiverId);
        $Channels = $request->user()->channels()->get();
        return view('public.chat.index' ,compact('Messages','conversation','conversation','chat_target'));
    }


    public function ViewChannel( chanel $chat_target , Request $request){
        $chat_target = $chat_target->first();
        $Messages=$chat_target->first()->Messages()->get();
        return view('public.chat.chanel' , compact('Messages','chat_target'));
    }
}
