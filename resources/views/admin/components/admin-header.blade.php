<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{$title}}</title>

   <!-- External CSS Link -->
   <link rel="stylesheet" href="{{ asset('css/Bootswatch Admin/dashboard-style.css') }}" type="text/css" />

   <!-- Bootswatch CDN Luxury Theme -->
   <link rel="stylesheet" href="{{ asset('css/Bootswatch Admin/bootswatch-theme.css') }}" type="text/css" />

   <!-- Bootstrap 5 CDN -->
   <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
   <!-- Bootstrap 5 JS Popper -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

   <!-- Datatables CDN CSS -->
   <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css" type="text/css" />
   <!-- Datatables CDN JS -->
   <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
   <script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>

   <!-- boxicons icons and icons animation -->
   <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

   <!-- Sweetalert2 JS -->
   <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

   <!-- Google jQuery CDN -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>