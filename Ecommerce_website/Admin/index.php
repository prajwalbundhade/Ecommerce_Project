<?php

@include '../dbcon.php';

session_start();

if(!isset($_SESSION['name'])){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">

    <style>
		a{
			text-decoration: none !important;
		}
	</style>
    <title>Admin Panel Dashboard</title>
</head>
<body>
 <!-- Left Sidebar start -->
 <?php
		include "header.php";
	?>
	<!-- to navbar -->
	
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					
					
				</div>
				
			</div>
		<div class="item-container">
			<ul class="box-info">
				<li>
					<i class="fa-brands fa fa-first-order-alt"></i>
					<span class="text">
						<h3>0</h3>
						<p>Pending Order</p>
					</span>
				</li>
				<li>
					<i class="fa-solid fa fa-circle-check"></i>
					<span class="text">
						<h3>28</h3>
						<p>Confirm Orders</p>
					</span>
				</li>
				<li>
					<i class="fa-solid fa fa-arrow-up-right-dots"></i>
					<span class="text">
						<h3>43</h3>
						<p>Processing</p>
					</span>
				</li>
				<li>
					<i class="fa fa-solid fa-truck"></i>
					<span class="text">
						<h3>12</h3>
						<p>Out for Delivery</p>
					</span>
				</li>
				
			</ul>
		

			
		</div>
		<!-- item card 2 -->
		<div class="item-container2">
			<ul class="box-info2">
				<li>
					<i class="fa-brands fa fa-first-order-alt"></i>
					<span class="text">
						<h3>0</h3>
						<p>Delivered</p>
					</span>
				</li>
				<li>
					<i class="fa-solid fa fa-circle-check"></i>
					<span class="text">
						<h3>28</h3>
						<p>Cancelled</p>
					</span>
				</li>
				<li>
					<i class="fa-solid fa fa-arrow-up-right-dots"></i>
					<span class="text">
						<h3>43</h3>
						<p>Return</p>
					</span>
				</li>
				<li>
					<i class="fa fa-solid fa-truck"></i>
					<span class="text">
						<h3>12</h3>
						<p>Failed</p>
					</span>
				</li>
				
			</ul>
		

			
		</div>
		
		</main>
    
    <!-- Javascript -->
    <script src="script.js"></script>

    <script src="https://kit.fontawesome.com/f2786c0b81.js" crossorigin="anonymous"></script>
</body>
</html>