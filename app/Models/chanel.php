<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chanel extends Model
{
    use HasFactory;

    public function Messages(){
        return $this->hasMany(Message::class , 'chanel_id');
    }

    public function Users(){
        return $this->belongsToMany(User::class);
    }
}
