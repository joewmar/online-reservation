<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class SystemController extends Controller
{
    public function analytics(){

        if(View::exists('admin.main')){
            $activeSidebar = "Analytics"; 
            return view('admin.main', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }

    }
    public function reservation(){

        if(View::exists('admin.main')){
            $activeSidebar = "Reservation"; 
            return view('admin.main', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }

    }
    public function rooms(){

        if(View::exists('admin.main')){
            $activeSidebar = "Rooms"; // Sidebar active 
            return view('admin.main', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }

    }
    public function accommodations(){

        if(View::exists('admin.main')){
            
            $activeSidebar = "Accommodations"; // Sidebar active 
            return view('admin.main', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }

    }

    public function accounts(){

        if(View::exists('admin.main')){
            $activeSidebar = "Accounts"; 
            return view('admin.main', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }
    }

    // public function login(){

    //     if(View::exists('admin.pages.login')){
    //         return view('admin.pages.login');
    //     }
    //     else{
    //         return abort(404);
    //     }
    // }
}
