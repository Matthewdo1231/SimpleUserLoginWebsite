const nameInputSignUp = document.querySelector('#name-signUp-js');
const passwordInputSignUp = document.querySelector('#password-signUp-js');
const emailInputSignUp = document.querySelector('#email-signUp-js');
const submitButton = document.querySelector('#submit-js');


let name='';
let password='';
let email= '';

let isEmailTyped = false;

//Email verifier **regex
verifyEmail= /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

//Initially disables email input if empty
submitButton.setAttribute('class','submit-login-disabled');
submitButton.setAttribute('disabled','true');  


//check email input if typing 
  emailInputSignUp.addEventListener('keydown',(event)=>{
     if(event.key){
      isEmailTyped = true;
      if(verifyEmail.test(emailInputSignUp.value) && isEmailTyped){
        submitButton.setAttribute('class','submit-login');
        submitButton.removeAttribute('disabled');
        } 
       if(verifyEmail.test(emailInputSignUp.value)== false){
        submitButton.setAttribute('class','submit-login-disabled');
        submitButton.setAttribute('disabled','true');  
       }
      }
     }
  )