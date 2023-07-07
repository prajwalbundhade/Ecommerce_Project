<?php

@include '../dbcon.php';

session_start();

if(isset($_POST['submit'])){
    
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);

   $select = " SELECT * FROM login_data WHERE name = '$name' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist';
   }else{
      if($pass != $cpass){
         $error[] = 'Password not mathched!';
      }else{
         $insert = "INSERT INTO login_data(name, password) VALUES('$name','$pass')";
         mysqli_query($conn, $insert);
         header('location:login.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/form-style.css">
</head>
<body>
    
<div class="form-container">

   <form action="" method="post">
      <h3 class="title">Register for our Dashboard</h3>
      <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
      <input type="text" name="name" placeholder="enter your username" class="box" required>
      <input type="password" name="password" placeholder="enter your password" class="box" required>
      <input type="password" name="cpassword" placeholder="confirm your password" class="box" required>
      <input type="submit" value="register now" class="form-btn" name="submit">
      <p>Already have an account? <a href="#">Contact Team</a></p>
   </form>

</div>

</body>
</html>