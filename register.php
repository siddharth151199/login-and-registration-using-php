<?php require_once 'content.php';
require_once 'connect.php';
if (isset($_POST) & !empty($_POST)) {
  // header('Location: index.php');
  if( $_POST['name']=="" || $_POST['email']=="" || $_POST['password']=="")
  { echo "fill the details";
  }else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $name;
    echo $email;
    echo $password;


    // $email = mysqli_real_escape_string($connect,$_POST['email']);
    // $password = mysqli_real_escape_string($connect,$_POST['password']);
    $sql = "INSERT INTO admin (name , email, password) VALUES ('$name','$email','$password')";
    $result = mysqli_query($connect, $sql);
    if ($result == TRUE) {
      header("Location: login.php");
      // code...
    }

  }


}


 ?>


 <div class="login-page">
   <div class="form">

 <div class="container">
   <!-- <div class="row"> -->
       <form  method="post">
         <div class="form-group">
         <label for="name">NAME</label><input type="text" class="form-control" name="name" value="">
         </div>
         <div class="form-group">
         <label for="Email">Email</label><input type="email" class="form-control" name="email" value="">
       </div>
         <div class="form-group">
         <label for="address">Password</label><input type="password" class="form-control" name="password" value="">
       </div>
         <button type="submit" class="btn btn-primary" name="submit">Register</button>

       </form>




   <!-- </div> -->
     </div>
   </div>
 </div>
