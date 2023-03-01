<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

class LogoutController extends Controller
{
	public function logout()
	{
		Session::flush();
		
		Auth::logout();

		return redirect('login');
	}
}
