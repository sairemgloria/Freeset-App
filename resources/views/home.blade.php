<!-- NOTE: This layout.blade.php will serve as the Header & Footer of your page -->
<!-- <pre>
{{ print_r($pageInfo, true) }}
</pre> -->

<!-- Header -->
<x-header>
   <x-slot:title>Freeset | Home</x-slot:title>
</x-header>

<!-- Navbar -->
<x-navbar />

<!-- Main Content -->
<main>
   <h1 class="visually-hidden">Heroes examples</h1>
   <div class="position-relative text-center">
      <!-- Image as a background -->
      <img class="d-block mx-auto img-fluid mobile-fullscreen-image" src="images/lady_in_lavender.png" alt="" style="max-width: 100%;">

      <!-- Text overlay -->
      <div class="position-absolute top-50 start-50 translate-middle text-overlay">
         <h1 class="display-5 fw-bold text-body-emphasis" data-aos="zoom-out" data-aos-duration="1500">Free Lightroom Presets</h1>
         <div class="col-lg-6 mx-auto" data-aos="fade-up" data-aos-duration="3000">
            <p class="lead mb-4">For those who love photo editing & color grading</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
               <a href="/presets">
                  <button type="button" class="btn btn-primary px-4 gap-3">View Presets</button>
               </a>
               <!-- <button type="button" class="btn btn-outline-dark px-4">Secondary</button> -->
            </div>
         </div>
      </div>
   </div>
</main>

<!-- Carousel -->
<div class="container marketing mt-5 py-5" data-bs-theme="light">
   <div class="row">
      <div class="col-lg-4 m-0 px-0 py-sm-0 py-md-5 py-5" data-aos="fade-up" data-aos-anchor-placement="top-center">
         <i class="bx bx-check align-middle" style="font-size:5rem;"></i>
         <div>
            <h2 class="fw-normal pt-3">High quality</h2>
            <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
         </div>
      </div>
      <div class="col-lg-4 m-0 px-0 py-sm-0 py-md-5 py-5" data-aos="fade-up" data-aos-anchor-placement="top-center">
         <i class="bx bxs-download align-middle" style="font-size:5rem;"></i>
         <div>
            <h2 class="fw-normal pt-3">Instant download</h2>
            <p>And lastly this, the third column of representative placeholder content.</p>
         </div>
      </div>
      <div class="col-lg-4 m-0 px-0 py-sm-0 py-md-5 py-5" data-aos="fade-up" data-aos-anchor-placement="top-center">
         <i class="bx bx-happy-heart-eyes align-middle" style="font-size:5rem;"></i>
         <div>
            <h2 class="fw-normal pt-3">Friendly presets</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia odit vel aliquam impedit veniam quidem numquam. Et, sint explicabo doloremque totam neque sit earum?</p>
         </div>
      </div>
   </div>
</div>

<!-- START THE FEATURETTES -->
<div class="container px-sm-0 px-5">
   <hr>
   <div class="row">
      <div class="col-md-7 py-5">
         <h2>Hello</h2>
         <p>Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
      </div>
      <div class="col-md-5 py-5 d-flex justify-content-center">
         <img src="images/preset_1.png" alt="" class="img-fluid" style="max-width: 75%;">
      </div>
   </div>
   <hr>
   <div class="row">
      <div class="col-md-7 py-5 order-md-2">
         <h2>Oh yeah, it’s that good. <span class="text-body-secondary">See for yourself.</span></h2>
         <p>Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
      </div>
      <div class="col-md-5 py-5 order-md-1 d-flex justify-content-center">
         <img src="images/preset_1.png" alt="" class="img-fluid" style="max-width: 75%;">
      </div>
   </div>
</div>

<!-- Footer -->
<x-footer />