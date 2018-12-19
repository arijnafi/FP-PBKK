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

class PivotController extends Controller
{
    public function index() {
        $user = Auth::user()->name;
        $subject = subject::All();
        return view('pilih', compact('user','subject'));
    }
    public function index2() {
        $id = Auth::user()->id;
        $d_user = User::findOrFail($id);
        $subject_id = pivot::where('user_id', $id)->pluck('subject_id');
        // dd($subject_id);
        $user = Auth::user()->name;
        return view('subjectsaya', compact('d_user','user'));
    }

    public function store(Request $request)
    {
        $user = Auth::user()->id;

        $p = new pivot();
        $p->user_id = Auth::user()->id;
        $p->subject_id = $request->input('id_subject');
        $p->save();     
        //dd($p->subject_id);

        return redirect('/subjectsaya');
    }
    
}
