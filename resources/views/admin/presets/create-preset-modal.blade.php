<!-- Modal -->
<div class="modal fade" id="{{ $id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $title }}</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <form method="POST" id="create-preset" enctype="multipart/form-data" autocomplete="off">
               @csrf
               <div class="mb-3">
                  <label for="preset_id" class="form-label">Preset ID</label>
                  <input type="text" class="form-control" id="preset_id" name="preset_id" autocomplete="off">
               </div>
               <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input type="text" class="form-control mb-2" id="title" name="title" onBlur="titleChecking()" autocomplete="off">
                  <span id="availability"></span>
               </div>
               <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <textarea class="form-control" id="description" name="description" rows="3" autocomplete="off"></textarea>
               </div>
               <div class="mb-3">
                  <label for="price" class="form-label">Price</label>
                  <input type="number" class="form-control" id="price" name="price" autocomplete="off">
               </div>
               <div class="mb-3">
                  <label for="display_image_before" class="form-label">Display Image <small class="text-dark">(Before)</small></label>
                  <input class="form-control" type="file" id="display_image_before" name="display_image_before" autocomplete="off">
               </div>
               <div class="mb-3">
                  <label for="display_image_after" class="form-label">Display Image <small class="text-dark">(After)</small></label>
                  <input class="form-control" type="file" id="display_image_after" name="display_image_after" autocomplete="off">
               </div>
               <div class="mb-3">
                  <label for="image_path" class="form-label">Display Image</label>
                  <input class="form-control" type="file" id="image_path" name="image_path" autocomplete="off">
               </div>
               <!-- <div class="mb-3">
                  <label for="preset_path" class="form-label">Upload Preset</label>
                  <input class="form-control" type="file" id="preset_path" name="preset_path" autocomplete="off">
               </div> -->
               <div class="d-grid gap-2 mt-4">
                  <button type="reset" class="btn btn-outline-danger d-flex justify-content-center align-items-center" id="resetButton">
                     <i class='bx bx-sync' style="margin-right: 3px;"></i> Reset
                  </button>
               </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="saveBtn" class="btn btn-info">Save</button>
         </div>
         </form>
      </div>
   </div>
</div>

<!-- Additional JS scripts -->
<script src="{{ asset('js/admin/preset-name-availability.js') }}"></script>
<script src="{{ asset('js/admin/create-preset.js') }}"></script>