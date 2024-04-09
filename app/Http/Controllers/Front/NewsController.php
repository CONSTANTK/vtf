<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(){
        $data['pageTitle'] = "VT::Our News";
        $data['address'] = "Box xxx";
        $data['mobile_number'] = "233466383";
        return view('front.news', compact('data'));
    }
}
