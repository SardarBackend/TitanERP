<?php

namespace App\Http\Controllers;

use App\Models\business;
use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function Request()
    {
        return view('public.request');
    }

    public function SendResumeView()
    {
        return view('public.SendResume');
    }

    public function SendResumePost(Request $request)
    {
        $data = $request->validate([
            'phone' => 'required|integer',
            'message' => 'required|string',
            'business' => 'required|string',
            'file' => 'required|file'
        ]);
        try {
            $data['business'] = business::where('name',$data['business'])->first()->id;
            $data['file']    = '/storage/' . Storage::disk('public')->putFile('files' , $request->file('file'));
            Resume::create($data);

        } catch (\Throwable $th) {
            //throw $th;
        }
        return back();
    }

    public function BrodcastBusiness(){
    }
}
