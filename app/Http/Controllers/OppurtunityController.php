<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oppurtunity;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;


class OppurtunityController extends Controller
{

    //index function in the home controller since index information displays on the home page

    public function createOppurtunityForm(){
        return view('users.createOppurtunityForm');
    }

    public function createOppurtunity(Request $request){


        $customer = $request->input('customer');
        $service = $request->input('service');
        $description = $request->input('description');
        $duration = $request->input('duration');
        $partner = $request->input('partner');
        $status = $request->input('status');
        $id = $request->input('user_id');

        $id = Auth::user()->id;


        DB::table('oppurtunities')->insert([
            'customer'=>$customer,
            'service' => $service,
            'description' => $description,
            'duration' => $duration,
            'partner' => $partner,
            'status' => $status,
            'user_id' => $id

        ]);

        return \redirect('/home');
    }

    public function editOppurtunityForm(Request $request, $id){
        $oppurtunity = DB::table('oppurtunities')->where('id',$id)->get();
        
        return view('users.editOppurtunityForm',['oppurtunity'=>$oppurtunity]);
    }
    public function editOppurtunity(Request $request){

        $id = $request->input('id');
        $customer = $request->input('customer');
        $service = $request->input('service');
        $description = $request->input('description');
        $duration = $request->input('duration');
        $partner = $request->input('partner');
        $status = $request->input('status');

        
        //inserting into DB

        DB::table('oppurtunities')->where('id',$id)->update([
            'customer'=>$customer,
            'service' => $service,
            'description' => $description,
            'duration' => $duration,
            'partner' => $partner,
            'status' => $status

        ]);
        //use redirect after an insert operation

        return \redirect('/home');
    }

    public function allOppurtunities(){

        $id = Auth::user()->id;
        
        $oppurtunity = DB::table('oppurtunities')->latest()->where('user_id',$id)->get();

        return view('users.allOppurtunities',['oppurtunity'=>$oppurtunity]);
        
    }

    public function deleteOppurtunity(Request $request, $id){
        DB::table('oppurtunities')->where('id',$id)->delete();

        return \redirect('/allOppurtunity');
    }
    
}
