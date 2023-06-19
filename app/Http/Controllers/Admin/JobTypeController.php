<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobType;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class JobTypeController extends Controller
{
    //
    function index()
    {
        $jobtypes = JobType::get();
        return view('admin.jobtype.index', compact('jobtypes'));
    }
    
    function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brief' => 'required',
        ]);

        JobType::insert([
            'name' => $request->name,
            'brief' => $request->brief,
            'created_at' => Carbon::now(),
        ]);

        Toastr::success('Job type successfully created','Success');
        return redirect()->back();
    }

    function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brief' => 'required',
        ]);

        JobType::findOrFail($id)->update([
            'name' => $request->name,
            'brief' => $request->brief,
            'updated_at' => Carbon::now(),
        ]);

        Toastr::success('Job type successfully updated','Success');
        return redirect()->back();
    }

    function destory($id) {
        $jobtype = JobType::findOrFail($id);
        $jobtype->delete();
        Toastr::success('Job type successfully deleted','Success');
        return redirect()->back();

    }
}
