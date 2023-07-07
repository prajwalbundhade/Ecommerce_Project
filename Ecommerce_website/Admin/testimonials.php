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

    <title>Testimonials</title>
</head>
<body>
    <!-- Left Sidebar start -->

    <?php
		include "header.php";
	?>

	<!-- Left Sidebar End -->

  <!-- content -->
  <main>
			<div class="head-title">
				<div class="left">
					<h1>Product</h1>
					
					
				</div>
				
			</div>
            <div class="card mb-4">
                
                  
            </div>
			<div class="card mb-4">
                    <a href=""><h5 class="card-header">Add Product</h5></a>
            </div>
			<div class="card">
                <h5 class="card-header">Product Detail</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
					    <th>#</th>
                        <th>CLIENT NAME</th>
                        <th>COMPANY NAME</th>
                        <th>TESTIMONIAL DESCRIPTION</th>
                        <th>IMAGE</th>
                        
						<th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td> <strong>1</strong></td>
                        <td>Pawam</td>
                        <td>Lara</td>
						<td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora molestias maiores hic amet, laudantium ducimus, reprehenderit molestiae provident ipsum illum impedit ex repellat, in at dolore asperiores. Suscipit, pariatur expedita!</td>
                        <td></td>
                        
                        
                        
                       <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class=""></i>
                            </button>
                            <div class="dropdown-menu">
							<a class="dropdown-item" href=""
                                ><i class="bx bx-edit-alt me-1"></i> Active</a
                              >
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
    <script src="script.js"></script>

    <script src="https://kit.fontawesome.com/f2786c0b81.js" crossorigin="anonymous"></script>
</body>
</html>