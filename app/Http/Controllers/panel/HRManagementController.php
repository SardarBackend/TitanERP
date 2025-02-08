<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HRManagementController extends Controller
{
    public function employees(){

        return view('public.panel.componnets.employees');
    }
}
