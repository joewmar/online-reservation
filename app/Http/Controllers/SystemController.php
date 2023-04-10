<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SystemController extends Controller
{
    public function home(){

        if(View::exists('system.main')){
            $activeSidebar = "Home"; 
            return view('system.main', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }

    }
    public function analytics(){

        if(View::exists('system.main')){
            $activeSidebar = "Analytics"; 
            return view('system.main', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }

    }
    public function reservation(){

        if(View::exists('system.main')){
            $activeSidebar = "Reservation"; 
            return view('system.main', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }

    }
    public function rooms(){

        if(View::exists('system.main')){
            $activeSidebar = "Rooms"; // Sidebar active 
            return view('system.main', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }

    }
    public function accommodations(){

        if(View::exists('system.main')){
            
            $activeSidebar = "Accommodations"; // Sidebar active 
            return view('system.main', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }

    }

    public function accounts(){

        if(View::exists('system.main')){
            $activeSidebar = "Accounts"; 
            return view('system.main', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }
    }

    // public function login(){

    //     if(View::exists('system.pages.login')){
    //         return view('system.pages.login');
    //     }
    //     else{
    //         return abort(404);
    //     }
    // }
}
