<?php

namespace App\Http\Controllers;
use App\Mountain;
use Illuminate\Http\Request;

class MountainController extends Controller
{
    public function index(Request $request){
        $data =  Mountain::all();
        $users = \App\User::orderBy('created_at', 'desc')->paginate(５);
    return view('recommended',$data);
}
}
