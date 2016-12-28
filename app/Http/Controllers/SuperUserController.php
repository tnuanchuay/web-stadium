<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\ServiceProvider;

class SuperUserController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function ViewUser(){
    	$result = ServiceProvider::all();
    	// return $result;
    	return view('superuser.user.view')->with(['result'=>$result]);
    }

    public function UpdateUserView($id){
    	$user = ServiceProvider::find($id);
    	return $user;
    }
}
