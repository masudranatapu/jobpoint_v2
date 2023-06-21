<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('application_emails', function (Blueprint $table) {
            $table->id();
            $table->integer('applicant_id')->nullable();
            $table->integer('job_post_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('sender')->nullable();
            $table->string('message_id')->nullable();
            $table->string('reference_id')->nullable();
            $table->string('text_html')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_emails');
    }
};
