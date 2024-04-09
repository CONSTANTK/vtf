<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $data['pageTitle'] = "VT::Contact Us";
        $data['address'] = "Box xxx";
        $data['mobile_number'] = "233466383";
        return view('front.contact', compact('data'));
    }
    public function create(){
        return view('front.contact.create');
    }
    public function store(Request $request){
        dd($request);
    }
}
