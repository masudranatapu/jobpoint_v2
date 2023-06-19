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
                            <!-- Filter -->
                            <form>
                                <!-- Search -->
                                <div class="input-group input-group-merge input-group-flush">
                                    <div class="input-group-prepend input-group-text">
                                        <i class="bi-search"></i>
                                    </div>
                                    <input id="datatableWithSearchInput" type="search" class="form-control"
                                        placeholder="Search users" aria-label="Search users">
                                </div>
                                <!-- End Search -->
                            </form>
                            <!-- End Filter -->
                        </div>
                    </div>
                </div>
                <!-- End Header -->

                <!-- Table -->
                <div class="table-responsive datatable-custom">
                    <table id="datatableColumnSearch"
                        class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
                        data-hs-datatables-options='{
                "order": [],
                "search": "#datatableWithSearchInput",
                "isResponsive": false,
                "isShowPaging": false,
                "pagination": "datatableWithPaginationPagination",
                "orderCellsTop": true
               }'>
                        <thead class="thead-light">
                            <tr>
                                <th>Job Title</th>
                                <th>Organization</th>
                                <th>Location</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <tr>
                                <th>
                                    <input type="text" id="column1_search" class="form-control form-control-sm"
                                        placeholder="Search job title">
                                </th>
                                <th>
                                    <input type="text" id="column2_search" class="form-control form-control-sm"
                                        placeholder="Search organization">
                                </th>
                                <th>
                                    <input type="text" id="column3_search" class="form-control form-control-sm"
                                        placeholder="Search location">
                                </th>
                                <th>
                                    <input type="text" id="column4_search" class="form-control form-control-sm"
                                        placeholder="Search start date">
                                </th>
                                <th>
                                    <input type="text" id="column5_search" class="form-control form-control-sm"
                                        placeholder="Search end date">
                                </th>
                                <th>
                                    <div class="tom-select-custom">
                                        <select
                                            class="js-select js-datatable-filter form-select form-select-sm form-select-borderless"
                                            autocomplete="off" data-target-column-index="5"
                                            data-target-table="datatableColumnSearch"
                                            data-hs-tom-select-options='{
                    "searchInDropdown": false,
                    "hideSearch": true,
                    "dropdownWidth": "10rem"
                  }'>
                                            <option value="null" selected>Any</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive">Inactive</option>
                                        </select>
                                    </div>
                                </th>
                                <th>

                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td><span class="h5 text-inherit">Sales And Marketing Officer</span></td>
                                <td>Bangali Technologies</td>
                                <td>Dhaka (BD)</td>
                                <td>13 Jun, 2022</td>
                                <td>13 Jul, 2022</td>
                                <td><span class="legend-indicator bg-success"></span>Active</td>
                                <td>
                                    <a href="/./admin/organizations/1/index.html" class="btn btn-white btn-sm"><i
                                            class="bi-eye me-1"></i> View</a>
                                    <a href="/./admin/organizations/1/edit/index.html" class="btn btn-white btn-sm"><i
                                            class="bi-pencil-fill me-1"></i> Edit</a>
                                    <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#DeleteWarning"><i class="bi-x-lg me-1"></i> Delete</button>
                                </td>
                            </tr>

                            <tr>
                                <td><span class="h5 text-inherit">Front-End Developer</span></td>
                                <td>Astarted</td>
                                <td>Mumbai (IN)</td>
                                <td>13 May, 2022</td>
                                <td>12 Jun, 2022</td>
                                <td><span class="legend-indicator bg-danger"></span>Inactive</td>
                                <td>
                                    <a href="/./admin/organizations/1/index.html"
                                        class="btn btn-outline-primary btn-sm btn-icon"><i class="bi-eye"></i></a>
                                    <a href="/./admin/organizations/1/edit/index.html"
                                        class="btn btn-outline-primary btn-sm btn-icon"><i class="bi-pencil"></i></a>
                                    <button type="button" class="btn btn-outline-danger btn-sm btn-icon"
                                        data-bs-toggle="modal" data-bs-target="#DeleteWarning"><i
                                            class="bi-x-lg"></i></button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
                <!-- End Table -->

                <!-- Footer -->
                <div class="card-footer">
                    <!-- Pagination -->
                    <div class="d-flex justify-content-center justify-content-sm-end">
                        <nav id="datatableWithPaginationPagination" aria-label="Activity pagination"></nav>
                    </div>
                    <!-- End Pagination -->
                </div>
                <!-- End Footer -->
            </div>

        </div>

    </div>
    <!-- Modal -->
    <div id="DeleteWarning" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="DeleteWarningTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteWarningTitle">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                        eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
@endsection
