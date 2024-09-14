// Function for checking preset name availability
function titleChecking() {
   var title = $('#title').val().trim(); // Get the value of the title input field

   if (title !== '') {
      $.ajax({
         url: '/admin/update-preset-name',
         type: 'POST',
         data: {
            title: title,
            _token: $('meta[name="csrf-token"]').attr('content') // Include CSRF token
         },
         success: function (data) {
            if (data.success) {
               $("#availability").html('<span style="color:tomato;">' + data.message + '</span>'); // Show error message
               $("#editBtn").prop("disabled", true); // Disable the submit button
            } else {
               $("#availability").html('<span style="color:green;">' + data.message + '</span>'); // Show success message
               $("#editBtn").prop("disabled", false); // Enable the submit button
            }
         },
         error: function (xhr) {
            console.log('Error:', xhr.responseText); // Log errors in the console
         }
      });
   } else {
      $('#availability').html(''); // Clear the availability span
      $("#editBtn").prop("disabled", false); // Enable the button if the field is empty
   }
}

// Trigger titleChecking when the input field loses focus
$(document).ready(function () {
   $('#title').on('blur', function () {
      titleChecking(); // Call the checking function on blur
   });
});
