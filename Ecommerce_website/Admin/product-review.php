<?php

@include 'connection.php';

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
    
    <title>Product Reviews</title>
</head>
<body>
    <!-- Left Sidebar start -->

    <?php
		include "header.php";
	?>

	<!-- Left Sidebar End -->

<!-- main content -->
<main>
			<div class="head-title">
				<div class="left">
					<h1>Product Review</h1>
					
					
				</div>
				
			</div>
            <div class="card mb-4">
                
                  
            </div>
		
			<div class="card">
                <h5 class="card-header">Product Review</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
					    <th>#</th>
                        <th>ID</th>
                       
                        <th>NAME</th>
                        <th>PRODUCT NAME</th>
                        <th>RATING</th>
                        <th>REVIEW</th>
                        <th>ADDED ON</th>
						            <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td> <strong>1</strong></td>
                        <td>20</td>
                        <td>prajwal bundhade</td>
						<td></td>
                        <td>Asus Rog</td>
                        <td>99000</td>
						<td>79000</td>
						<td>0</td>
                        
                        
                       <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class=""></i>
                            </button>
                            <div class="dropdown-menu">
							<a class="dropdown-item" href=""
                                ><i class="bx bx-edit-alt me-1"></i> Active</a>            
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
    <script src="script.js"></script>

    <script src="https://kit.fontawesome.com/f2786c0b81.js" crossorigin="anonymous"></script>
</body>
</html>