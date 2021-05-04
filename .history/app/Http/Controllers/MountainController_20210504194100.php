<?php

namespace App\Http\Controllers;
use App\Mountain;
use Illuminate\Http\Request;

class MountainController extends Controller
{
    public function index(Request $request){
        $data =  App\Mountain::all();
    return view('recommended',$data);
}
}
