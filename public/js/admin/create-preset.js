$(document).ready(function () {
   $('#create-preset').submit(function (event) {
      event.preventDefault();

      var formData = new FormData(this); // Use FormData to handle file uploads

      $.ajax({
         url: '/admin/create-preset', // Updated URL to match API route
         method: 'POST',
         data: formData,
         processData: false, // Required for FormData
         contentType: false, // Required for FormData
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
                     $('#create-preset').trigger('reset'); // Reset the form
                     $('#createPresetModal').modal('hide'); // Close the modal
                     location.reload(); // Refresh the page to reflect changes
                  }
               });
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
