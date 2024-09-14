<!-- Header -->
<x-admin-header>
   <x-slot:title>Freeset | Create Preset</x-slot:title>
</x-admin-header>

<!-- Navbar -->
<x-admin-navbar />

<!-- Main Content -->
<div class="container mt-5">
   <div id="page-heading">
      <h2 class="text-primary"><span class="text-success">|</span> Create Preset</h2>
   </div>
   <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
      <li class="breadcrumb-item active">Presets</li>
   </ol>
   <hr>
   <div class="my-3 pt-3 text-center">
      <button type="button" class="btn btn-outline-primary d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#createPresetModal"><i class='bx bx-plus' style="margin-right: 3px;"></i> Add</button>
   </div>
   <div class="table-responsive">
      <table id="presetsTable" class="table table-bordered table-hover">
         <thead>
            <tr>
               <th class="align-middle text-center text-primary">#</th>
               <th class="align-middle text-center text-primary">Preset ID</th>
               <th class="align-middle text-center text-primary">Display</th>
               <th class="align-middle text-center text-primary">Title</th>
               <th class="align-middle text-center text-primary">Description</th>
               <th class="align-middle text-center text-primary">Price</th>
               <th class="align-middle text-center text-primary">Actions</th>
            </tr>
         </thead>
         <tbody>
            @if (count($presets) === 0)
            <!-- Display no preset found if the presets table is empty -->
            <span class="text-danger">No preset data found</span>
            @else
            <!-- Display all presets if the presets table has available data -->
            @foreach ($presets as $preset)
            <tr>
               <td class="text-primary align-middle text-center">{{ $count++ }}</td>
               <td class="text-primary align-middle text-center">{{ $preset->preset_id }}</td>
               <td class="text-primary align-middle text-center">
                  <img src="{{ $preset->image_path ? asset('storage/' . $preset->image_path) : asset('images/default_preset.png') }}" width="50" height="50" alt="Preset Image">
               </td>
               <td class="text-primary align-middle text-center">{{ $preset->title }}</td>
               <td class="text-primary align-middle text-center">{{ $preset->description }}</td>
               <td class="text-primary align-middle text-center">₱ {{ $preset->price }}.00</td>
               <td class="text-primary align-middle text-center">
                  <div class="d-flex justify-content-center gap-1" data-bs-theme="dark">
                     <a href="preset/{{ $preset->id }}" class="btn bg-info d-flex justify-content-center align-items-center py-2">
                        <i class='bx bx-search-alt-2'></i>
                     </a>
                     <a href="preset/{{ $preset->id }}/edit" class="btn bg-success d-flex justify-content-center align-items-center py-2">
                        <i class='bx bx-edit'></i>
                     </a>
                     <!-- Use JS function for delete with the correct preset ID -->
                     <a href="#" onclick="confirmDeletePost(event, id);" class="btn bg-danger d-flex justify-content-center align-items-center py-2">
                        <i class='bx bx-trash'></i>
                     </a>
                  </div>
               </td>
            </tr>
            @endforeach
            @endif
         </tbody>

         <tfoot>
            <tr>
               <th class="align-middle text-center text-primary">#</th>
               <th class="align-middle text-center text-primary">Preset ID</th>
               <th class="align-middle text-center text-primary">Display</th>
               <th class="align-middle text-center text-primary">Title</th>
               <th class="align-middle text-center text-primary">Description</th>
               <th class="align-middle text-center text-primary">Price</th>
               <th class="align-middle text-center text-primary">Actions</th>
            </tr>
         </tfoot>
      </table>
   </div>
</div>

@include('admin.presets.create-preset-modal', ['id' => 'createPresetModal', 'title' => 'Create Preset'])

<script>
   // DataTable Script
   new DataTable('#presetsTable');
</script>

<!-- Footer -->
<x-admin-footer />