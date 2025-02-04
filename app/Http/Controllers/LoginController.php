<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {

        $total = 4 + 1;

        return view("login.index");
    }
}
