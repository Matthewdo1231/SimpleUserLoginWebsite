<?php  
  session_start();

 include 'connection.php';

  $sql = 'SELECT * FROM `accounts`';
  $request = mysqli_query($conn,$sql);
  $userlist = mysqli_fetch_all($request,MYSQLI_ASSOC);

if(isset($_POST['submit-login'])){
    foreach($userlist as $useraccount){
        if($useraccount['name'] == $_POST['login-name']){
            if($useraccount['password'] == $_POST['login-password']){
               echo "succesful login";
            }
        }
         else{
                echo "Incorrect username or password";  
            }
    }
}
?>

<?php include 'htmlheader.php'?>
<?php include 'dashboard.php'?>

<form class="dashboard-login-side" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST"> 
   <div class="login-column"> 
    <h3 style="font-family:Arial">Login</h3>
    <input type="text" placeholder="Email" class="email-input-box" name="login-name"/>
    <input type="password" placeholder="Password" class="email-input-box" name="login-password"/>
    <input type="submit" class="submit-login" name="submit-login">
    <a class="sign-up-link" href="sign-up.php">Sign-up</a>
  </div>  
 </form>

