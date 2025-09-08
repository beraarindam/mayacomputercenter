<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
  <div class="sidebar-inner px-2 pt-3">
    <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
      <div class="d-flex align-items-center">
        <div class="avatar-lg me-4">
          <img src="/assets/img/team/profile-picture-3.jpg" class="card-img-top rounded-circle border-white"
            alt="Bonnie Green">
        </div>
        <div class="d-block">
          <h2 class="h5 mb-3">Hi, Jane</h2>
          <a href="/login" class="btn btn-secondary btn-sm d-inline-flex align-items-center">
            <svg class="icon icon-xxs me-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
            </svg>
            Sign Out
          </a>
        </div>
      </div>
      <div class="collapse-close d-md-none">
        <a href="#sidebarMenu" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu"
          aria-expanded="true" aria-label="Toggle navigation">
          <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
              clip-rule="evenodd"></path>
          </svg>
        </a>
      </div>
    </div>
    <ul class="nav flex-column pt-3 pt-md-0">

      <li class="nav-item">
        <a href="{{ route('student_dashboard') }}" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon me-3">
            <img src="{{ asset('logo.png') }}" height="20" width="20" alt="Volt Logo">
          </span>
          <span class="mt-1 ms-1 sidebar-text">Mayacomputer</span>
        </a>
      </li>

      <li class="nav-item {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
        <a href="{{ route('student_dashboard') }}" class="nav-link">
          <span class="sidebar-icon"><i class="fa-solid fa-gauge"></i></span>
          <span class="sidebar-text">Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
            <span class="sidebar-icon"><i class="fa-solid fa-address-card"></i></span>
            <span class="sidebar-text">Registration Card</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('view_id_card') }}" class="nav-link">
            <span class="sidebar-icon"><i class="fa-solid fa-id-card"></i></span>
            <span class="sidebar-text">View ID Card</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
            <span class="sidebar-icon"><i class="fa-solid fa-ticket"></i></span>
            <span class="sidebar-text">Admit Card</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
            <span class="sidebar-icon"><i class="fa-solid fa-file-lines"></i></span>
            <span class="sidebar-text">View Marksheet</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
            <span class="sidebar-icon"><i class="fa-solid fa-certificate"></i></span>
            <span class="sidebar-text">Certificate</span>
        </a>
      </li>

      <li class="nav-item">
        <span class="nav-link collapsed d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
          data-bs-target="#submenu-study" aria-expanded="false">
          <span>
            <span class="sidebar-icon"><i class="fa-solid fa-book-open"></i></span>
            <span class="sidebar-text">Study Material</span>
          </span>
          <span class="link-arrow"><i class="fa-solid fa-chevron-right"></i></span>
        </span>
        <div class="multi-level collapse" role="list" id="submenu-study" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item"><a href="#" class="nav-link"><span class="sidebar-icon"><i class="fa-solid fa-file-pdf"></i></span> <span class="sidebar-text">PDF</span></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><span class="sidebar-icon"><i class="fa-solid fa-video"></i></span> <span class="sidebar-text">Videos</span></a></li>
          </ul>
        </div>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
            <span class="sidebar-icon"><i class="fa-solid fa-laptop-code"></i></span>
            <span class="sidebar-text">Online Test Practice</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="#" class="nav-link">
            <span class="sidebar-icon"><i class="fa-solid fa-pen-to-square"></i></span>
            <span class="sidebar-text">Final Exam</span>
        </a>
      </li>

      <li class="nav-item">
        <a href="{{ route('view_payment') }}" class="nav-link">
            <span class="sidebar-icon"><i class="fa-solid fa-credit-card"></i></span>
            <span class="sidebar-text">View Payment History</span>
        </a>
      </li>

      <li class="nav-item">
        <span class="nav-link collapsed d-flex justify-content-between align-items-center" data-bs-toggle="collapse"
          data-bs-target="#submenu-support" aria-expanded="false">
          <span>
            <span class="sidebar-icon"><i class="fa-solid fa-headset"></i></span>
            <span class="sidebar-text">Support</span>
          </span>
          <span class="link-arrow"><i class="fa-solid fa-chevron-right"></i></span>
        </span>
        <div class="multi-level collapse" role="list" id="submenu-support" aria-expanded="false">
          <ul class="flex-column nav">
            <li class="nav-item"><a href="#" class="nav-link"><span class="sidebar-icon"><i class="fa-solid fa-envelope"></i></span> <span class="sidebar-text">Email</span></a></li>
            <li class="nav-item"><a href="#" class="nav-link"><span class="sidebar-icon"><i class="fa-brands fa-whatsapp"></i></span> <span class="sidebar-text">Whatsapp</span></a></li>
          </ul>
        </div>
      </li>




    </ul>
  </div>
</nav>
