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
        $belongings->body =$request->body;
        $belongings->save();
        return redirect('/');
    }
    public function destroy(belongings $belongings) {
        $belongings->delete();
       return redirect('/');
     }
     public function edit(todo $todo) {
        return view('todos.edit')->with('todo',$todo);
      }
}
