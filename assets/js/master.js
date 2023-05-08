let myRightHand = document.querySelector(".rightHand");
let myLeftHand = document.querySelector(".leftHand");
let myRightCard = document.querySelector(".rightCard");
let myLeftCard = document.querySelector(".leftCard");
// let myButton = document.getElementById('subscribeButton');
myLeftHand.addEventListener("click", () => {
   myLeftCard.classList.add("hide");
   myRightCard.classList.remove("hide");
});
myRightHand.addEventListener("click", () => {
   myRightCard.classList.add("hide");
   myLeftCard.classList.remove("hide");
});
// myButton.addEventListener('click', () => {
//    window.location.href = "signup-login.php";
// })
































// .moving-card{
//     background-color: #eee;
//     padding: 10px;
//     height: 100%;
//     position: absolute;
//     left: 0;
//     top: 0;
// }
// .right-side{
//     left: 50%;
//     top: 20%;
//     display: flex;
//     justify-content: center;
//     align-content: center;
//     position: absolute;
// }


// @include breakpoints(mobile){
//     .moving-card{
//         background-color: #eee;
//         padding: 10px;
//         height: 100%;
        
//     }
//     .right-side{
//         position: absolute;
//         top: 60%;
//         left: 0;
        
     
//     }
// }
// @include breakpoints(ipad){
//     .moving-card{
//         background-color: #eee;
//         padding: 10px;
//         height: 100%;
        
        
//     }
//     .right-side{
//         position: absolute;
//         top: 10%;
//         left: 0;
        
     
//     }
// }