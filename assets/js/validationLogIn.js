function validateLogIn() {
    // Get the form values
    let emailLogIn = document.getElementById("emailLogIn");
    let passwordLogIn = document.getElementById("passwordLogIn");
    // Check that all required fields are filled out
    
    if (passwordLogIn.value == ""||emailLogIn == "") {
      document.getElementById("requiredLogIn").style.display="block";
      return false;
    }
    // If all validation is done
    return true;
  }



