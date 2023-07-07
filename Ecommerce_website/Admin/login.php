<?php

@include '../dbcon.php';

session_start();

if(isset($_POST['submit'])){
    
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $pass = md5($_POST['password']);

   $select = " SELECT * FROM login_data WHERE name = '$name' && password = '$pass'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $_SESSION['name'] = $name;
      header('location:index.php');
   }else{
      $error[] = 'incorrect password or username.';
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
        <h3 class="title">Login to Dashboard</h3>
        <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
        <input type="text" name="name" placeholder="enter your username" class="box" required>
        <input type="password" name="password" placeholder="enter your password" class="box" required>
        <input type="submit" value="login now" class="form-btn" name="submit">
        <p>Don't have an Contact Team</a></p>
    </form>

</div>

</body>
</html>