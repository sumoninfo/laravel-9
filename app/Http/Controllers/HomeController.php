<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return "about";
    }

    public function contact()
    {
        return "contact";
    }
}
