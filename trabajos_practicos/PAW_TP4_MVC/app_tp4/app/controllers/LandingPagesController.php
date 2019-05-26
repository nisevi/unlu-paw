<?php

namespace App\Controllers;

use App\Core\Controller;

class LandingPagesController extends Controller
{
    /**
     * Show the home page.
     */
    public function home()
    {
        return view('landing/index');
    }
}
