@extends('admin.layout.app')


@section('content')


    <div class="content container-fluid">

      <!-- Page Header -->
      <div class="page-header">
        <div class="row align-items-center">
          <div class="col">
            <h1 class="page-header-title">Industries</h1>
          </div>
          <!-- End Col -->

          <div class="col-auto">
            <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#inviteUserModal">
              <i class="bi-building me-1"></i> Create Industries
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
          <h5 class="card-header-title">Industry Lists</h5>
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
    <table class="js-datatable table table-borderless table-thead-bordered table-nowrap table-align-middle card-table"
           data-hs-datatables-options='{
                   "order": [],
                   "search": "#datatableWithSearchInput",
                   "isResponsive": false,
                   "isShowPaging": false,
                   "pagination": "datatableWithPaginationPagination"
                 }'>
      <thead class="thead-light">
      <tr>
        <th>Name</th>
        <th>Action</th>
      </tr>
      </thead>

      <tbody>
      <tr>
        <td><span class="h5 text-inherit">Information Technology</span></td>
        <td>
        <a href="/./admin/organizations/1/edit/index.html" class="btn btn-white btn-sm"><i class="bi-pencil-fill me-1"></i> Edit</a>
        <button type="button" class="btn btn-white btn-sm" data-bs-toggle="modal" data-bs-target="#DeleteWarning"><i class="bi-x-lg me-1"></i> Delete</button>
        </td>        
      </tr>


      <tr>
        <td><span class="h5 text-inherit">Consulting</span></td>
        <td>
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