<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $title = "Admin Dashboard";
        return view('admin.index', compact('title'));
    }

    function organizations() {
        return view('admin.organizations.index');
    }

    public function jobs()
    {
        return view('admin.jobs.index');
    }
    
    public function candidates()
    {
        return view('admin.candidates.index');
    }

}
