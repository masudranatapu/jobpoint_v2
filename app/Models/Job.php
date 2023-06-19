<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'location_id',
        'department_id',
        'job_type_id',
        'status_id',
        'posted_by',
        'name',
        'slug',
        'stages',
        'salary',
        'vacancy_count',
        'description',
        'responsibilities',
        'job_post_settings',
        'apply_form_settings',
        'last_submission_date',
    ];


    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }


    public function jobtype()
    {
        return $this->belongsTo(JobType::class, 'job_type_id', 'id');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
    
}
