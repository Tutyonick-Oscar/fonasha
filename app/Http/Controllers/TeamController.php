<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class TeamController extends Controller
{
    /**
     * Show the team page.
     */
    public function index(): View
    {
        return view('team');
    }
}
