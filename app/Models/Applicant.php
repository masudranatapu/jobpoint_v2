<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Applicant extends Model
{
    use HasFactory;

    protected $table = "applicants";

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'gender',
        'date_of_birth',
        'created_at',
        'updated_at',
    ];
    
    function storeApplicant($request)
    {
        DB::beginTransaction();
            try {
                $applicant                  = new Applicant();
                $applicant->first_name      = $request->first_name;
                $applicant->last_name       = $request->last_name;
                $applicant->email           = $request->email;
                $applicant->gender          = $request->gender;
                $applicant->date_of_birth   = date('Y-m-d', strtotime($request->date_of_birth));
                $applicant->created_at      = Carbon::now();

                $applicant->save();
                
                $app_resume = $request->file('resume');

                if($app_resume) {
                    $slug = 'product';
                    $app_resume_name = $slug.'-'.uniqid().'.'.$app_resume->getClientOriginalExtension();
                    $upload_path = 'media/applicant/';
                    $app_resume->move($upload_path, $app_resume_name);
                    $image_url = $upload_path.$app_resume_name;
                }else {
                    $image_url = null;
                }
                
                ApplicationAnswer::insert([
                    'job_applicant_id'  => $applicant->id,
                    'question'          => "New Applicant",
                    'answer'            => "Joining New Applicant",
                    'attachment'        => $image_url,
                    'created_at'        => Carbon::now(),
                ]);
            
                ApplicationEmail::insert([
                    'applicant_id'  => $applicant->id,
                    'job_post_id' => $request->job_id,
                    'created_at' => Carbon::now(),
                ]);
                
            } catch (\Throwable $th) {
                DB::rollback();
                dd($th);
                $data['status'] = 0;
                $data['msg'] = "Unable create applicant";
                return $data;
            }
        DB::commit();
        $data['status'] = 1;
        $data['msg'] = "Applicent successfully created";

        return $data;
    }

    function updateApplicant($request, $id)
    {
        DB::beginTransaction();
            try {
                $applicant                  = Applicant::findOrFail($id);
                $applicant->first_name      = $request->first_name;
                $applicant->last_name       = $request->last_name;
                $applicant->email           = $request->email;
                $applicant->gender          = $request->gender;
                $applicant->date_of_birth   = date('Y-m-d', strtotime($request->date_of_birth));
                $applicant->updated_at      = Carbon::now();

                $applicant->save();
                
                $app_resume = $request->file('resume');

                $application_answer = ApplicationAnswer::where('job_applicant_id', $id)->first();

                if($app_resume) {
                    
                    if(file_exists($application_answer->attachment)) {
                        unlink($application_answer->attachment);
                    }

                    $slug = 'applicant_resume';
                    $app_resume_name = $slug.'-'.uniqid().'.'.$app_resume->getClientOriginalExtension();
                    $upload_path = 'media/applicant/';
                    $app_resume->move($upload_path, $app_resume_name);
                    $image_url = $upload_path.$app_resume_name;
                    
                }else {
                    $image_url = $application_answer->attachment;
                }
                
                ApplicationAnswer::where('job_applicant_id', $id)->update([
                    'job_applicant_id'  => $applicant->id,
                    'question'          => "New Applicant",
                    'answer'            => "Joining New Applicant",
                    'attachment'        => $image_url,
                    'updated_at'        => Carbon::now(),
                ]);
            
                ApplicationEmail::where('applicant_id', $id)->update([
                    'job_post_id' => $request->job_id,
                    'updated_at' => Carbon::now(),
                ]);
                
            } catch (\Throwable $th) {
                DB::rollback();
                dd($th);
                $data['status'] = 0;
                $data['msg'] = "Unable update applicant";
                return $data;
            }
        DB::commit();
        $data['status'] = 1;
        $data['msg'] = "Applicent successfully updated";

        return $data;
    }


    
    function deleteApplicant($id)
    {
        DB::beginTransaction();
            try {

                $applicant                  = Applicant::findOrFail($id);
                
                $application_answer = ApplicationAnswer::where('job_applicant_id', $id)->first();

                if(file_exists($application_answer->attachment)) {
                    unlink($application_answer->attachment);
                }

                ApplicationAnswer::where('job_applicant_id', $applicant->id)->delete();
            
                ApplicationEmail::where('applicant_id', $applicant->id)->delete();

                $applicant->delete();
                
            } catch (\Throwable $th) {
                DB::rollback();
                dd($th);
                $data['status'] = 0;
                $data['msg'] = "Unable delete applicant";
                return $data;
            }
        DB::commit();
        $data['status'] = 1;
        $data['msg'] = "Applicent successfully delete";

        return $data;
    }
}
