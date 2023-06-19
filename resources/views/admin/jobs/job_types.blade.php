@extends('admin.layout.app')


@section('content')
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Job Types</h1>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                    <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#inviteUserModal">
                        <i class="bi-building me-1"></i> Create Job Types
                    </a>
                </div>

                <!-- Modal -->
                <div id="inviteUserModal" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="DeleteWarningTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <form action="{{ route('admin.jobs-type.store') }}" method="POST">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="DeleteWarningTitle">Create Job Type</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-gorup">
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input type="text" placeholder="Job type name" name="name"
                                            class="form-control">
                                    </div>
                                    <div class="form-gorup">
                                        <label>Brief <span class="text-danger">*</span></label>
                                        <input type="text" placeholder="Enter Brief" name="brief" class="form-control">
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
                <div class="card-header">
                    <div class="row justify-content-between align-items-center flex-grow-1">
                        <div class="col-12 col-md">
                            <div class="d-flex justify-content-between align-items-center">
                                <h5 class="card-header-title">Job Type Lists</h5>
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
                        class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                        <thead class="thead-light">
                            <tr>
                                <th>SL NO</th>
                                <th>Name</th>
                                <th>Brief</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobtypes as $key => $j_type)
                                <tr>
                                    <td>
                                        {{ $key + 1 }}
                                    </td>
                                    <td>
                                        <span class="h5 text-inherit">{{ $j_type->name }}</span>
                                    </td>
                                    <td>
                                        {{ $j_type->brief }}
                                    </td>
                                    <td>
                                        <button href="" class="btn btn-white btn-sm"  data-bs-toggle="modal" data-bs-target="#editJobType__{{$j_type->id}}">
                                            <i class="bi-pencil-fill me-1"></i>
                                            Edit
                                        </button>
                                        <form action="{{ route('admin.jobs-type.destroy', $j_type->id) }}"  method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-white btn-sm">
                                                <i class="bi-x-lg me-1"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <div id="editJobType__{{$j_type->id}}" class="modal fade" tabindex="-1" role="dialog"
                                    aria-labelledby="DeleteWarningTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <form action="{{ route('admin.jobs-type.update', $j_type->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="DeleteWarningTitle">Create Job Type</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-gorup">
                                                        <label>Name <span class="text-danger">*</span></label>
                                                        <input type="text" placeholder="Job type name" name="name"
                                                            class="form-control" value="{{$j_type->name}}">
                                                    </div>
                                                    <div class="form-gorup">
                                                        <label>Brief <span class="text-danger">*</span></label>
                                                        <input type="text" placeholder="Enter Brief" name="brief"
                                                            class="form-control" value="{{$j_type->brief}}">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-white"
                                                        data-bs-dismiss="modal">Close</button>
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
