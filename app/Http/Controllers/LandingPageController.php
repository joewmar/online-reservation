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
    public function reservationStep1(){
        $steps = '1';
        return view('customer.reservations.step1', ["steps" => $steps]);
    }
    public function reservationStep2(){
        $steps = '2';
        return view('customer.reservations.step2', ["steps" => $steps]);
    }

    public function reservationStep3(){
        $steps = '3';
        return view('customer.reservations.step3', ["steps" => $steps]);
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
            $activeNavItem = 'Login';
            return view('register', ["activeNav" => $activeNavItem]);
            // return view('customer.reservation', ["activeNav" => $activeNavItem]);
        }
        else{
            return abort(404);
        }
    }
    public function profile(){
        if(View::exists('profile')){
            $activeNavItem = 'Profile';
            return view('profile', ["activeNav" => $activeNavItem]);
        }
        else{
            return abort(404);
        }
    }
    public function myreservation(){
        if(View::exists('my_reservation')){
            $activeNavItem = 'My Reservation';
            return view('my_reservation', ["activeNav" => $activeNavItem]);
        }
        else{
            return abort(404);
        }
    }
}
