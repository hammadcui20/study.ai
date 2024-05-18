<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{url('tdash')}}">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Student Dashboard</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav"> 
        <li class="nav-item">
          <a class="nav-link text-white bg-gradient-primary" href="/tdash">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link text-white  {{ Request::is('categories') ? 'active' : '' }}" href="{{url('categories')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">category</i>
            </div>
            <span class="nav-link-text ms-1">Shopkeepers</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white {{ Request::is('add-category') ? 'active' : ''}} " href="{{url('add-category')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add_circle</i>
            </div>
            <span class="nav-link-text ms-1">Add Shopkeepers</span>
          </a>
        </li> --}}
        <li class="nav-item ">
          <a class="nav-link text-white {{ Request::is('productss') ? 'active' : ''}} " href="{{url('productss')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">inventory_2</i>
            </div>
            <span class="nav-link-text ms-1">View Education Material</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white {{ Request::is('addproduct') ? 'active' : ''}} " href="{{url('addproduct')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">add_circle</i>
            </div>
            <span class="nav-link-text ms-1">Add Education Material</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white {{ Request::is('orderss') ? 'active' : ''}} " href="{{url('orderss')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">list_alt</i>
            </div>
            <span class="nav-link-text ms-1">Take Quiz</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white {{ Request::is('orderss2') ? 'active' : ''}} " href="{{url('orderss2')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">groups</i>
            </div>
            <span class="nav-link-text ms-1">Take Meeting</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white {{ Request::is('orderss3') ? 'active' : ''}} " href="{{url('orderss3')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">school</i>
            </div>
            <span class="nav-link-text ms-1">Join Class</span>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link text-white {{ Request::is('orderss4') ? 'active' : ''}} " href="{{url('orderss4')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">feed</i>
            </div>  
            <span class="nav-link-text ms-1">View Blogs</span>
          </a>
        </li> 
        {{-- <li class="nav-item ">
          <a class="nav-link text-white {{ Request::is('users') ? 'active' : ''}} " href="{{url('users')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">group</i>
            </div>
            <span class="nav-link-text ms-1">Users List</span>
          </a>
        </li> --}}
        {{-- <li class="nav-item ">
          <a class="nav-link text-white {{ Request::is('users') ? 'active' : ''}} " href="{{url('message')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">message</i>
            </div>
            <span class="nav-link-text ms-1">Messages</span>
          </a>
        </li> --}}

      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
          <a  class="btn btn-primary mt-4 w-100" href="{{ route('logout') }}"
          class="nav-link text-body font-weight-bold px-0" onclick="event.preventDefault();
          document.getElementById('logout-form').submit(); ">
            <i class="fa fa-user me-sm-1"></i>
            <span class="d-sm-inline d-none"> {{ __('Logout') }}</span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          </a>
      </div>
    </div>
  </aside>
