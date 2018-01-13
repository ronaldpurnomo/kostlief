<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\User;

class UserController extends Controller
{
    
    public function getLogin(){

    	return view('login');
    }

    public function login(Request $request){
    	$credentials = ['email' => $request['email'], 'password' => $request['password']];

    	if(Auth::attempt($credentials)) { //Auth attemp return boolean
    		return redirect('/');
    	}
    	return redirect()->back();
    }

    public function register(Request $request){
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required|email',
    		'password' => 'required|min:6',
    		'password_confirmation' => 'required|same:password',
    		'picture' => 'required',
    		'gender' => 'required',
    		'dob' => 'required',
    		'address' => 'required',
    	]);

    	$user = new User;

    	$file = $request->file('picture');
    	$file->move(public_path('/user/') , $file->getClientOriginalName());

    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->gender = $request->gender;
    	$user->dob = $request->dob;
    	$user->image = $file->getClientOriginalName();
    	$user->address = $request->address;
    	$user->save();

    	return redirect('/');
    }

    public function logout(){
    	Auth::logout();

    	return redirect('/');
    }

    //======Kos=====

    public function display(){
    	return view('kos');
    }
    
}
