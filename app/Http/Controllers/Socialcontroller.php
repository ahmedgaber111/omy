<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class Socialcontroller extends Controller
{
    public function redirect ($sevice){

         return Socialite::driver($sevice)->redirect();
    }
    public function callbacl ($sevice){

       return  $user=Socialite::with($sevice)->user();


    }
}
