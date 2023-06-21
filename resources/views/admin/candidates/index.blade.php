@extends('admin.layout.app')

@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Candidates</h1>
                </div>
                <!-- End Col -->
                <div class="col-auto">
                    <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#AddCandidate">
                        <i class="bi-people me-1"></i> Add Candidate
                    </a>
                    <!-- <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#inviteUserModal">
                            <i class="bi-archive me-1"></i>
                            View Archives
                        </a> -->
                </div>
                <div id="AddCandidate" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="DeleteWarningTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="DeleteWarningTitle">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ route('admin.candidates.store') }}" method="POST">
                                @csrf
                                <div class="modal-body">
                                    <div class="form-group mb-3 row">
                                        <label class="col-md-3">
                                            First name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" required value="{{ old('name') }}" name="first_name"
                                                class="form-control" placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="col-md-3">
                                            Last Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" required value="{{ old('name') }}" name="last_name"
                                                class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="col-md-3">
                                            Email
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="email" required value="{{ old('email') }}" name="email"
                                                class="form-control" placeholder="Email address">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="col-md-3">
                                            Gendar
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="radio" name="gender" value="Male">
                                            Male
                                            <input type="radio" name="gender" value="Female">
                                            Female
                                            <input type="radio" name="gender" value="Other">
                                            Other
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="col-md-3">
                                            Date of birth
                                        </label>
                                        <div class="col-md-9">
                                            <input type="date" value="{{ old('dob') }}" name="dob"
                                                class="form-control" placeholder="Date of birth">
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="col-md-3">
                                            Job Post
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="col-md-9">
                                            <select name="job_id" class="form-control">
                                                @foreach ($jobs as $job)
                                                    <option value="{{ $job->id }}">{{ $job->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3 row">
                                        <label class="col-md-3">
                                            Uploade Resume
                                        </label>
                                        <div class="col-md-9">
                                            <input type="file" name="resume" class="form-control">
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
        <!-- Stats -->
        <div class="row">
            <div class="card">
                <!-- Header -->
                <div class="card-header">
                    <div class="row justify-content-between align-items-center flex-grow-1">
                        <div class="col-12 col-md">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-header-title">Candidate Lists</h5>
                            </div>
                        </div>
                        <div class="col-auto">
                            <form>
                                <div class="input-group input-group-merge input-group-flush">
                                    <div class="input-group-prepend input-group-text">
                                        <i class="bi-search"></i>
                                    </div>
                                    <input id="datatableWithSearchInput" type="search" class="form-control"
                                        placeholder="Search" aria-label="Search">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="table-responsive datatable-custom">
                    <table
                        id="datatableColumnSearch"class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                        <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Job</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Applied At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applicants as $key => $app_value)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td><span class="h5 text-inherit">Shoriful Islam</span></td>
                                    <td>shorif@gmail.com</td>
                                    <td>+880 1811223344</td>
                                    <td>Sales And Marketing Officer</td>
                                    <td>Dhaka (BD)</td>
                                    <td><span class="legend-indicator bg-success"></span>Applied</td>
                                    <td>13 May, 2022 11:40 PM</td>
                                    <td>
                                        <a href="/./admin/organizations/1/index.html" class="btn btn-white btn-sm"><i
                                                class="bi-eye me-1"></i> View</a>
                                        <a href="/./admin/organizations/1/edit/index.html" class="btn btn-white btn-sm"><i
                                                class="bi-pencil-fill me-1"></i> Edit</a>
                                        <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#DeleteWarning"><i class="bi-x-lg me-1"></i> Delete</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="DeleteWarningTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content" id="showApplicantInfo">
            
            </div>
        </div>
    </div>
@endsection

@push('js)
    <script>
        function applicentView() {

        }
    </script>
@endpush