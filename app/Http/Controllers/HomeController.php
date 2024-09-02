<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Documentation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('documentation');
    }

    
    public function backOffice(){
        $data = Documentation::where('type',2)->get();
        return view('backoffice',compact('data'));
    }
    public function ppob(){

        $data = Documentation::where('type',1)->get();
        return view('ppob',compact('data'));
    }
    public function whatsapp(){

        $data = Documentation::where('type',3)->get();
        return view('whatsapp',compact('data'));
    }
}
