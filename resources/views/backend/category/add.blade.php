@extends('backend.layouts.app')
@section('content')
<div class="main-panel">
  <div class="main-header">
    <div class="main-header-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="{{ url('/') }}" class="logo">
          <img src="/backend/assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
        </a>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar"><i class="gg-menu-right"></i></button>
          <button class="btn btn-toggle sidenav-toggler"><i class="gg-menu-left"></i></button>
        </div>
        <button class="topbar-toggler more"><i class="gg-more-vertical-alt"></i></button>
      </div>
    </div>
    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
      <div class="container-fluid">
        <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
          <div class="input-group">
            <div class="input-group-prepend">
              <button type="submit" class="btn btn-search pe-1">
                <i class="fa fa-search search-icon"></i>
              </button>
            </div>
            <input type="text" placeholder="Search ..." class="form-control" />
          </div>
        </nav>

        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
          <!-- Notifications and Profile Menu -->
          <li class="nav-item topbar-user dropdown hidden-caret">
            <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#">
              <div class="avatar-sm">
                <img src="/backend/assets/img/profile.jpg" alt="Profile" class="avatar-img rounded-circle" />
              </div>
              <span class="profile-username"><span class="op-7">Hi,</span> <span class="fw-bold">Admin</span></span>
            </a>
            <ul class="dropdown-menu dropdown-user animated fadeIn">
              <div class="dropdown-user-scroll scrollbar-outer">
                <li>
                  <div class="user-box text-center">
                    <div class="avatar-lg">
                      <img src="/backend/assets/img/profile.jpg" alt="Profile" class="avatar-img rounded" />
                    </div>
                    <div class="u-text">
                      <h4>Admin</h4>
                      <p class="text-muted">admin@example.com</p>
                      <a href="#" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">My Profile</a>
                  <a class="dropdown-item" href="#">Inbox</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Account Setting</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Logout</a>
                </li>
              </div>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
  </div>

  <div class="container">
    <div class="page-inner">
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4 p-4">
        <div>
          <h3 class="fw-bold mb-3">Add Category</h3>
          <h6 class="op-7 mb-2">Your Time Zone Admin Panel</h6>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
          <a href="{{ route('category.index') }}" class="btn btn-primary btn-round">See Categories</a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card card-round">
            <div class="card-header">
              <div class="card-head-row card-tools-still-right">
                <div class="card-title">Category Form</div>
              </div>
            </div>

            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                  <form action="{{ route('category.store') }}" method="POST" class="p-4 bg-white rounded-3 shadow-sm">
                    @csrf
                    <div class="mb-3">
                      <label class="form-label fw-semibold">Category</label>
                      <input type="text" name="category" class="form-control" placeholder="Enter category" required>
                    </div>

                    <div class="mb-3">
                      <label class="form-label fw-semibold">Subcategory</label>
                      <input type="text" name="subcategory" class="form-control" placeholder="Enter subcategory">
                    </div>

                    <div class="text-center mt-4">
                      <button type="submit" class="btn btn-success px-5 py-2 rounded-pill shadow-sm">
                        <i class="fas fa-check me-2"></i>Submit
                      </button>
                      <a href="{{ route('category.index') }}" class="btn btn-outline-danger px-5 py-2 rounded-pill shadow-sm ms-2">
                        <i class="fas fa-times me-2"></i>Cancel
                      </a>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
