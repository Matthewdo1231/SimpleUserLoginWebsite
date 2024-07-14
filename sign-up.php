<?php
  session_start(); 
  include 'connection.php';

  if(isset($_POST['signup'])){
  }

?> 

<?php include 'htmlheader.php'?>
<?php include 'dashboard.php'?>

<form class="dashboard-login-side" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST"> 
   <div class="login-column"> 
    <h3 style="font-family:Arial">Create Account</h3>
    <input type="text" placeholder="Name" class="email-input-box" name="signup-name" id="name-signUp-js"/>
    <input type="password" placeholder="Password" class="email-input-box" name="signup-password" id="password-signUp-js"/>
    <input type="text" placeholder="Email" class="email-input-box" name="signup-email" id="email-signUp-js"/>
    <input type="submit" class="submit-login-disabled" name="signup" id="submit-js">
    <p>Do you alread have an account?<a class="sign-up-link" href="dashboardloginpage.php">Login</a></p>
  </div>
  <script src="keychecker.js"></script>  
 </form>

  