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
const formFawry = document.getElementById('formFawry');
const formvisa = document.getElementById('formvisa');



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
