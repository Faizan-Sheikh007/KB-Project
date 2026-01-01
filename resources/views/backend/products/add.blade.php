@extends('backend.layouts.app')
@section('content')

<div class="main-panel">
  <div class="main-header">
    <div class="main-header-logo">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="dark">
        <a href="index.html" class="logo">
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
          <li class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" aria-haspopup="true">
              <i class="fa fa-search"></i>
            </a>
            <ul class="dropdown-menu dropdown-search animated fadeIn">
              <form class="navbar-left navbar-form nav-search">
                <div class="input-group">
                  <input type="text" placeholder="Search ..." class="form-control" />
                </div>
              </form>
            </ul>
          </li>

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
                    <a href="#">
                      <div class="notif-img"><img src="/backend/assets/img/jm_denis.jpg" alt="Img Profile" /></div>
                      <div class="notif-content">
                        <span class="subject">Jimmy Denis</span>
                        <span class="block">How are you?</span>
                        <span class="time">5 minutes ago</span>
                      </div>
                    </a>
                    <a href="#">
                      <div class="notif-img"><img src="/backend/assets/img/chadengle.jpg" alt="Img Profile" /></div>
                      <div class="notif-content">
                        <span class="subject">Chad</span>
                        <span class="block">Ok, Thanks!</span>
                        <span class="time">12 minutes ago</span>
                      </div>
                    </a>
                    <a href="#">
                      <div class="notif-img"><img src="/backend/assets/img/mlane.jpg" alt="Img Profile" /></div>
                      <div class="notif-content">
                        <span class="subject">Jhon Doe</span>
                        <span class="block">Ready for the meeting today...</span>
                        <span class="time">12 minutes ago</span>
                      </div>
                    </a>
                    <a href="#">
                      <div class="notif-img"><img src="/backend/assets/img/talha.jpg" alt="Img Profile" /></div>
                      <div class="notif-content">
                        <span class="subject">Talha</span>
                        <span class="block">Hi, Apa Kabar?</span>
                        <span class="time">17 minutes ago</span>
                      </div>
                    </a>
                  </div>
                </div>
              </li>
              <li><a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i></a></li>
            </ul>
          </li>

          <li class="nav-item topbar-icon dropdown hidden-caret">
            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-bs-toggle="dropdown">
              <i class="fa fa-bell"></i><span class="notification">4</span>
            </a>
            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
              <li><div class="dropdown-title">You have 4 new notifications</div></li>
              <li>
                <div class="notif-scroll scrollbar-outer">
                  <div class="notif-center">
                    <a href="#"><div class="notif-icon notif-primary"><i class="fa fa-user-plus"></i></div><div class="notif-content"><span class="block">New user registered</span><span class="time">5 minutes ago</span></div></a>
                    <a href="#"><div class="notif-icon notif-success"><i class="fa fa-comment"></i></div><div class="notif-content"><span class="block">Rahmad commented on Admin</span><span class="time">12 minutes ago</span></div></a>
                    <a href="#"><div class="notif-img"><img src="/backend/assets/img/profile2.jpg" alt="Img Profile" /></div><div class="notif-content"><span class="block">Reza sent messages to you</span><span class="time">12 minutes ago</span></div></a>
                    <a href="#"><div class="notif-icon notif-danger"><i class="fa fa-heart"></i></div><div class="notif-content"><span class="block">Farrah liked Admin</span><span class="time">17 minutes ago</span></div></a>
                  </div>
                </div>
              </li>
              <li><a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i></a></li>
            </ul>
          </li>

          <li class="nav-item topbar-user dropdown hidden-caret">
            <a class="dropdown-toggle profile-pic" data-bs-toggle="dropdown" href="#">
              <div class="avatar-sm"><img src="/backend/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle" /></div>
              <span class="profile-username"><span class="op-7">Hi,</span> <span class="fw-bold">Hizrian</span></span>
            </a>
            <ul class="dropdown-menu dropdown-user animated fadeIn">
              <div class="dropdown-user-scroll scrollbar-outer">
                <li>
                  <div class="user-box">
                    <div class="avatar-lg">
                      <img src="/backend/assets/img/profile.jpg" alt="image profile" class="avatar-img rounded" />
                    </div>
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
      <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4 p-4">
        <div>
          <h3 class="fw-bold mb-3">Add Product</h3>
          <h6 class="op-7 mb-2">Your Time Zone Admin Panel</h6>
        </div>
        <div class="ms-md-auto py-2 py-md-0">
          <a href="{{ route('product.index') }}" class="btn btn-primary btn-round">See products</a>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card card-round">
            <div class="card-header">
              <div class="card-head-row card-tools-still-right">
                <div class="card-title">products</div>
              </div>
            </div>

            <div class="card-body">
              <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12">
                 <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="p-4 bg-white rounded-3 shadow-sm">
    @csrf

    <div class="row g-4">

        <!-- Heading -->
        <div class="col-md-6">
            <label for="heading" class="form-label fw-semibold">Heading</label>
            <input type="text" class="form-control modern-input" id="heading" name="heading" placeholder="Enter heading" required>
        </div>

        <!-- Price -->
        <div class="col-md-6">
            <label for="price" class="form-label fw-semibold">Price</label>
            <input type="number" class="form-control modern-input" id="price" name="price" placeholder="Enter price" required step="0.01">
        </div>

        <!-- Quantity -->
        <div class="col-md-6">
            <label for="quantity" class="form-label fw-semibold">Quantity</label>
            <input type="number" class="form-control modern-input" id="quantity" name="quantity" placeholder="Enter quantity" required>
        </div>

        <!-- Description -->
        <div class="col-md-12">
            <label for="description" class="form-label fw-semibold">Description</label>
            <textarea class="form-control modern-input" id="description" name="description" rows="4" placeholder="Enter product description" required></textarea>
        </div>

        <!-- Category -->
        <div class="col-md-6">
            <label for="category" class="form-label fw-semibold">Select Category</label>
            <select class="form-control modern-input" id="category" name="category_id" required>
                <option value="" disabled selected>Select category</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                @endforeach
            </select>
        </div>

        <!-- Subcategory -->
        <div class="col-md-6">
            <label for="subcategory" class="form-label fw-semibold">Select Subcategory</label>
            <select class="form-control modern-input" id="subcategory" name="subcategory" required>
                <option value="" disabled selected>Select subcategory</option>
                @foreach($categories as $category)
                    @if($category->subcategory)
                        <option value="{{ $category->subcategory }}">{{ $category->subcategory }}</option>
                    @endif
                @endforeach
            </select>
        </div>

        <!-- Image Upload -->
        <div class="col-md-12">
            <label for="imageUpload" class="form-label fw-semibold">Upload Image</label>
            <div class="upload-box border rounded-3 bg-white p-4 text-center">
                <input type="file" class="form-control modern-input" id="imageUpload" name="image" accept="image/*" required>
                <small class="text-muted d-block mt-2">Supported formats: JPG, PNG, WEBP (Max 2MB)</small>
            </div>
        </div>

        <!-- Buttons -->
        <div class="col-12 text-center mt-4">
            <button type="submit" class="btn btn-success px-5 py-2 rounded-pill shadow-sm hover-grow">
                <i class="fas fa-check me-2"></i>Submit
            </button>
            <button type="reset" class="btn btn-outline-danger px-5 py-2 rounded-pill shadow-sm hover-grow ms-2">
                <i class="fas fa-times me-2"></i>Cancel
            </button>
            
        </div>
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

{{-- Custom Styles --}}
@push('styles')
<style>
  .modern-input {
    border-radius: 10px;
    border: 1px solid #ced4da;
    padding: 10px 15px;
    transition: all 0.3s ease;
  }

  .modern-input:focus {
    border-color: #4e4376;
    box-shadow: 0 0 0 0.2rem rgba(78, 67, 118, 0.25);
  }

  .upload-box input[type="file"] {
    border: 1px dashed #ccc;
    padding: 20px;
    cursor: pointer;
    transition: 0.3s;
  }

  .upload-box input[type="file"]:hover {
    border-color: #4e4376;
    background: #f9f8ff;
  }

  .hover-grow {
    transition: all 0.3s ease;
  }

  .hover-grow:hover {
    transform: scale(1.05);
  }
</style>
@endpush

@endsection
