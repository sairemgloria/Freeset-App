<!-- Header -->
<x-admin-header>
   <x-slot:title>Freeset | {{ $preset->title }}</x-slot:title>
</x-admin-header>

<!-- Navbar -->
<x-admin-navbar />

<!-- Main Content -->
<div class="container mt-5">
   <div id="page-heading">
      <h2 class="text-primary"><span class="text-success">|</span> {{ $preset->title }}</h2>
   </div>
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('admin/presets') }}">Presets</a></li>
      <li class="breadcrumb-item active">View Preset</li>
   </ol>
   <hr>
   <div class="container-fluid py-5">
      <div class="row mx-0">
         <div class="col-lg-3 d-flex flex-column align-items-center">
            <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="true">
               <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
               </div>
               <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="3000">
                     <img src="{{ $preset->image_path ? asset('storage/' . $preset->image_path) : asset('images/default_preset.png') }}" width="250" height="300" class="d-block w-auto" alt="Preset Image">
                     <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-light">{{ $preset->title }} Preset</h5>
                     </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                     <!-- Second Image (Before) -->
                     <img src="{{ $preset->display_image_before ? asset('storage/' . $preset->display_image_before) : asset('images_before/default_preset.png') }}" width="250" height="300" class="d-block w-auto" alt="Before Image">
                     <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-light">Before</h5>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <!-- Third Image (After) -->
                     <img src="{{ $preset->display_image_after ? asset('storage/' . $preset->display_image_after) : asset('images_after/default_preset.png') }}" width="250" height="300" class="d-block w-auto" alt="After Image">
                     <div class="carousel-caption d-none d-md-block">
                        <h5 class="text-light">After</h5>
                     </div>
                  </div>
               </div>

               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
               </button>
            </div>
         </div>

         <div class="col-lg-9 px-0 px-lg-5 pt-5 pt-sm-0 pt-md-5 pt-lg-0">
            <figure class="ps-0 ps-lg-4">
               <h4 class="text-primary">Preset Information</h4>
               <div class="table-responsive my-3">
                  <table class="table table-hover">
                     <tr>
                        <td width="150" class="text-primary">Preset ID</td>
                        <td width="400" class="text-primary">{{ $preset->preset_id }}</td>
                     </tr>
                     <tr>
                        <td width="150" class="text-primary">Title</td>
                        <td width="400" class="text-primary">{{ $preset->title }}</td>
                     </tr>
                     <tr>
                        <td width="150" class="text-primary">Description</td>
                        <td width="400" class="text-primary">{{ $preset->description }}</td>
                     </tr>
                     <tr>
                        <td width="150" class="text-primary">Price</td>
                        <td width="400" class="text-primary">₱ {{ $preset->price }}.00</td>
                     </tr>
                  </table>
               </div>
               <!-- TEST CODE -->
               <div class="col-lg-6 pt-3 pt-sm-0 pt-md-5 pt-lg-0">
                  <form action="">
                     <div class="row">
                        <label for="preset_path" class="form-label text-primary mb-2 mb-sm-2">Upload Preset</label>
                        <div class="col-12 col-sm-9 mb-3 mb-sm-0">
                           <input class="form-control" type="file" id="preset_path" name="preset_path" autocomplete="off">
                        </div>
                        <div class="col-12 col-sm-3 ps-auto ps-sm-0">
                           <button type="button" class="btn btn-outline-success w-100 d-flex align-items-center justify-content-center">
                              <i class='bx bx-upload me-1'></i>Upload
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </figure>
         </div>
      </div>

   </div>
</div>
</div>

<!-- Footer -->
<x-admin-footer />