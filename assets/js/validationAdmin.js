function validateLogInAdmin() {
    // Get the form values
    let userNameAdmin = document.getElementById("userNameAdmin");
    let passwordAdmin = document.getElementById("passwordAdmin");
    // Check that all required fields are filled out
    
    if (userNameAdmin.value == ""||passwordAdmin == "") {
      document.getElementById("requiredLogInAdmin").style.display="block";
      return false;
    }
    // If all validation is done
    return true;
  }



