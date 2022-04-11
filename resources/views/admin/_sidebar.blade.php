<div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a href="{{route('admin_home')}}" class="nav-link">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-layout-grid4-alt menu-icon"></i>
              <span class="menu-title">Order</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link">New Orders</a></li>
                <li class="nav-item"> <a class="nav-link" >Accepted Orders</a></li>
                <li class="nav-item"> <a class="nav-link" >Shipping Orders</a></li>
                <li class="nav-item"> <a class="nav-link" >Completed Orders</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="{{route('admin_category')}}" class="nav-link" >
              <i class="ti-layout-list-post menu-icon"></i>
              <span class="menu-title">Category</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/products">
              <i class="ti-pie-chart menu-icon"></i>
              <span class="menu-title">Products</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/comments">
              <i class="ti-comment menu-icon"></i>
              <span class="menu-title">Comments</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/messages">
              <i class="ti-email menu-icon"></i>
              <span class="menu-title">Messages</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/faq">
              <i class="ti-help menu-icon"></i>
              <span class="menu-title">FAQ</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="ti-user menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
