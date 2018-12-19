<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subject;
use App\pivot;
use App\learning;
use App\User;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;

class LearningController extends Controller
{
    public function index() {
        $user = User::where('id',session('key'))->value('name');
        $subject = subject::All();
        return view('dashboard', compact('user','subject'));
    }

    public function store(Request $request)
    {
        $learning = new learning();
        $learning->id_learning = $request->input('id_learning');
        $learning->subject_id = $request->input('subject_id');
        $learning->material = $request->input('material');

        $learning->save();


        return redirect('/view');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = Auth::user()->name;
        $learning = learning::findOrFail($id);
        $subject = subject::All();
        return view('editlearning', compact('learning','user', 'subject'));
    }

    public function update(Request $request, $id)
    {
        $learning = learning::find($id);
        $learning->id_learning = $request->input('id_learning');
        $learning->subject_id = $request->input('subject_id');
        $learning->material = $request->input('material');

        $learning->save();

        return redirect('/view');
    }

    public function destroy($id)
    {
         $learning = learning::where('id_learning', $id)->delete();

        return redirect('/view')->with('info','Data Berhasil Dihapus!');
    }
    
}
