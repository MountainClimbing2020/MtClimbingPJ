<?php

namespace App\Http\Controllers;
use App\Mountain;
use Illuminate\Http\Request;

class MountainController extends Controller
{
    public function index(Request $request){
        $data =  Mountain::all();
        $data = Mountain::orderBy('id', 'desc')->paginate(5);
    return view('recommended',compactcompact（$data);
}
}
