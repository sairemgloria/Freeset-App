<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Freeset | Admin Login</title>

   <!-- External CSS Link -->
   <link rel="stylesheet" href="{{ asset('css/Bootswatch Admin/login-style.css') }}" type="text/css" />

   <!-- Bootswatch CDN Flatly Theme -->
   <link rel="stylesheet" href="{{ asset('css/Bootswatch Admin/bootswatch-theme.css') }}" type="text/css" />

   <!-- Bootstrap 5 CDN -->
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
   <!-- Bootstrap 5 JS Popper -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

   <!-- boxicons icons and icons animation -->
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

   <!-- Google jQuery CDN -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

   <!-- Sweetalert2 JS -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>

   <!-- Your Code -->
   <div class="container-fluid p-0">
      <div class="row" id="content">
         <div class="col-md-5 d-md-block d-none bg-none p-0">
            <div class="display-image" style="background: linear-gradient(rgba(242, 192, 220, 0.55), rgba(168, 78, 51, 0.75)), url('/images/login-banner.png'); height: 100%; width: 100%; background-size: cover;">
            </div>
         </div>
         <div class="col-md-7">
            <div class="mycontent">
               <h2><span class="text-success">|</span> Admin <span>Portal</span></h2>
               <h5 class="login-h5">Sign in to proceed Administrator Dashboard</h5>
               <form action="#" method="POST" id="login-form" autocomplete="off">
                  <!-- the code below is used for displaying of validation only -->
                  <div class="mb-3" id="notification"></div>
                  <div class="form-floating mb-3">
                     <input type="text" class="form-control" name="username" id="username" placeholder="Administrator" autocomplete="off">
                     <label for="floatingInput">Username</label>
                  </div>
                  <div class="form-floating mb-5">
                     <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
                     <label for="floatingPassword">Password</label>
                  </div>
                  <div class="container p-0 text-center text-lg-start">
                     <button type="submit" class="btn btn-success btn-lg px-5 mb-4 mb-md-4 mb-lg-0">Login</button>
                     <a href="#" class="ms-lg-4 mt-3 mt-lg-0">Switch to User</a>
                  </div>
               </form>
               <hr class="mt-5">
               <footer class="bg-light text-center text-lg-start">
                  <!-- Copyright -->
                  <div class="text-center p-3 text-muted" style="background-color: rgba(0, 0, 0, 0.1); user-select: none;">
                     <span class="text-body-secondary">&copy; <?= date("Y"); ?> Made with <i class="bx bx-heart align-middle"></i> Xsai</span>
                  </div>
                  <!-- Copyright -->
               </footer>
            </div>
         </div>
      </div>
   </div>

</body>

</html>