<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationAnswer extends Model
{
    use HasFactory;

    protected $table = "application_answers";

    protected $fillable = [
        'job_applicant_id',
        'question',
        'answer',
        'attachment',
        'created_at',
        'updated_at',
    ];

}
