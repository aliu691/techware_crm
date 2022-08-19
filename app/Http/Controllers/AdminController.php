<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $opputinities = DB::table('oppurtunities')->latest()->paginate(5);

        $oppurtunity = DB::table('oppurtunities')->count();

        $completeOppurtunity = DB::table('oppurtunities')->where('status', 'complete')->count();

        $inProgressOppurtunity = $oppurtunity - $completeOppurtunity;

        $users = DB::table('users')->get();


        return view('admin/dashboard', [
            'oppurtunity' => $oppurtunity, 'completeOppurtunity' => $completeOppurtunity, 'inProgressOppurtunity' => $inProgressOppurtunity,
            'users' => $users,
            'oppurtunities' => $opputinities
        ]);
    }

    public function allUsersOppurtunities()
    {

        $oppurtunity = DB::table('oppurtunities')->latest()->get();
        $users = DB::table('users')->get();

        return view('admin.allUsersOppurtunities', ['oppurtunity' => $oppurtunity, 'users' => $users]);
        //{{ Auth::user()->name }}

    }
}
