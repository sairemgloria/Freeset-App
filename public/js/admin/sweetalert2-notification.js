function confirmDeletePost(event, id) {
   event.preventDefault(); // Prevent the default behavior of the anchor tag (navigation)

   Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Yes, delete it!"
   }).then((result) => {
      if (result.isConfirmed) {
         // Send an AJAX request to delete the preset
         $.ajax({
            url: '/admin/preset/' + id + '/delete',
            type: 'DELETE',
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), // Include CSRF token
            },
            success: function (response) {
               if (response.success) {
                  Swal.fire({
                     icon: 'success',
                     title: 'Deleted!',
                     html: response.message,
                     timer: 2000,
                     confirmButtonColor: "#43A0DE",
                     showConfirmButton: false,
                     didClose: () => {
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
                  html: 'There was an error processing your request.',
                  confirmButtonColor: "#43A0DE",
               });
            }
         });
      }
   });
}
