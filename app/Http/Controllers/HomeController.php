<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('welcome');
    }

    function login() {
        return view('login');
    }

    function dashboard(){
        return view('dashboard');
    }

    function penyewa(){
        return view('penyewa');
    }
}
