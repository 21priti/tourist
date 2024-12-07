function toggleEditable(fieldId) {
    const field = document.getElementById(fieldId);
    field.readOnly = !field.readOnly; // Toggle readonly
    if (!field.readOnly) {
      field.focus(); // Focus the input if editable
    }
  }

  // Function to handle profile picture upload
  function uploadProfilePic(event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        document.querySelector('.profile-pic').src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  }