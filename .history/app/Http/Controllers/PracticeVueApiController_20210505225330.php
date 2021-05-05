<?php

namespace App\Http\Controllers;
use App\Belongings;
use Illuminate\Http\Request;

class PracticeVueApiController extends Controller
{
    public function getAllMessage(Request $request) {

        $list = Belongings::select(
            "select goods, created_at from belongings order by created_at asc"
        );

        return view('belongings/belongings',response()->json(['goods' => $list]));
    }

}
