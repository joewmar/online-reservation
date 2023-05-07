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
    public function tour(){

        if(View::exists('system.main')){
            
            $activeSidebar = "Tour"; // Sidebar active 
            return view('system.main', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }

    }

    public function announcement(){

        if(View::exists('system.main')){
            $activeSidebar = "Announcement"; 
            return view('system.main', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }
    }

    public function messages(){
        if(View::exists('system.main')){
            $activeSidebar = "Announcement"; 
            return view('system.main', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }
    }
    public function feedback(){
        if(View::exists('system.main')){
            $activeSidebar = "Feedback"; 
            return view('system.main', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }
    }
    public function webcontent(){
        if(View::exists('system.main')){
            $activeSidebar = "Website Content"; 
            return view('system.main', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }
    }
    public function settings(){
        if(View::exists('system.settings.index')){
            $activeSidebar = "Rooms"; 
            return view('system.settings.index', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }
    }
    public function rides(){
        if(View::exists('system.settings.rides')){
            $activeSidebar = "Rides"; 
            return view('system.settings.rides', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }
    }
    public function accounts(){
        if(View::exists('system.settings.accounts')){
            $activeSidebar = "Accounts"; 
            return view('system.settings.accounts', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }
    }
    public function profile(){
        if(View::exists('system.profile.index')){
            $activeSidebar = "Edit Profile"; 
            return view('system.profile.index', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }
    }
    public function link(){
        if(View::exists('system.profile.link')){
            $activeSidebar = "Social Link"; 
            return view('system.profile.link', ["activeBar" => $activeSidebar]);
        }
        else{
            return abort(404);
        }
    }

    public function login(){

        if(View::exists('system.login')){
            return view('system.login');
        }
        else{
            return abort(404);
        }
    }
}
