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
        @if (count($presets) === 0)
        <!-- Display no preset found if the presets table is empty -->
        <span class="text-danger text-center">No preset data found</span>
        @else
        <!-- Display all presets if the presets table has available data -->
        @foreach ($presets as $preset)
        <div class="card border-secondary p-3 mb-5" style="width: 18rem;">
            <img src="{{ $preset->image_path ? asset('storage/' . $preset->image_path) : asset('images/default_preset.png') }}" width="auto" height="250" class="preset-display" alt="Preset Image">
            <div class="card-body d-flex flex-column">
                <a href="/preset/{{ $preset['id'] }}" style="text-decoration: none;">
                    <h5 class="card-title text-dark">{{ $preset['title'] }}</h5>
                </a>
                <!-- Preset description -->
                <!-- <p class="card-text">{{ $preset['description'] }}</p> -->
                <!-- Star rating -->
                <p class="card-text">{!! getStarIcons($preset['rating']) !!}</p>
                <div class="d-grid mt-auto">
                    @if ($preset['price'] == 0)
                    <p>Free</p>
                    @elseif ($preset['price'] != 0)
                    <p>₱{{ $preset['price'] }}.00</p>
                    @endif
                    <a href="#Download">
                        <button class="btn btn-outline-dark w-100">
                            <i class="bx bxs-download align-middle" style="font-size:18px;"></i> Download
                        </button>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        @endif
        <!-- added pagination test -->
        <!-- Laravel pagination links -->
        <!-- <div class=""> -->
            {{ $presets->links('pagination::bootstrap-5') }}
        <!-- </div> -->
    </div>
</div>

<!-- Footer -->
<x-footer />