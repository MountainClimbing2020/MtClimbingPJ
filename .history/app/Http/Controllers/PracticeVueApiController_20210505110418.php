<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeVueApiController extends Controller
{
    public function getAllMessage(Request $request) {

        $list = DB::select(
            "select task, created_at from todos order by created_at asc"
        );

        return response()->json(['tasks' => $list]);
    }

}
