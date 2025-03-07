<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = ['applicant_name', 'email', 'phone', 'business_id' , 'resume_file' , 'status'];

}
