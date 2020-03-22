<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MyService;


class MyServicesController extends Controller
{
    public function index ()
    {
        $get_service = MyService::get_current_user_services();



        return view('frontend.user.my_services',
            [
                'get_services' => $get_service
            ]);
    }
}