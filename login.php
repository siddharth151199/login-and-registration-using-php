<?php
session_start();
require_once 'connect.php';
require_once 'content.php';
if (isset($_POST) & !empty($_POST)) {
  $email = mysqli_real_escape_string($connect,$_POST['email']);
  $password = ($_POST['password']);
  $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
  $result = mysqli_query($connect,$sql) or die(mysqli_error($connect));
  $count = mysqli_num_rows($result);
  if ($count ==1) {
    header("Location: index.php");
  }else {
    echo "failed to open";
  }
}

 ?>
<div class="login-page">
  <div class="form">
<div class="container">
  <div class="row">
    <form  method="post">
      <div class="form_control">
     <label for="email">Email:</label>
        <input type="email" name="email" value="">
      </div>

        <div class="form_control">
          <label for="password">Password:</label>

        <input type="password" name="password" value="">


      </div>
      <button type="submit" name="button">Log In</button>
      <p class="message">Not registered? <a href="register.php">Create an account</a></p>


    </form>
  </div>
</div>
</div>

</div>
