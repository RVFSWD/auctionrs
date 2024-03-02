// document.querySelector('form[action="/save/bid"]').addEventListener('submit', function(event) {
//     event.preventDefault(); // Prevent default form submission
  
//     // Get form data
//     const formData = new FormData(this);
  
//     // Make an AJAX request to the server
//     fetch('/save/bid', {
//       method: 'POST',
//       body: formData
//     })
//     .then(response => response.json())
//     .then(data => {
//       // Handle response from server (e.g., display success/error message)
//       if (data.success) {
//         console.log('Bid saved successfully!');
//         // Clear form fields or display a success message
//       } else {
//         console.error('Error saving bid:', data.error);
//         // Display error message to the user
//       }
//     })
//     .catch(error => {
//       console.error('Error:', error);
//       // Handle network errors or other issues
//     });
//   });
  