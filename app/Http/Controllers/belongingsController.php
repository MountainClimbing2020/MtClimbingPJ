<?php

namespace App\Http\Controllers;
use App\Belongings;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class belongingsController extends Controller
{
    public function index(Request $request) {
        // 現在認証しているユーザー情報を取得
        $user = Auth::user();
        // 現在認証しているユーザーidを取得
        $user_id = Auth::id();
        $belongings = Belongings::where('user_id',$user_id)->get();
        return view('belongings.top',compact('belongings','user_id'));
    }
    public function store(Request $request){
        $belonging = new Belongings();
        $belonging->user_id =$request->user_id;
        $belonging->body =$request->body;
        $belonging->save();
        return redirect('/belongings/top');
    }
    public function destroy(Belongings $belonging) {
        $belonging->delete();
        return redirect('/belongings/top');
    }
    public function edit(Belongings $belonging) {
        return view('belongings.edit')->with('belongings',$belonging);
    }
    public function update(Request $request,Belongings $belonging) {
        $belonging->body = $request->body;
        $belonging->save();
        return redirect('/belongings/top');
    }
}
