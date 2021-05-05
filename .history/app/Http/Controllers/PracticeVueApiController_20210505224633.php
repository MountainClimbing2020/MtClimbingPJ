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
    public function sendMessage(Request $request) {

        $messages = DB::transaction(function() use($request)
        {
            $create = new Todo();
            $create->task = $request['message'];
            $create->save();

            // 前回の最終更新日以上のメッセージを抽出 → 送ったメッセージを抽出
            $updateList = $create->select(
                [
                    'task',
                    'created_at',
                ]
            )
                ->where('created_at', '>', $request['created_at'])
                ->orderBy('created_at', 'asc')
                ->get();
            return $updateList;
        });

       return response()->json(['tasks'=> $messages]);
   }


}
