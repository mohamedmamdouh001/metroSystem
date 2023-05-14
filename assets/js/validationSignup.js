function validateSignUp() {
    // Get the form values
    let firstNameSignUp = document.getElementById("firstNameSignUp");
    let lastNameSignUp = document.getElementById("lastNameSignUp");
    let emailSignUp = document.getElementById("emailSignUp");
    let passwordSignUp = document.getElementById("PasswordSignUp");
    let confirmPasswordSignUp = document.getElementById("conPasswordSignUp");
    let nationalIdSignUp = document.getElementById("nationalIdSignUp");
    
    
    //check that the un is between 3 and 25
    if(firstNameSignUp.value.length||lastNameSignUp.length<3&&firstNameSignUp.value.length||lastNameSignUp.length>25){
      document.getElementById("lengthNameErrorSignUp").style.display="block";
    }
    // Check that the email is properly formatted
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(emailSignUp.value)) {
     document.getElementById("emailErrorSignUp").style.display="block";
      return false;
    }
    
    //check that password within 3- 25
    if(passwordSignUp.value.length<3 && passwordSignUp.value.length>25){
      document.getElementById("errorPasswordSignUp").style.display="block";
      return false;
    }
    //check that password within 3- 25
    if(nationalIdSignUp.value.length!=14){
      document.getElementById("nationalIdErrorSigup").style.display="block";
      return false;
    }
    // Check that the password and confirm password fields match
    if (passwordSignUp.value != confirmPasswordSignUp.value) {
      document.getElementById("errorConPasswordSignUp").style.display="block";
      return false;
    }

    // Check that all required fields are filled out
    
    if (firstNameSignUp.value == ""||lastNameSignUp == "" || emailSignUp.value == "" || passwordSignUp.value == "" || confirmPasswordSignUp == "" ||nationalIdSignUp=="") {
      document.getElementById("requiredSignup").style.display="block";
      return false;
    }
    // If all validation is done
    return true;
  }



