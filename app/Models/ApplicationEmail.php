<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationEmail extends Model
{
    use HasFactory;


    protected $table = "application_emails",

    protected $fillable = [
        'applicant_id',
        'job_post_id',
        'user_id',
        'sender',
        'message_id',
        'reference_id',
        'text_html',
        'created_at',
        'updated_at',
    ];

}
