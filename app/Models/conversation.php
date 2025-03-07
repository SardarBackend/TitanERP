<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conversation extends Model
{

    use HasFactory;

    public function messages(){

        return $this->hasMany(Message::class);

    }

    public function user($colum){

        return $this->belongsTo(User::class,$colum);

    }

}
