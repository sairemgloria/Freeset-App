$(document).ready(function () {
   $('#edit-preset').submit(function (event) {
      event.preventDefault(); // Prevent the default form submission

      var formData = new FormData(this); // Use FormData to handle file uploads
      var presetId = $('input[name="id"]').val(); // Get the preset ID

      $.ajax({
         url: '/admin/preset/' + presetId, // Update the URL to include preset ID
         method: 'POST', // Use POST for AJAX, with _method for PUT
         data: formData,
         processData: false, // Required for FormData
         contentType: false, // Required for FormData
         headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), // Include CSRF token
            'X-HTTP-Method-Override': 'PUT' // Laravel expects PUT for updates
         },
         success: function (response) {
            if (response.success) {
               Swal.fire({
                  icon: 'success',
                  title: 'Success',
                  html: response.message,
                  timer: 2000,
                  confirmButtonColor: "#43A0DE",
                  showConfirmButton: false,
                  didClose: () => {
                     window.location.href = '/admin/presets';
                  }
               });
               // Optionally, redirect or refresh the page
            } else {
               Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  html: '<span class="text-danger">' + response.message + '</span>',
                  confirmButtonColor: "#43A0DE",
               });
            }
         },
         error: function (xhr) {
            Swal.fire({
               icon: 'error',
               title: 'AJAX Error',
               html: xhr.responseText,
               confirmButtonColor: "#43A0DE",
            });
         }
      });
   });
});
