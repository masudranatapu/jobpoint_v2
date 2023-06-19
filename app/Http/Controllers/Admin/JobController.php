<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use Brian2694\Toastr\Facades\Toastr;
use Carbon\Carbon;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jobs = Job::latest()->get();
        return view('admin.jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'location_id' => 'required',
            'department_id' => 'required',
            'job_type_id' => 'required',
        ]);

        Job::insert([
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'job_type_id' => $request->job_type_id,
            'description' => $request->description,
            'vacancy_count' => $request->vacancy_count,
            'salary' => $request->salary,
            'last_submission_date' => date('Y-m-d', strtotime($request->last_submission_date)),
            'created_at' => Carbon::now(),
        ]);

        Toastr::success('Job successfully created','Success');
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'location_id' => 'required',
            'department_id' => 'required',
            'job_type_id' => 'required',
        ]);

        Job::findOrFail($id)->update([
            'name' => $request->name,
            'slug' => strtolower(str_replace(' ', '-', $request->name)),
            'location_id' => $request->location_id,
            'department_id' => $request->department_id,
            'job_type_id' => $request->job_type_id,
            'description' => $request->description,
            'vacancy_count' => $request->vacancy_count,
            'salary' => $request->salary,
            'last_submission_date' => date('Y-m-d', strtotime($request->last_submission_date)),
            'created_at' => Carbon::now(),
        ]);

        Toastr::success('Job successfully updated','Success');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $job = Job::findOrFail($id);
        $job->delete();

        Toastr::success('Job successfully deleted','Success');
        return redirect()->back();

    }
}
