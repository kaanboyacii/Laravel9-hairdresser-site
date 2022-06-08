<div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a href="{{route('admin.index')}}" class="nav-link">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.category.index')}}" class="nav-link" >
              <i class="ti-bookmark-alt menu-icon"></i>
              <span class="menu-title">Appointments</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.category.index')}}" class="nav-link" >
              <i class="ti-layout-list-post menu-icon"></i>
              <span class="menu-title">Category</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.service.index')}}">
              <i class="ti-pie-chart menu-icon"></i>
              <span class="menu-title">Services</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.comment.index')}}">
              <i class="ti-comment menu-icon"></i>
              <span class="menu-title">Comments</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.message.index')}}">
              <i class="ti-email menu-icon"></i>
              <span class="menu-title">Messages</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.faq.index')}}">
              <i class="ti-help menu-icon"></i>
              <span class="menu-title">FAQ</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.user.index')}}">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.setting')}}">
              <i class="ti-settings menu-icon"></i>
              <span class="menu-title">Settings</span>
            </a>
          </li>
        </ul>
      </nav>
