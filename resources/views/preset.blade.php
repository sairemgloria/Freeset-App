<!-- Header -->
<x-user-header>
   <x-slot:title>Freeset | {{ $preset['title'] }}</x-slot:title>
</x-user-header>

<!-- Navbar -->
<x-user-navbar />

<!-- Main Content -->
<div class="container px-sm-0 px-3 my-5">
   <!-- Page Heading -->
   <h1 class="text-dark"><span id="line-span" class="text-success">|</span> {{ $preset['title'] }}</h1>
   <ol class="breadcrumb">
      <li class="breadcrumb-item active"><a href="/presets">Presets</a></li>
      <li class="breadcrumb-item">View Preset</li>
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
                     <img src="{{ $preset->image_path ? asset('storage/' . $preset->image_path) : asset('images/default_preset.png') }}" width="image_path" height="300" class="d-block w-auto" alt="Preset Image">
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

         <div class="col-lg-9 pt-5 pt-sm-0 pt-md-5 pt-lg-0">
            <figure class="ps-0 ps-lg-4">
               <h4 class="text-primary">Preset Information</h4>
               <div class="table-responsive my-4">
                  <table class="table table-hover">
                     <tr>
                        <td width="100" class="text-primary">Title</td>
                        <td width="500" class="text-primary">{{ $preset->title }}</td>
                     </tr>
                     <tr>
                        <td width="100" class="text-primary">Description</td>
                        <td width="500" class="text-primary">{{ $preset->description }}</td>
                     </tr>
                     <tr>
                        <td width="100" class="text-primary">Price</td>
                        <td width="500" class="text-primary">₱ {{ $preset->price }}.00</td>
                     </tr>
                  </table>
               </div>
               <div class="col d-flex">
                  <div class="pe-2">
                     <a href="#Rate">
                        <button class="btn btn-outline-warning w-auto">
                           <i class="bx bxs-star text-align-center"></i> Rate
                        </button>
                     </a>
                  </div class="pe-0">
                  <div>
                     <a href="#Download">
                        <button class="btn btn-outline-success w-auto">
                           <i class="bx bxs-download text-align-center"></i> Download
                        </button>
                     </a>
                  </div>
               </div>
            </figure>
         </div>
      </div>
   </div>
</div>

<!-- Footer -->
<x-user-footer />