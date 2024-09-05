<!-- NOTE: This layout.blade.php will serve as the Header & Footer of your page -->
<pre>
{{ print_r($pageInfo, true) }}
</pre>

<!-- Header -->
<x-header>
   <x-slot:title>Freeset | FAQ</x-slot:title>
</x-header>

<!-- Navbar -->
<x-navbar />

<!-- Main Content -->
<div class="container p-0 my-5">
   <!-- Page Heading -->
   <h1 class="text-dark"><span id="line-span" class="text-success">|</span> FAQ</h1>
   <ol class="breadcrumb">
      <li class="breadcrumb-item active"><a href="/">Home</a></li>
      <li class="breadcrumb-item">FAQ</li>
   </ol>
   <hr>
   <!-- Your Content -->
   <span class="text-info">This is FAQ Page</span>
   <br>
   <span>You can add your page content here...</span>
</div>

<!-- Footer -->
<x-footer />