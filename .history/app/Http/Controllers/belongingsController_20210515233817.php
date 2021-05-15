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

// DBインサート
$user = new User([
    'name' => $request->input('name'),
    'email' => $request->input('email'),
    'password' => bcrypt($request->input('password')),
    'area' => 'required',
    'experience'=> 'required'
]);



    public function destroy(belongings $belongings) {
        $belongings->delete();
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
