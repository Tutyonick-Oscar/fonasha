<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * Show the about page.
     */
    public function index(): View
    {
        return view('about');
    }
}
