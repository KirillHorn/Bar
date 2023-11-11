<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function auth() {
    return view('auth.autho');
   }

   public function regist() {
      return view('auth.register');
   }
   public function personal() {
      return view('personalcub');
   }
}
