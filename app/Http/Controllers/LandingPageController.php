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
}
