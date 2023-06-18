<?php
include "../config/config.php";

$id = $_GET['id'];

if(isset($_POST['pay-fawry'])){
  $fawry_reciept = $_FILES['fawry-reciept']['name'];

  $target_dir_edu = "../payment_fawry/";
  $target_file_edu = $target_dir_edu . basename($fawry_reciept);
  move_uploaded_file($_FILES["fawry-reciept"]['tmp_name'], $target_file_edu);

  $sql = "INSERT INTO `payment`(`request_id`,`payment_method`,`is_payed`)VALUES('$id', '$fawry_reciept', 1)";
  mysqli_query($conn, $sql);

  $sql = "UPDATE `reqeust`
          SET `request_status` = 'Wait for Metro Office Confirmation'
          WHERE `request_id`='$id'";
  mysqli_query($conn, $sql);
  header("location:studentProfile.php");
}
if(isset($_POST['pay-visa'])){

  $sql = "INSERT INTO `payment`(`request_id`,`payment_method`,`is_payed`)VALUES('$id', 'VISA', 1)";
  mysqli_query($conn, $sql);

  $sql = "UPDATE `reqeust`
          SET `request_status` = 'Wait for Metro Office Confirmation'
          WHERE `request_id`='$id'";
  mysqli_query($conn, $sql);
  header("location:studentProfile.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="sassPract/css/normalize.css">
  <link rel="stylesheet" href="sassPract/css/all.min.css">
  <link rel="stylesheet" href="sassPract/css/bootstrap.min.css">
  <link rel="stylesheet" href="sassPract/css/main.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
  <title>Payment Template</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light  p-3 sticky-top"style="background-color: #9d9d9d;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="sassPract/css/img/studentImg/istanbul-metro-logo.png" alt="" width="50" height="40" class="d-inline-block align-text-top ">
            </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item p-2">
                <a class="nav-link fs-4" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item p-2 ">
              <?php if(!empty($_SESSION['email'])){ ?>
                <form method="get" action="">
                    <button class="profileLogOut nav-link position-relative fs-4" aria-current="page" style="border:0px; background-color: transparent;" type="submit" name="logout">Log Out
                        <a class="navbar-brand" href="#">
                            <img src="sassPract/css/img/studentImg/logout (1).png" alt="" width="40" height="35" class="logoutIcon d-none d-lg-inline-block p-1 ms-2">
                        </a>
                    </button>
                </form>
              <?php }
              if(isset($_GET['logout'])){
                unset($_SESSION['email']);
                header("location:login.php");
              }
              ?> 
              </li>
            </ul>

          </div>
        </div>    
    </nav>                   
    <div class="loginBackground">
  <div class="containerPayment container" style="background-color: #dedede;">
    <div class="row mt-3">
      <div class="col-md-12">
        <h1 class="PaymentTitle">Payment Details</h1>
        <form action="" enctype="multipart/form-data" method="post" >
          <div class="mb-3">
            <label for="paymentMethod" class="form-label">Payment Method</label>
            <div class="payment-methods">
              <div class="card" id="creditCard">
                <img src="sassPract/css/img/studentImg/visa.jpeg" alt="Credit Card">
                <div>Credit Card</div>
              </div>
              <div class="card" id="fawry">
                <img src="sassPract/css/img/studentImg/fawry.jpeg" alt="Fawry">
                <div>Fawry</div>
              </div>
            </div>
          </div>
          <form action="" class="formFawry">
          <div class="mb-3" id="farwy-code">
          <h2 id="farwy-code">1000157983</h2>
          </div>
          <div class="mb-3" id="payment-img">
            <label for="payment-img" class="form-label">payment img</label>
            <input type="file" name="fawry-reciept" class="form-control payInp" id="payment-img" required>
            <input type="hidden" name="student-id" value="<?=$id?>" >
          </div>
          <button type="submit" class="btnn" name="pay-fawry" id="btnFawry">Pay Now</button>
        </form>





        <form action="" method="post" id="formvisa" onSubmit=" return validatePayment()">
        
          <div class="mb-3" id="cardDetails">
            <label for="cardNumber" class="form-label">Card Number</label>
            <input type="text" class="form-control payInp" id="cardNumber" placeholder="Enter card number" required>
  <small class="text-danger" id="cardNumErorr" style="display: none;">Please enter a valid card number</small>
          </div>
          <div class="mb-3" id="expiryDetails">
            <label for="expiryDate" class="form-label">Expiry Date</label>
            <input type="text" class="form-control payInp" id="expiryDate" placeholder="MM/YY" required>
            <small class="text-danger" id="expiryDateErorr" style="display: none;">Please enter a valid expiry Date</small>
          </div>
          <div class="mb-3" id="cvvDetails">
            <label for="cvv" class="form-label">CVV</label>
            <input type="text" class="form-control payInp" id="cvv" placeholder="Enter CVV" required>
            <small class="text-danger" id="cvvErorr" style="display: none;">Please enter a valid CVV</small>
          </div>
          <div class="mb-3" id="nameDetails">
            <label for="name" class="form-label">Cardholder Name</label>
            <input type="text" class="form-control payInp" id="name" placeholder="Enter cardholder name" required  pattern="[A-Za-z]{3,32}">
  
            <input type="hidden" name="student-id" value="<?=$id?>" >
          </div>
          <div class="text-center">
            <button type="submit" class="btnn" name="pay-visa" id="btnVisa">Pay Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
    </div>
<script src="js/payment.js"></script>
</body>

</html>
