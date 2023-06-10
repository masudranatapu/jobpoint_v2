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
            <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#inviteUserModal">
              <i class="bi-people me-1"></i> Add Candidate
            </a>
            <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#inviteUserModal">
              <i class="bi-archive me-1"></i> View Archives
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
          <h5 class="card-header-title">Candidate Lists</h5>
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
            <input id="datatableWithSearchInput" type="search" class="form-control" placeholder="Search" aria-label="Search">
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
  <table id="datatableColumnSearch" class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
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
      <th>Name</th>
      <th>Email</th>
      <th>Phone</th>
      <th>Job</th>
      <th>Location</th>
      <th>Status</th>
      <th>Applied At</th>
      <th>Action</th>
    </tr>
    <tr>
      <th>
        <input type="text" id="column1_search" class="form-control form-control-sm" placeholder="Search name">
      </th>
      <th>
        <input type="text" id="column2_search" class="form-control form-control-sm" placeholder="Search email">
      </th>
      <th>
        <input type="text" id="column3_search" class="form-control form-control-sm" placeholder="Search phone">
      </th>
      <th>
        <input type="text" id="column4_search" class="form-control form-control-sm" placeholder="Search job">
      </th>
      <th>
        <input type="text" id="column5_search" class="form-control form-control-sm" placeholder="Search location">
      </th>      
      <th>
        <div class="tom-select-custom">
          <select class="js-select js-datatable-filter form-select form-select-sm form-select-borderless" autocomplete="off"
                  data-target-column-index="5"
                  data-target-table="datatableColumnSearch"
                  data-hs-tom-select-options='{
                    "searchInDropdown": false,
                    "hideSearch": true,
                    "dropdownWidth": "10rem"
                  }'>
            <option value="null" selected>Any</option>
            <option value="Applied">Applied</option>
            <option value="Phone Screen">Phone Screen</option>
            <option value="Rejected">Rejected</option>
            <option value="Interview">Interview</option>
            <option value="Hired">Hired</option>
          </select>
        </div>
      </th>
      <th></th>
      <th></th>
    </tr>
    </thead>

    <tbody>
    <tr>
      <td><span class="h5 text-inherit">Shoriful Islam</span></td>
      <td>shorif@gmail.com</td>
      <td>+880 1811223344</td>
      <td>Sales And Marketing Officer</td>
      <td>Dhaka (BD)</td>
      <td><span class="legend-indicator bg-success"></span>Applied</td>
      <td>13 May, 2022 11:40 PM</td>
      <td>
        <a href="/./admin/organizations/1/index.html" class="btn btn-white btn-sm"><i class="bi-eye me-1"></i> View</a>
        <a href="/./admin/organizations/1/edit/index.html" class="btn btn-white btn-sm"><i class="bi-pencil-fill me-1"></i> Edit</a>
        <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal" data-bs-target="#DeleteWarning"><i class="bi-x-lg me-1"></i> Delete</button>
      </td>       
    </tr>

    <tr>
      <td><span class="h5 text-inherit">Md Shek Faride</span></td>
      <td>shek@gmail.com</td>
      <td>+880 1711223344</td>
      <td>Front-End Developer</td>
      <td>Mumbai (IN)</td>
      <td><span class="legend-indicator bg-danger"></span>Phone Screen</td>
      <td>15 Jun, 2022 09:40 PM</td>
      <td>
        <a href="/./admin/organizations/1/index.html" class="btn btn-white btn-sm"><i class="bi-eye me-1"></i> View</a>
        <a href="/./admin/organizations/1/edit/index.html" class="btn btn-white btn-sm"><i class="bi-pencil-fill me-1"></i> Edit</a>
        <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal" data-bs-target="#DeleteWarning"><i class="bi-x-lg me-1"></i> Delete</button>
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
    <div id="DeleteWarning" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="DeleteWarningTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="DeleteWarningTitle">Modal title</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
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