<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class complaint extends Model
{
    protected $fillable = ['subject', 'content', 'user_id', 'business_id'];

}
