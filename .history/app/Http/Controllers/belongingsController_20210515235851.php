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
        dd($request);
        $belonging->goods =$request->goods;
        $belonging->save();
        return redirect('/belongings/top');
    }
    public function destroy(belongings $belonging) {
        $belonging->delete();
        return redirect('/belongings/top');
    }
    public function edit(belongings $belonging) {
        return view('belongings.edit')->with('belongings',$belonging);
    }
    public function update(Request $request,belongings $belonging) {
        $belonging->goods = $request->goods;
        $belonging->save();
        return redirect('/belongings/top');
    }
}
