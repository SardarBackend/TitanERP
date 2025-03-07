<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\business;
use App\Models\complaint;
use App\Models\Resume;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

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
//        Auth::loginUsingId(1);
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


    public function SendcomplaintView(){
        return view('public.complaint');
    }

    public function SendcomplaintPost(Request $request)
    {
        $data = $request->validate([
            'subject' => 'required|integer',
            'content' => 'required|string',
            'business_id' => 'required|string',
            'user_id' => 'required|integer|exists:users,id'
        ]);
        try {
            $data['business_id'] = business::where('name',$data['business'])->first()->id;
            complaint::create($data);

        } catch (\Throwable $th) {
            //throw $th;
        }
        return back();
    }

    public function Attendance(){
        return view('public.Attendance');
    }

    public function departure(Request $request){
    $data = $request->validate([
        'remarks'   => 'nullable|string',
        'check_in'  => 'required|date',
    ]);

    $data['user_id'] = auth()->id();
    $data['date'] = Carbon::today()->toDateString();

    $attendance = Attendance::where('date', $data['date'])
                            ->where('user_id', auth()->id())
                            ->first();

    if ($attendance) {
        $attendance->update($data);
    } else {
        Attendance::create($data); // در غیر این صورت، یک حضور جدید ثبت می‌شود
    }

    return back();

    }



    public function BrodcastBusiness(){
    }
    public function RegisterBusinesses(){
        return view('public.RegisterBusinesses');
    }
    public function RulesView(){
        return view('public.RulesView');
    }

}
