<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $data['pageTitle'] = "VT::About Us";
        $data['address'] = "Box xxx";
        $data['mobile_number'] = "233466383";
        return view('front.about', compact('data'));
    }
}
