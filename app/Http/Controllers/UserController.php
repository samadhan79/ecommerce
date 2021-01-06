<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
	function login(Request $req){
		$user =  User::where(['email'=>$req->email])->first();
		
		if($user || Hash::check($req->password,$user->password)){
			$req->session()->put('user',$user);
			return redirect('/');

		}else{
			return 'username and password not match';
		}
	}
}
