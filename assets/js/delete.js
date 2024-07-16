$(document).ready(function () {
    // Add a click event listener to all elements with the class "delete-button"
    $(".delete-button").on("click", function (e) {
      e.preventDefault(); // Prevent the default link behavior
  
      // Get the ID of the item to be deleted from the data attribute
      var id = $(this).data("id");
  
      // Show the Sweet Alert confirmation dialog
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          // If the user confirms the deletion, redirect to the deletion process page.
          window.location.href = `process.php?id=${id}`;
        }
      });
    });
  });