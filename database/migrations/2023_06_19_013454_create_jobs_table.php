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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('location_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('job_type_id')->nullable();
            $table->integer('status_id')->nullable();
            $table->integer('posted_by')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('stages')->nullable();
            $table->string('salary')->nullable();
            $table->string('vacancy_count')->nullable();
            $table->text('description')->nullable();
            $table->text('responsibilities')->nullable();
            $table->longText('job_post_settings')->nullable();
            $table->text('apply_form_settings')->nullable();
            $table->date('last_submission_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
