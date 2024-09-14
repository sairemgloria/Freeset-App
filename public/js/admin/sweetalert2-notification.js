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
         // If confirmed, navigate to the delete script with the ID parameter
         // alert('Post deleted successfully');
         const pageURI = '';
         window.location.href = pageURI + `${id}`; // provide the valid url here.
      }
   });
}