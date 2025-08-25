<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    /** Starts :: Home Page */
    public function homepage()
    {
        return view('frontend.home-page.index');
    }
    /** Ends :: Home Page */
}
