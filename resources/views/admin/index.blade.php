@extends('admin.layout.app')


@section('content')


<div class="content container-fluid">

<!-- Page Header -->
<div class="page-header">
    <div class="row align-items-center">
    <div class="col">
        <h1 class="page-header-title">Dashboard</h1>
    </div>
    <!-- End Col -->

    <div class="col-auto">
        <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#inviteUserModal">
        <i class="bi-briefcase me-1"></i> Create Job
        </a>
    </div>
    <!-- End Col -->
    </div>
    <!-- End Row -->
</div>
<!-- End Page Header -->

<!-- Stats -->
<div class="row">
    
    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="#">
        <div class="card-body">
        <h6 class="card-subtitle">Total Organizations</h6>

            <div class="mt-4">
            <h2 class="card-title text-inherit">1</h2>
            </div>
        </div>
    </a>
    <!-- End Card -->
    </div>

    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="#">
        <div class="card-body">
        <h6 class="card-subtitle">Total Jobs</h6>

            <div class="mt-4">
            <h2 class="card-title text-inherit">21</h2>
            </div>
        </div>
    </a>
    <!-- End Card -->
    </div>

    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="#">
        <div class="card-body">
        <h6 class="card-subtitle">Total Candidates</h6>

            <div class="mt-4">
            <h2 class="card-title text-inherit">10</h2>
            </div>
        </div>
    </a>
    <!-- End Card -->
    </div>

    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="#">
        <div class="card-body">
        <h6 class="card-subtitle">Total Hired</h6>

            <div class="mt-4">
            <h2 class="card-title text-inherit">50</h2>
            </div>
        </div>
    </a>
    <!-- End Card -->
    </div>

    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="#">
        <div class="card-body">
        <h6 class="card-subtitle">New Applications</h6>

            <div class="mt-4">
            <h2 class="card-title text-inherit">42</h2>
            </div>
        </div>
    </a>
    <!-- End Card -->
    </div>

    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="#">
        <div class="card-body">
        <h6 class="card-subtitle">Total Rejected</h6>

            <div class="mt-4">
            <h2 class="card-title text-inherit">34</h2>
            </div>
        </div>
    </a>
    <!-- End Card -->
    </div>

    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="#">
        <div class="card-body">
        <h6 class="card-subtitle">Shortlisted Candidates</h6>

            <div class="mt-4">
            <h2 class="card-title text-inherit">20</h2>
            </div>
        </div>
    </a>
    <!-- End Card -->
    </div>

    <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
    <!-- Card -->
    <a class="card card-hover-shadow h-100" href="#">
        <div class="card-body">
        <h6 class="card-subtitle">Today Interviews</h6>

            <div class="mt-4">
            <h2 class="card-title text-inherit">5</h2>
            </div>
        </div>
    </a>
    <!-- End Card -->
    </div>

</div>

</div>

@endsection