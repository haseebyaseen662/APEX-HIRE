<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('employer.pages.dashboard');
    }

    public function account()
    {
        return view('employer.pages.account');
    }

    public function team()
    {
        return view('employer.pages.team');
    }

    public function interview()
    {
        return view('employer.pages.schedule-interview');
    }
}
