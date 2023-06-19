@extends('admin.layout.app')


@section('content')
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Jobs</h1>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                    <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#createJob">
                        <i class="bi-briefcase me-1"></i>
                        Create Job
                    </a>
                </div>

                <div id="createJob" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="DeleteWarningTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="DeleteWarningTitle">Create Job</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{ route('admin.jobs.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group mb-2 row">
                                        <label class="col-md-3">
                                            Job Title
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" required value="{{ old('name') }}" name="name" class="form-control" placeholder="Job title">
                                        </div>
                                    </div>
                                    <div class="form-group mb-2 row">
                                        <label class="col-md-3">
                                            Job Type
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <select name="job_type_id" class="form-control" required>
                                                @foreach($jobtypes as $j_value)
                                                    <option value="{{$j_value->id}}" @if(old('job_type_id') == $j_value->id) selected @endif>
                                                        {{$j_value->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2 row">
                                        <label class="col-md-3">
                                            Department
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <select name="department_id" class="form-control" required>
                                                @foreach($departments as $d_value)
                                                    <option value="{{$d_value->id}}" @if(old('department_id') == $d_value->id) selected @endif>
                                                        {{$d_value->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2 row">
                                        <label class="col-md-3">
                                            Locations
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <select name="location_id" class="form-control" required>
                                                @foreach($locations as $l_value)
                                                    <option value="{{$l_value->id}}" @if(old('location_id') == $l_value->id) selected @endif>
                                                        {{$l_value->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2 row">
                                        <label class="col-md-3">
                                            Description
                                        </label>
                                        <div class="col-md-9">
                                            <textarea name="description" class="form-control" cols="30" rows="3" placeholder="Description">{{ old('description') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2 row">
                                        <label class="col-md-3">
                                            Number of Vacancy
                                        </label>
                                        <div class="col-md-9">
                                            <input type="number" value="{{ old('vacancy_count') }}" name="vacancy_count" class="form-control" placeholder="Number of Vacancy">
                                        </div>
                                    </div>
                                    <div class="form-group mb-2 row">
                                        <label class="col-md-3">
                                            Last submission
                                        </label>
                                        <div class="col-md-9">
                                            <input type="date" value="{{ old('last_submission_date') }}" name="last_submission_date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <!-- Header -->
                <div class="card-header">
                    <div class="row justify-content-between align-items-center flex-grow-1">
                        <div class="col-12 col-md">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-header-title">Job Lists</h5>
                            </div>
                        </div>
                        <div class="col-auto">
                            <form>
                                <div class="input-group input-group-merge input-group-flush">
                                    <div class="input-group-prepend input-group-text">
                                        <i class="bi-search"></i>
                                    </div>
                                    <input id="datatableWithSearchInput" type="search" class="form-control"
                                        placeholder="Search users" aria-label="Search users">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Table -->
                <div class="table-responsive datatable-custom">
                    <table id="datatableColumnSearch" class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                        <thead class="thead-light">
                            <tr>
                                <th>SL NO</th>
                                <th>Job Title</th>
                                <th>Department</th>
                                <th>Jobtype</th>
                                <th>Location</th>
                                <th>Start Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobs as $key => $job)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>
                                        <span class="h5 text-inherit">
                                            {{ $job->name }}
                                        </span>
                                    </td>
                                    <td>{{$job->department->name ?? ''}}</td>
                                    <td>{{$job->jobtype->name ?? ''}}</td>
                                    <td>{{$job->location->name ?? ''}}</td>
                                    <td>
                                        {{ date('d M, Y', strtotime($job->last_submission_date)) }}
                                    </td>
                                    <td>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#deleteJobs__{{$job->id}}" class="btn btn-outline-primary btn-sm btn-icon">
                                            <i class="bi-pencil"></i>
                                        </button>
                                        <form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm btn-icon">
                                                <i class="bi-x-lg"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <div id="deleteJobs__{{$job->id}}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="DeleteWarningTitle"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="DeleteWarningTitle">Create Job</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('admin.jobs.update', $job->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-body">
                                                    <div class="form-group mb-2 row">
                                                        <label class="col-md-3">
                                                            Job Title
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="text" required value="{{ $job->name }}" name="name" class="form-control" placeholder="Job title">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-2 row">
                                                        <label class="col-md-3">
                                                            Job Type
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <select name="job_type_id" class="form-control">
                                                                @foreach($jobtypes as $j_value)
                                                                    <option value="{{$j_value->id}}" @if($job->job_type_id == $j_value->id) selected @endif>
                                                                        {{$j_value->name}}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-2 row">
                                                        <label class="col-md-3">
                                                            Department
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <select name="department_id" class="form-control">
                                                                @foreach($departments as $d_value)
                                                                    <option value="{{$d_value->id}}" @if($job->department_id == $d_value->id) selected @endif>
                                                                        {{$d_value->name}}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-2 row">
                                                        <label class="col-md-3">
                                                            Locations
                                                            <span class="text-danger">*</span>
                                                        </label>
                                                        <div class="col-md-9">
                                                            <select name="location_id" class="form-control">
                                                                @foreach($locations as $l_value)
                                                                    <option value="{{$l_value->id}}" @if($job->location_id == $l_value->id) selected @endif>
                                                                        {{$l_value->name}}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-2 row">
                                                        <label class="col-md-3">
                                                            Description
                                                        </label>
                                                        <div class="col-md-9">
                                                            <textarea name="description" class="form-control" cols="30" rows="3" placeholder="Description">{{ $job->description }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-2 row">
                                                        <label class="col-md-3">
                                                            Number of Vacancy
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="number" value="{{ $job->vacancy_count }}" name="vacancy_count" class="form-control" placeholder="Number of Vacancy">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-2 row">
                                                        <label class="col-md-3">
                                                            Last submission
                                                        </label>
                                                        <div class="col-md-9">
                                                            <input type="date" value="{{ $job->last_submission_date }}" name="last_submission_date" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
