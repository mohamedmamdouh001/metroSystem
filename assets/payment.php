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
  <div class="containerPayment container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="PaymentTitle">Payment Details</h1>
        <form>
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
            <input type="file" class="form-control payInp" id="payment-img" required>
          </div>
          <button type="submit" class="btn btn-dark inpBtn " id="btnFawry">Pay Now</button>
        </form>
        <form action="" id="formvisa" onSubmit=" return validatePayment()">
        
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
            <input type="text" class="form-control payInp" id="name" placeholder="Enter cardholder name" required>
            <small class="text-danger" id="cardholderError" style="display: none;">Please enter a valid cardholder name</small>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-dark inpBtn " id="btnVisa">Pay Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<script src="js/payment.js"></script>
</body>

</html>
