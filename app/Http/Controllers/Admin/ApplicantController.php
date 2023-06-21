<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\Job;
use App\Models\ApplicationEmail;
use App\Models\ApplicationAnswer;
use Brian2694\Toastr\Facades\Toastr;

class ApplicantController extends Controller
{
    //
    public $applicant;

    public function __construct(Applicant $applicant)
    {
        $this->applicant = $applicant;
    }

    function index()
    {
        $applicants = Applicant::latest()->get();
        $jobs = Job::latest()->get();
        return view('admin.candidates.index', compact('applicants', 'jobs'));
    }
    
    function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'job_id' => 'required',
        ]);
        
        $applicant = $this->applicant->storeApplicant($request);

        if($applicant['status'] == 0) {
            Toastr::success($applicant['msg'],'Info');
            return redirect()->back();
        }

        Toastr::success($applicant['msg'],'Info');
        return redirect()->back();
    }

    function view(Request $request)
    {
        $applicant = Applicant::findOrFail($request->id);
        $jobs = Job::latest()->get();
        $application_answer = ApplicationAnswer::where('job_applicant_id',$applicant->id)->first();
        $jobinfo = ApplicationEmail::where('applicant_id',$applicant->id)->first();
        $html = view('admin.candidates.view', compact('applicant', 'jobs', 'application_answer', 'jobinfo'))->render();
        return response()->json($html);
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'job_id' => 'required',
        ]);
        
        $applicant = $this->applicant->updateApplicant($request, $id);

        if($applicant['status'] == 0) {
            Toastr::success($applicant['msg'],'Info');
            return redirect()->back();
        }

        Toastr::success($applicant['msg'],'Info');
        return redirect()->back();
    }


    function delete($id)
    {
        $applicant = $this->applicant->deleteApplicant($id);

        if($applicant['status'] == 0) {
            Toastr::success($applicant['msg'],'Info');
            return redirect()->back();
        }

        Toastr::success($applicant['msg'],'Info');
        return redirect()->back();
    }

}
