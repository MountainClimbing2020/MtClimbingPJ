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
        $belongings = new Belongings();
        $belongings->goods =$request->goods;
        $belongings->save();
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
        $belonging->goods = $request->goods;
        $belonging->save();
        return redirect('/belongings/top');
    }
}
