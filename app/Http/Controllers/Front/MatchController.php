<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    public function index(){
        $data['pageTitle'] = "VT::Matches";
        $data['address'] = "Box xxx";
        $data['mobile_number'] = "233466383";
        return view('front.match', compact('data'));
    }
}
