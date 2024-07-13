    let signUpElem = document.querySelector('.sign-up-link');
    let loginColumn = document.querySelector('.dashboard-login-side')
    signUpElem.addEventListener('click', tosignUP)

    function tosignUP(){
       loginColumn.innerHTML = `<div class="login-column"> 
          <h3 style="font-family:Arial">Create your account</h3>
          <input type="text" placeholder="Name" class="email-input-box" name="sign-up-name"/>
          <input type="text" placeholder="Password" class="email-input-box" name="sign-up-password"/>
          <input type="text" placeholder="Email" class="email-input-box" name="sign-up-email"/>
          <input type="submit" class="submit-login" name="matth">
          <h4 style="font-weight: 300">Already have an account?<a href="dashboard.php"class="sign-up-link">Login</a><h4>
        </div>  `
    }