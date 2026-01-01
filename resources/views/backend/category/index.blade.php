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
      <!-- End Logo Header -->
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
          <!-- Messages Dropdown -->
          <li class="nav-item topbar-icon dropdown hidden-caret">
            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-bs-toggle="dropdown">
              <i class="fa fa-envelope"></i>
            </a>
            <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
              <li>
                <div class="dropdown-title d-flex justify-content-between align-items-center">
                  Messages <a href="#" class="small">Mark all as read</a>
                </div>
              </li>
              <li>
                <div class="message-notif-scroll scrollbar-outer">
                  <div class="notif-center">
                    <a href="#"><div class="notif-img"><img src="/backend/assets/img/jm_denis.jpg" alt="Img Profile" /></div>
                      <div class="notif-content"><span class="subject">Jimmy Denis</span><span class="block">How are you?</span><span class="time">5 min ago</span></div>
                    </a>
                  </div>
                </div>
              </li>
              <li><a class="see-all" href="#">See all messages<i class="fa fa-angle-right"></i></a></li>
            </ul>
          </li>

          <!-- Notifications -->
          <li class="nav-item topbar-icon dropdown hidden-caret">
            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-bs-toggle="dropdown">
              <i class="fa fa-bell"></i><span class="notification">4</span>
            </a>
            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
              <li><div class="dropdown-title">You have 4 new notifications</div></li>
              <li>
                <div class="notif-scroll scrollbar-outer">
                  <div class="notif-center">
                    <a href="#"><div class="notif-icon notif-primary"><i class="fa fa-user-plus"></i></div><div class="notif-content"><span class="block">New user registered</span><span class="time">5 min ago</span></div></a>
                  </div>
                </div>
              </li>
              <li><a class="see-all" href="#">See all notifications<i class="fa fa-angle-right"></i></a></li>
            </ul>
          </li>

          <!-- Profile -->
          <li class="nav-item topbar-user dropdown hidden-caret">
            <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#">
              <div class="avatar-sm"><img src="/backend/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle" /></div>
              <span class="profile-username"><span class="op-7">Hi,</span> <span class="fw-bold">Hizrian</span></span>
            </a>
            <ul class="dropdown-menu dropdown-user animated fadeIn">
              <div class="dropdown-user-scroll scrollbar-outer">
                <li>
                  <div class="user-box">
                    <div class="avatar-lg"><img src="/backend/assets/img/profile.jpg" alt="profile" class="avatar-img rounded" /></div>
                    <div class="u-text">
                      <h4>Hizrian</h4>
                      <p class="text-muted">hello@example.com</p>
                      <a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
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
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
        <div>
          <h3 class="fw-bold mb-3">See All Banners</h3>
          <h6 class="op-7 mb-2">Your Time Zone Admin Panel</h6>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
          <a href="{{ route('banner.create') }}" class="btn btn-primary btn-round">Add Banner</a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card card-round">
            <div class="card-header">
              <div class="card-head-row card-tools-still-right">
                <div class="card-title">Categories</div>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive table-hover table-bordered">
                <table class="table table-bordered table-striped mb-0">
                  <thead class="table-dark">
                    <tr>
                      <th>ID</th>
                      <th>Category</th>
                      <th>Subcategory</th>
                      <th width="180">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $cat)
                    <tr>
                      <td>{{ $cat->id }}</td>
                      <td>{{ $cat->category }}</td>
                      <td>{{ $cat->subcategory }}</td>
                      <td>
                        <a href="{{ route('category.edit', $cat->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('category.destroy', $cat->id) }}" method="POST" class="d-inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this record?')">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
