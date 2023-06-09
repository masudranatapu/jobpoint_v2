@extends('admin.layout.app')

@section('content')

<div class="content container-fluid">

<!-- Page Header -->
<div class="page-header">
  <div class="row align-items-center">
    <div class="col">
      <h1 class="page-header-title">Organizations</h1>
    </div>
    <!-- End Col -->

    <div class="col-auto">
      <a class="btn btn-primary" href="javascript:;" data-bs-toggle="modal" data-bs-target="#inviteUserModal">
        <i class="bi-building me-1"></i> Create Organization
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
    <h5 class="card-header-title">Users</h5>
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
      <input id="datatableWithSearchInput" type="search" class="form-control" placeholder="Search users" aria-label="Search users">
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
  <th>Industries</th>
  <th>Email</th>
  <th>Status</th>
  <th>Action</th>
</tr>
</thead>

<tbody>
<tr>
  <td>
  <a href="/./admin/organizations/1/index.html">  
  <span class="h5 text-inherit mb-0">Bangali Technologies</span>
  </a>
  </td>
  <td>
    <span class="fs-5">Information Technology</span>
  </td>
  <td>info@bangalitechnologies.com</td>
  <td>
    <span class="legend-indicator bg-success"></span>Active
  </td>
  <td>
  <a href="/./admin/organizations/1/index.html" class="btn btn-outline-primary btn-sm btn-icon"><i class="bi-eye"></i></a>
  <a href="/./admin/organizations/1/edit/index.html" class="btn btn-outline-primary btn-sm btn-icon"><i class="bi-pencil"></i></a>   
  <button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#DeleteWarning"><i class="bi-x-lg"></i></button>
  </td>        
</tr>


<tr>
  <td>
  <a href="/./admin/organizations/2/index.html">  
  <span class="h5 text-inherit mb-0">Astarted</span>
  </a>
  </td>
  <td>
    <span class="fs-5">Consulting</span>
  </td>
  <td>info@astarted.com</td>
  <td>
    <span class="legend-indicator bg-danger"></span>Inactive
  </td>
  <td>
  <a href="/./admin/organizations/2/index.html" class="btn btn-outline-primary btn-sm btn-icon"><i class="bi-eye"></i></a>  
  <a href="/./admin/organizations/2/edit/index.html" class="btn btn-outline-primary btn-sm btn-icon"><i class="bi-pencil"></i></a>
  <button type="button" class="btn btn-outline-danger btn-sm btn-icon" data-bs-toggle="modal" data-bs-target="#DeleteWarning"><i class="bi-x-lg"></i></button>
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
@endsection