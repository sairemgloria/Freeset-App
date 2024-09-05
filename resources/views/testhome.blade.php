<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Test Page</title>

   <!-- External CSS Link -->
   <link rel="stylesheet" href="css/test.css" type="text/css" />

   <!-- boxicons icons and icons animation -->
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

   <!-- Bootswatch CDN Luxury Theme -->
   <link rel="stylesheet" href="css/bootstrap-lux-theme.css" type="text/css" />

   <!-- Bootstrap 5 CDN -->
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->

   <!-- Bootstrap 5 JS Popper -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>

<body>

   <!-- Navbar -->
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container">
         <a class="navbar-brand text-dark" href="/">Freeset</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
               </li>
               <li class="nav-item">
                  <x-nav-link href="/presets" :active="request()->is('presets')">Presets</x-nav-link>
               </li>
               <li class="nav-item">
                  <x-nav-link href="/faq" :active="request()->is('faq')">FAQ</x-nav-link>
               </li>
               <li class="nav-item">
                  <x-nav-link href="/faq" :active="request()->is('faq')">About</x-nav-link>
               </li>
               <li class="nav-item">
                  <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
               </li>
            </ul>
         </div>
      </div>
   </nav>

   <!-- Main Content -->
   <main>
      <h1 class="visually-hidden">Heroes examples</h1>
      <div class="position-relative text-center">
         <!-- Image as a background -->
         <img class="d-block mx-auto img-fluid mobile-fullscreen-image" src="images/lady_in_lavender.png" alt="" style="max-width: 100%;">

         <!-- Text overlay -->
         <div class="position-absolute top-50 start-50 translate-middle text-overlay">
            <h1 class="display-5 fw-bold text-body-emphasis">Free Lightroom Presets</h1>
            <div class="col-lg-6 mx-auto">
               <p class="lead mb-4">For those who love editing & color grading using Lightroom</p>
               <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                  <button type="button" class="btn btn-primary px-4 gap-3">View Presets</button>
                  <button type="button" class="btn btn-outline-dark px-4">Secondary</button>
               </div>
            </div>
         </div>
      </div>
   </main>

   <!-- Carousel -->
   <div class="container marketing mt-5 py-5" data-bs-theme="light">

      <!-- Three columns of text below the carousel -->
      <div class="row">
         <div class="col-lg-4 m-0 px-0 py-sm-0 py-5">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
               <title>Placeholder</title>
               <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            </svg>
            <div>
               <h2 class="fw-normal pt-3">Heading</h2>
               <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
            </div>
            <div class="mt-auto">
               <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div>
         </div><!-- /.col-lg-4 -->
         <div class="col-lg-4 m-0 px-0 py-sm-0 py-5">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
               <title>Placeholder</title>
               <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            </svg>
            <div>
               <h2 class="fw-normal pt-3">Heading</h2>
               <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia odit vel aliquam impedit veniam quidem numquam. Et, sint explicabo doloremque totam neque sit earum?</p>
            </div>
            <div class="mt-auto">
               <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div>
         </div><!-- /.col-lg-4 -->
         <div class="col-lg-4 m-0 px-0 py-sm-0 py-5">
            <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
               <title>Placeholder</title>
               <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
            </svg>
            <div>
               <h2 class="fw-normal pt-3">Heading</h2>
               <p>And lastly this, the third column of representative placeholder content.</p>
            </div>
            <div class="mt-auto">
               <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div>
         </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
   </div>

   <!-- START THE FEATURETTES -->
   <div class="container px-sm-0 px-5">
      <hr>
      <div class="row">
         <div class="col-md-7 pe-sm-5 pe-0 py-5">
            <h2>Hello</h2>
            <p>Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
         </div>
         <div class="col-md-5 ps-sm-0 ps-5 py-5">
            <img src="images/preset_1.png" alt="" style="max-width: 100%;">
         </div>
      </div>
      <hr>
      <div class="row">
         <div class="col-md-7 pe-sm-5 pe-0 py-5 order-md-2">
            <h2>Oh yeah, it’s that good. <span class="text-body-secondary">See for yourself.</span></h2>
            <p>Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
         </div>
         <div class="col-md-5 ps-sm-0 ps-5 py-5 order-md-1">
            <img src="images/preset_1.png" alt="" style="max-width: 100%;">
         </div>
      </div>
   </div>

   <!-- footer -->
   <div class="container pt-4 px-0">
      <footer class="d-flex flex-wrap justify-content-between align-items-center px-3 py-3 mt-4 border-top">
         <div class="col-md-4 d-flex align-items-center">
            <span class="text-body-secondary">&copy; <?= date("Y"); ?> Made with <i class="bx bx-heart align-middle"></i> Xsai</span>
         </div>

         <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <a href="#">
               <li class="ms-3"><i class="bx bxl-twitter"></i></li>
            </a>
            <a href="#">
               <li class="ms-3"><i class="bx bxl-instagram"></i></li>
            </a>
            <a href="#">
               <li class="ms-3"><i class="bx bxl-facebook"></i></li>
            </a>
         </ul>
      </footer>
   </div>

</body>

</html>