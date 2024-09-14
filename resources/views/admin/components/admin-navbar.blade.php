<nav class="navbar bg-primary" data-bs-theme="dark">
   <div class="container">
      <a class="navbar-brand text-light" href="{{ url('admin/dashboard') }}" id="navbar-title">&raquo; Freeset</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
         <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="navbar-title">Welcome, USERNAME</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
         </div>
         <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
               <li class="nav-item">
                  <x-nav-link href="{{ url('admin/dashboard') }}" :active="request()->is('admin/dashboard')">Dashboard</x-nav-link>
               </li>
               <li class="nav-item">
                  <x-nav-link href="{{ url('admin/presets') }}" :active="request()->is('admin/presets')">Presets</x-nav-link>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Settings & Privacy
                  </a>
                  <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#">Update Profile</a></li>
                     <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#editAdminInfoModal">Edit Information</a></li>
                     <li>
                        <hr class="dropdown-divider">
                     </li>
                     <li><a class="dropdown-item" href="#" id="logoutBtn">Log out</a></li>
                  </ul>
               </li>
            </ul>
            <!-- <form class="d-flex mt-3" role="search">
               <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-success" type="submit">Search</button>
            </form> -->
         </div>
      </div>
   </div>
</nav>