<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class business extends Model
{
    use HasFactory;


    // public function employees(){
    //     return $this->belongsToMany(employee::class);
    // }

    public function request(){
        return $this->hasMany(Request::class);
    }

    public function employees(){
        return $this->hasMany(User::class,'business_id');
    }


    public function resumes(){
        return $this->hasMany(Resume::class,'business_id');
    }

    public function complaints(){
        return $this->hasMany(complaint::class , 'business_id');
    }
}
