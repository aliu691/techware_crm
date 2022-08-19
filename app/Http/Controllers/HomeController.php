<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
//use App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $id = Auth::user()->id;
        
        $oppurtunity = DB::table('oppurtunities')->latest()->where('user_id',$id)->get();

        //card values

        $completed = DB::table('oppurtunities')->where('user_id',$id)->where('status','complete')->get();

        $totalOppurtunity = $oppurtunity->count();
        $completedOppurtunity = $completed->count();

        $inProgressOppurtunity = $totalOppurtunity - $completedOppurtunity;

        return view('users.index', ['oppurtunity'=>$oppurtunity, 'totalOppurtunity'=>$totalOppurtunity, 'completedOppurtunity'=>$completedOppurtunity, 'inProgressOppurtunity'=>$inProgressOppurtunity]);
        //return view('users.index');
    }

    
}
