<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = ['subject', 'content', 'user_id', 'business_id' , 'answer'];


    public function users(){
        return $this->belongsTo(User::class);
    }
}
