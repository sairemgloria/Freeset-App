<!-- Header -->
<x-admin-header>
   <x-slot:title>Freeset | Dashboard</x-slot:title>
</x-admin-header>

<!-- Navbar -->
<x-admin-navbar />

<!-- Main Content -->
<div class="container my-5">
   <div id="page-heading">
      <h2 class="text-primary"><span class="text-success">|</span> Dashboard</h2>
   </div>
   <ol class="breadcrumb">
      <li class="breadcrumb-item active"><a href="{{ url('admin/dashboard') }}">Home</a></li>
      <li class="breadcrumb-item">Dashboard</li>
   </ol>
   <hr class="mb-4">
   <div class="row gap-4 gap-md-3 gap-sm-5 p-1 d-flex justify-content-evenly py-5">
      <div class="card border-secondary mt-3 mx-2 my-sm-4 p-0" style="max-width: 20rem;">
         <div class="display-cards">
            <div class="card-body">
               <div class="d-flex px-3 align-items-center">
                  <h4 class="card-title text-primary w-100 m-0" style="font-size: 4rem;">{{ $countPresets }}</h4>
                  <h4 class="card-text d-flex"><i class='bx bxs-file-image bx-tada-hover text-primary' style="font-size: 4rem;"></i></i></h4>
               </div>
               <p class="card-text text-primary text-start px-3">Preset</p>
            </div>
         </div>
         <div class="card-footer text-center">
            <a href="presets" class="text-secondary d-flex justify-content-center align-items-center" style="text-decoration: none;">
               <span>More info</span>
               <i class='bx bx-info-circle' style="margin-left: 5px;"></i>
            </a>
         </div>
      </div>

      <div class="card border-secondary mt-3 mx-2 my-sm-4 p-0" style="max-width: 20rem;">
         <div class="display-cards">
            <div class="card-body">
               <div class="d-flex px-3 align-items-center">
                  <h4 class="card-title text-primary w-100 m-0" style="font-size: 4rem;">3</h4>
                  <h4 class="card-text d-flex"><i class='bx bx-bar-chart-square bx-tada-hover text-primary' style="font-size: 4rem;"></i></i></h4>
               </div>
               <p class="card-text text-primary text-start px-3">Rating</p>
            </div>
         </div>
         <div class="card-footer text-center">
            <a href="#" class="text-secondary d-flex justify-content-center align-items-center" style="text-decoration: none;">
               <span>More info</span>
               <i class='bx bx-info-circle' style="margin-left: 5px;"></i>
            </a>
         </div>
      </div>

      <div class="card border-secondary mt-3 mx-2 my-sm-4 p-0" style="max-width: 20rem;">
         <div class="display-cards">
            <div class="card-body">
               <div class="d-flex px-3 align-items-center">
                  <h4 class="card-title text-primary w-100 m-0" style="font-size: 4rem;">4</h4>
                  <h4 class="card-text d-flex"><i class='bx bxs-download bx-tada-hover text-primary' style="font-size: 4rem;"></i></i></h4>
               </div>
               <p class="card-text text-primary text-start px-3">Download</p>
            </div>
         </div>
         <div class="card-footer text-center">
            <a href="#" class="text-secondary d-flex justify-content-center align-items-center" style="text-decoration: none;">
               <span>More info</span>
               <i class='bx bx-info-circle' style="margin-left: 5px;"></i>
            </a>
         </div>
      </div>
   </div>
</div>

<!-- Footer -->
<x-admin-footer />