<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['conversation_id', 'sender_id', 'receiver_id', 'content'];


    public function User(){
        return $this->belongsTo(User::class , 'sender_id');
    }

    public function channel(){
        return $this->belongsTo(chanel::class , 'sender_id');
    }
}
