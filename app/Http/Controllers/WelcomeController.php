<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;

class WelcomeController extends Controller
{
    //
	public function index()
	{
		return view('welcome.index');
	}

	public function login()
	{
		return view('pages.login');
	}

	public function check( Request $request)
	{
		$username = $request->input('username');
		$password= $request->input('password');
		$search_result = DB::table('user_info')->where('username',$username)->first();
		if($search_result->password == $password)
			return view('pages.dashboard');
		else
			return view('welcome.index');
	}

	public function dashboard(Request $request)
	{
		return view('pages.dashboard');
	}
}
