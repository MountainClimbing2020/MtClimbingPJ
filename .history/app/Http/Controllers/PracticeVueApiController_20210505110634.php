<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeVueApiController extends Controller
{
    public function getAllMessage(Request $request) {

        $list = DB::select(
            "select , created_at from belongings order by created_at asc"
        );

        return response()->json(['belongings' => $list]);
    }

}
