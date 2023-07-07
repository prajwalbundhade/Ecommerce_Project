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
   
    <title>Coupons</title>
</head>
<body>
    <!-- Left Sidebar start -->

    <?php
		include "header.php";
	?>

	<!-- Left Sidebar End -->
 <!-- main content  -->
 <main>
			<div class="head-title">
				<div class="left">
					<h1>Coupons</h1>
					
					
				</div>
				
			</div>
            <div class="card mb-4">
                
                  
            </div>
			<div class="card mb-4">
                    <a href=""><h5 class="card-header">Add Coupon</h5></a>
            </div>
			<div class="card">
                <h5 class="card-header">Coupon Detail</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
					    <th>#</th>
                        <th>ID</th>
                        <th>COLOR</th>
                        <th>ORDER BY</th>
						<th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td> <strong>1</strong></td>
                        <td>20</td>
                        <td>Green</td>
                        <td>5</td>
						
                        
                        
                       <td>
                          
							<a class="btn btn-success" href=""><i class="bx bx-edit-alt me-1"></i> Active</a >
                             
                              <a class="btn btn-primary" href=""
                                ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                              
                              <a class="btn btn-danger" href=""
                                ><i class="bx bx-trash me-1"></i> Delete</a>
                            
                        </td>
                      </tr>
                     
                     
                     
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