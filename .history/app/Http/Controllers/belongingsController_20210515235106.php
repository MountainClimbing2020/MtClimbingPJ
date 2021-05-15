<?php

namespace App\Http\Controllers;
use App\Belongings;
use Illuminate\Http\Request;

class belongingsController extends Controller
{
    public function index() {
        $belongings = Belongings::all();
        return view('belongings.top') ->with('belongings',$belongings);
    }
    public function store(Request $request){
        $belonging = new Belongings();
        $belonging->goods =$request->goods;
        $belonging->save();
        return redirect('/belongings/top');
    }
    public function destroy(belongings $belongings) {
        $belonging->delete();
        return redirect('/belongings/top');
    }
    public function edit(belongings $belongings) {
        return view('belongings.edit')->with('belongings',$belongings);
    }
    public function update(Request $request,belongings $belongings) {
        $belongings->goods = $request->goods;
        $belongings->save();
        return redirect('/belongings/top');
    }
}
