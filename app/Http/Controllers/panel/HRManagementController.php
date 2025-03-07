<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Services\UserServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SardarBackend\RestfulApiHelper\RestfulApi\Fecades\ApiResponseFacade;
// use App\RestfulApi\Fecades\ApiResponseFacade;
class HRManagementController extends Controller
{

    public function __construct(private UserServices $BlogServices) {
    }
    public function employees(Request $request){
        $result = $this->BlogServices->getAll($request->all());
        // dd( collect($result));
        // return (new ApiResponse())
        // ->setMessage('Order placed successfully')
        // ->setData(['order_id' => 12345])
        // ->setAppends(['processing_time' => '2 seconds'])
        // ->setStatus(201)
        // ->response();
        return ApiResponseFacade::withData(UserResource::collection($result->data))->withMessage('test')->withStatus(404)->build()->Response();
        // return view('public.panel.componnets.employees');
    }

}
