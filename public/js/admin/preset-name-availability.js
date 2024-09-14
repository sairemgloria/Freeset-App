// Function to reset the form
function resetForm() {
   $(document).ready(function () {
      $('#resetButton').click(function () {
         $('#availability').html(''); // Clear the availability span
         $('#create-preset')[0].reset(); // Reset the form fields
         alert('Form has been reset'); // Show the alert
      });
   });
}

resetForm();

// Function for checking preset name availability
function titleChecking() {
   var title = $('#title').val().trim(); // Get the value of the title input field

   if (title !== '') {
      $.ajax({
         url: '/admin/check-preset-name',
         type: 'POST',
         data: {
            title: title,
            _token: $('meta[name="csrf-token"]').attr('content') // Include CSRF token
         },
         success: function (data) {
            if (data.success) {
               $("#availability").html('<span style="color:tomato;">' + data.message + '</span>'); // Show error message
               $("#saveBtn").prop("disabled", true); // Disable the submit button
            } else {
               $("#availability").html('<span style="color:green;">' + data.message + '</span>'); // Show success message
               $("#saveBtn").prop("disabled", false); // Enable the submit button
            }
         },
         error: function (xhr) {
            console.log('Error:', xhr.responseText); // Log errors in the console
         }
      });
   } else {
      $('#availability').html(''); // Clear the availability span
      $("#saveBtn").prop("disabled", false); // Enable the button if the field is empty
   }
}

// Trigger titleChecking when the input field loses focus
$(document).ready(function () {
   $('#title').on('blur', function () {
      titleChecking(); // Call the checking function on blur
   });
});
