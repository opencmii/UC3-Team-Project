<?php
if(isset($_POST['login']) && !empty($_POST['login'])){
  $email    = $_POST['email'];
  $password = $_POST['psw'];

if(!empty($email) or !empty($password)){
       if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error="Invalid format";
       }else{
              if($getUser->login($email, $password) === false){
                $error="The email or password is incorrect";
              }
       }
  }else{
    $error="Please enter the credentials"; 
  }
}
?>

<div class="login-div">
<form method="post"> 
  <ul>
    <li>
      <input type="text" name="email" placeholder="Please enter your Email here"/>
    </li>
    <li>
      <input type="password" name="psw" placeholder="password"/><input type="submit" name="login" value="Log in"/>
    </li>
  </ul>
   <?php
    if(isset($error)){
      echo '<div class="span-fp-error">'.$error.'</div>';
    } 
    ?>
  </form>
</div>