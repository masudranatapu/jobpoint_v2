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
    
    public function jobTypes()
    {
        return view('admin.jobs.job_types');
    }


    public function candidates()
    {
        return view('admin.candidates.index');
    }

    public function categories()
    {
        return view('admin.categories.index');
    }

    public function currencies()
    {
        return view('admin.currencies.index');
    }

    public function departments()
    {
        return view('admin.departments.index');
    }

    public function designations()
    {
        return view('admin.designations.index');
    }

    public function experience()
    {
        return view('admin.experience.index');
    }

    public function industries()
    {
        return view('admin.industries.index');
    }

    public function salaryTypes()
    {

        return view('admin.salary.salary_types');
    }

    public function skills()
    {
        return view('admin.skills.index');
    }
    public function general()
    {
        return view('admin.general.index');
    }
}
