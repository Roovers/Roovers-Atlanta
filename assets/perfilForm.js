 const btnSubmit = document.querySelector('.btnSubmit');
const email = document.getElementById("email"); 
const viejaPassword = document.getElementById("oldPassword"); 
const nuevaPassword = document.getElementById("newPassword");

btnSubmit.disabled = true; 
email.addEventListener('blur', () => {
  validarInput(email);
  habilitarBtn();
}, true);
nuevaPassword.addEventListener('blur', () => {
  validarInput(nuevaPassword);
  habilitarBtn();

},true)

function validarEmail(email){
  return email.toLowerCase().match(
    /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
  );
}


function validarInput(input){
  if(input.value == "" || input.value.length < 0 ){
    input.style.borderColor = "red";
}else {
input.style.borderColor = "white";
}
}
function validarPassword(password){
  return password.length > 3;
}

function habilitarBtn(){
  if( validarEmail(email.value) && validarPassword(nuevaPassword.value)){
    btnSubmit.disabled = false;
  } else {
    btnSubmit.disabled = true;
  }
}













// const btnSubmit = document.querySelector('.btnSubmit');
// console.log(inputs)
// // btnSubmit.disabled = true;




// function validarInputs(){
    
// }
// btnSubmit.addEventListener('click', () => {
//     for (let input of inputs){
//         if(input.value.length > 0){
//             btnSubmit.disabled = false;
//         } else {
//             alert("llenar campos");
//             break;
//         }
//     }
// });
