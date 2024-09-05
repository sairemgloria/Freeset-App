<!-- NOTE: This layout.blade.php will serve as the Header & Footer of your page -->
<pre>
{{ print_r($pageInfo, true) }}
</pre>

<!-- Header -->
<x-header>
    <x-slot:title>Freeset | Presets</x-slot:title>
</x-header>

<!-- Navbar -->
<x-navbar />

<!-- Main Content -->
<div class="container px-sm-0 px-3 my-5">
    <!-- Page Heading -->
    <h1 class="text-dark"><span id="line-span" class="text-success">|</span> Presets</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Presets</li>
    </ol>
    <hr>
    <div class="row gap-4 gap-md-3 gap-sm-5 d-flex justify-content-evenly pt-5">
        @foreach ($presets as $preset)
        <div class="card border-secondary mb-5" style="width: 18rem;">
            <img src="images/preset_1.png" class="img" alt="..." style="padding-top: 0.7rem;">
            <div class="card-body d-flex flex-column">
                <h5 class="card-title text-dark">{{ $preset['title'] }}</h5>
                <!-- <p class="card-text">{{ $preset['description'] }}</p> -->
                <div class="d-grid mt-auto">
                    <p>{{ $preset['price'] }}</p>
                    <a href="/preset/{{ $preset['id'] }}">
                        <button class="btn btn-outline-dark w-100">
                            <i class="bx bxs-download align-middle" style="font-size:20px;"></i> Download
                        </button>
                    </a>
                </div>
            </div>
        </div>

        @endforeach
    </div>
</div>

<!-- Footer -->
<x-footer />