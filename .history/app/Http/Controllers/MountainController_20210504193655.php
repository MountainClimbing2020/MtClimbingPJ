<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MountainController extends Controller
{
    public function index(Request $request){
        $data =  App\Mountain::all();
    return('/recommended')
}
