<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;


use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index(){
        if(View::exists('welcome')){
            $activeNavItem = 'Home';
            return view('welcome', ["activeNav" => $activeNavItem]);
        }
        else{
            return abort(404);
        }
    }
    public function reservation(){
        if(View::exists('customer.reservation')){
            $steps = 'Step 1';
            $activeNavItem = 'Login';
            return view('customer.reservation', ["steps" => $steps, "activeNav" => $activeNavItem]);
        }
        else{
            return abort(404);
        }
    }
    public function login(){
        if(View::exists('login')){
            $activeNavItem = 'Login';
            return view('login', ["activeNav" => $activeNavItem]);
            // return view('customer.reservation', ["activeNav" => $activeNavItem]);
        }
        else{
            return abort(404);
        }
    }
    public function register(){
        if(View::exists('register')){
            return view('register');
            // return view('customer.reservation', ["activeNav" => $activeNavItem]);
        }
        else{
            return abort(404);
        }
    }
}
