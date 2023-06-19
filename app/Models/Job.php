<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillbale = [
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
    
}
