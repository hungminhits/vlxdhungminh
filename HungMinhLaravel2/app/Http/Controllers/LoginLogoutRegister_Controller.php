<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductEditRequest;
use DB;
use File;
use Illuminate\Support\Facades\Input;

class LoginLogoutRegister_Controller extends Controller
{
   public function Login()
   {
   	return view('page.dangnhap');
   }
   public function Register()
   {
   	return view('page.dangky');
   }
}
