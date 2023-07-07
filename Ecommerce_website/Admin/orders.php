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
    <link rel="stylesheet" href="css/style.css">

   
    <title>Orders</title>
</head>
<body>
    <!-- Left Sidebar start -->
	<?php
		include "header.php";
	?>
		<!-- navbar end  -->

		<main>
			<div class="head-title">
				<div class="left">
					<h1>Orders</h1>
					
					
				</div>
				
			</div>
            <div class="card">
                <h5 class="card-header">Order Detail</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Items</th>
                        <th>Customer Name</th>
                        
                        
                        <th>Payment</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td>  <strong>#Order-11414</strong></td>
                        <td>Smartwatch</td>
                        <td>John Cena</td>
                        <td>paytm</td>
                        <td>Active</td>
                        
                        
                       <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class=""></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href=""
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a
                              >
                              <a class="dropdown-item" href=""
                                ><i class="bx bx-trash me-1"></i> Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                     
                     
                    </tbody>
                  </table>
                </div>
            </div>
                  
		
		</main>
    
    <!-- Javascript -->
    <script src="scipt.js"></script>

    <script src="https://kit.fontawesome.com/f2786c0b81.js" crossorigin="anonymous"></script>
</body>
</html>