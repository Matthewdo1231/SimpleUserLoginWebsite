<?php  
  session_start();

  define('DB_HOST','localhost');
  define('DB_USERNAME','mattyhewdo');
  define('DB_PASSWORD','Mats0963179');
  define('DB_NAME','diversee_database');

  $conn = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

  if($conn -> connect_error){
      die('connection issue '. $conn ->connect_error);
  }
  
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

<form class="dashboard-login-side" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST"> 
   <div class="login-column"> 
    <h3 style="font-family:Arial">Login</h3>
    <input type="text" placeholder="Email" class="email-input-box" name="login-name"/>
    <input type="password" placeholder="Password" class="email-input-box" name="login-password"/>
    <input type="submit" class="submit-login" name="submit-login">
    <a class="sign-up-link">Sign-up</a>
  </div>  
 </form>