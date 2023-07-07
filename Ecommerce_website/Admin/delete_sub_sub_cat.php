<?php
@include '../dbcon.php';

session_start();

if(!isset($_SESSION['name'])){
   header('location:login.php');
}

           $s_id =$_GET['id'];
           $del_query = "DELETE FROM `sub_sub_category` WHERE id='$s_id'";

           $del_reslut = mysqli_query($conn, $del_query);

            header("location:sub_sub_categories.php");
      ?>



                       