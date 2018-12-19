<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subject;
use App\pivot;
use App\User;
use App\learning;
use Illuminate\Support\Facades\Input;
use DB;
use Auth;
class SubjectController extends Controller
{
    public function index() {
        $user = Auth::user()->name;
        return view('form', compact('user'));
    }

    public function index2() {
        $user = Auth::user()->name;
        $show_subject = subject::All();
        $show_learning = learning::All();
        return view('view', compact('user','show_subject', 'show_learning'));
    }

    public function store(Request $request)
    {
        $subject = new Subject();
        $subject->id_subject = $request->input('id_subject');
        $subject->nama_subject = $request->input('nama_subject');

        $subject->save();


        return redirect('/view');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = Auth::user()->name;
        $subject = subject::findOrFail($id);
        //dd($subject);
        return view('editsubject', compact('subject','user'));
    }

    public function update(Request $request, $id)
    {
        $subject = subject::find($id);
        $subject->id_subject = $request->input('id_subject');
        $subject->nama_subject = $request->input('nama_subject');
        $subject->save();
        //dd($subject->id_subject);
        return redirect('/view');
    }

    public function destroy($id)
    {
         $subject = subject::where('id_subject', $id)->delete();

        return redirect('/view')->with('info','Data Berhasil Dihapus!');
    }
    
}
