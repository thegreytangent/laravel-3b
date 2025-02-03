<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WallController extends Controller
{
    public function index() {
        return view(view: "wall.index");
    }

    public function getData() {
        echo "data";
    }
}
