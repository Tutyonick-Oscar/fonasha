<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class BlogController extends Controller
{
    /**
     * Show the blogs page.
     */
    public function index(): View
    {
        return view('blogs');
    }
}
