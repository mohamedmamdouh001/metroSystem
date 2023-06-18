const creditCard = document.getElementById('creditCard');
const fawry = document.getElementById('fawry');
const cardDetails = document.getElementById('cardDetails');
const expiryDetails = document.getElementById('expiryDetails');
const cvvDetails = document.getElementById('cvvDetails');
const nameDetails = document.getElementById('nameDetails');
const payImg = document.getElementById('payment-img');
const farwyCode = document.getElementById('farwy-code');
const btnFawry = document.getElementById('btnFawry');
const btnVisa = document.getElementById('btnVisa');

payImg.style.display = 'none';
farwyCode.style.display = 'none';
btnFawry.style.display='none';

creditCard.addEventListener('click', () => {
  creditCard.classList.add('selected');
  fawry.classList.remove('selected');
  cardDetails.style.display = 'block';
  expiryDetails.style.display = 'block';
  cvvDetails.style.display = 'block';
  nameDetails.style.display = 'block';
  btnVisa.style.display = 'block';
  payImg.style.display = 'none';
 farwyCode.style.display = 'none';
 btnFawry.style.display = 'none';

 
});
fawry.addEventListener('click', () => {
  fawry.classList.add('selected');
  creditCard.classList.remove('selected');
  cardDetails.style.display = 'none';
  expiryDetails.style.display = 'none';
  cvvDetails.style.display = 'none';
  nameDetails.style.display = 'none';
  btnVisa.style.display = 'none';
  payImg.style.display = 'block';
 farwyCode.style.display = 'block';
 btnFawry.style.display = 'block';
});


function validatePayment() {
  const cardNumber = document.getElementById('cardNumber');
  const expiryDate = document.getElementById('expiryDate');
  const cvv = document.getElementById('cvv');
  const name = document.getElementById('name');

if (!/^(\d{4}[- ]?){3}\d{4}$/.test(cardNumber.value)) {
 document.getElementById("cardNumErorr").style.display="block";
  return false;
}
if (!/^(0[1-9]|1[0-2])\/([0-9]{2})$/.test(expiryDate.value)) {
 document.getElementById("expiryDateErorr").style.display="block";
  return false;
}
if (!/^[0-9]{3,4}$/.test(cvv.value)) {
 document.getElementById("cvvErorr").style.display="block";
  return false;
}

  // If all validation is done
  return true;
}


