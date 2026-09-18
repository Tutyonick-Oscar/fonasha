<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\TeamMember;

class TeamController extends Controller
{
    /**
     * Show the team page.
     */
    public function index(): View
    {
        $members = TeamMember::where('is_active', true)->get();
        return view('team',[
            'members' => $members
        ]);
    }
}
