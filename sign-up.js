    let signUpElem = document.querySelector('.sign-up-link');
    let loginColumn = document.querySelector('.dashboard-login-side')
    signUpElem.addEventListener('click', tosignUP)

    function tosignUP(){
       loginColumn.innerHTML = `<div class="login-column"> 
    <h3 style="font-family:Arial">Sign-up</h3>
    <input type="text" placeholder="Email" class="email-input-box"/>
    <input type="text" placeholder="Password" class="email-input-box"/>
    <input type="submit" class="submit-login" name="submit-login">
    <a class="sign-up-link">Sign-up</a>
  </div>  `
    }