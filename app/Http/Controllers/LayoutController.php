<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index(){
        return view('contents/dashboard');
    }

    public function docs(){
        return view ('contents/docs');
    }

    public function orders(){
        return view('contents/orders');
    }

    public function settings(){
        return view('contents/settings');
    }
}
