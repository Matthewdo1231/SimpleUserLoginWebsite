const nameInputSignUp = document.querySelector('#name-signUp-js');
const passwordInputSignUp = document.querySelector('#password-signUp-js');
const emailInputSignUp = document.querySelector('#email-signUp-js');
const submitButton = document.querySelector('#submit-js');


let name='';
let password='';
let email= '';

let isEmailTyped = false;


verifyEmail= /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

//check if email input if type 
  emailInputSignUp.addEventListener('keydown',(event)=>{
     if(event.key){
      isEmailTyped = true;
      if(verifyEmail.test(emailInputSignUp.value) && isEmailTyped){
        submitButton.setAttribute('class','submit-login');
        submitButton.removeAttribute('disabled');
        }
       if(verifyEmail.test(emailInputSignUp.value)== false){
        console.log('false')
        submitButton.setAttribute('class','submit-login-disabled');
        submitButton.setAttribute('disabled','true');
       }
      }
     }
  )


