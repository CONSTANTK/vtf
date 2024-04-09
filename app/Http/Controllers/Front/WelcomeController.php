<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $data['pageTitle'] = "VT::Volta Taekwondo";
        $data['address'] = "Box xxx";
        $data['mobile_number'] = "233466383";
        return view('front.welcome', compact('data'));
    }
}
