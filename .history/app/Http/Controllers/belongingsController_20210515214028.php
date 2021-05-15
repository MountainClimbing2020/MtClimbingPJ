<?php

namespace App\Http\Controllers;
use App\Belongings;
use Illuminate\Http\Request;

class belongingsController extends Controller
{
    public function index() {
        $belongings = Belongings::all();
            'select goods, created_at from belongings order by created_at asc'
        );

        return view('belongings/top');
    }

}
