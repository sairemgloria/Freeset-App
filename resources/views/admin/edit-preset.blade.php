<!-- Header -->
<x-admin-header>
   <x-slot:title>Freeset | Edit Preset</x-slot:title>
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
      <li class="breadcrumb-item active">Edit Preset</li>
   </ol>
   <hr>
   <div class="container-fluid pt-4">
      <div class="row mx-0">
         <div class="card w-100 px-0">
            <h5 class="card-header p-3"><i class='bx bx-info-circle' style="margin-left: 5px;"></i> {{ $preset->title }}</h5>
            <div class="card-body">
               <div class="modal-body">
               <!-- action="{{ route('admin.updatePreset', $preset->id) }}" -->
                  <form method="POST" id="edit-preset" enctype="multipart/form-data" autocomplete="off">
                     @csrf
                     <input type="hidden" id="id" name="id" value="{{ $preset->id }}">
                     <div class="mb-3">
                        <label for="preset_id" class="form-label">Preset ID</label>
                        <input type="text" class="form-control user-select-none" id="preset_id" name="preset_id" value="{{ $preset->preset_id }}" disabled>
                     </div>
                     <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control mb-2" id="title" name="title" value="{{ $preset->title }}">
                        <span id="availability"></span>
                     </div>
                     <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" autocomplete="off">{{ $preset->description }}</textarea>
                     </div>
                     <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" class="form-control" id="price" name="price" value="{{ $preset->price }}">
                     </div>
                     <div class="mb-3">
                        <label for="display_image_before" class="form-label">Display Image <small class="text-dark">(Before)</small></label>
                        <input type="file" class="form-control" id="display_image_before" name="display_image_before" autocomplete="off">
                     </div>
                     <div class="mb-3">
                        <label for="display_image_after" class="form-label">Display Image <small class="text-dark">(After)</small></label>
                        <input type="file" class="form-control" id="display_image_after" name="display_image_after" autocomplete="off">
                     </div>
                     <div class="mb-3">
                        <label for="image_path" class="form-label">Display Image</label>
                        <input type="file" class="form-control" id="image_path" name="image_path" autocomplete="off">
                     </div>
               </div>
            </div>
            <div class="card-footer p-3">
               <a href="{{ url('admin/presets') }}"><button type="button" class="btn btn-secondary">Return</button></a>
               <button type="submit" id="editBtn" class="btn btn-info">Update</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>

<!-- Additional JS scripts -->
<script src="{{ asset('js/admin/update-preset-name-availability.js') }}"></script>
<script src="{{ asset('js/admin/edit-preset.js') }}"></script>

<!-- Footer -->
<x-admin-footer />