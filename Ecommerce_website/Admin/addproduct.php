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
    <link rel="stylesheet" href="cstyle.css">

    <title>Add Product</title>
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
					<h1>Add Product</h1>
					
					
				</div>
				
			</div>
            <div class="card mb-4">
                    <h5 class="card-header">Product Details</h5>
                   
                    
                    <hr class="my-0" />
                    <div class="col-md-7">
                    <div class="card mb-4">
                    
                    <div class="card-body">

					<form action="" method="post" enctype="multipart/form-data">
                        <div class="mb-3  ">
                            <label for="get_id" class="form-label">Choose Category</label>
                            <select id="language" class="select2 form-select" name="category" required>
                              <?php
                              $sql2 = "select * from category";
                              $result2 = mysqli_query($conn, $sql2);
                              while ($fetch2 = mysqli_fetch_assoc($result2)){
                                ?>
                                <option value="<?php echo $fetch2 ['id']; ?>"><?php echo $fetch2 ['category']; ?></option>
                                <?php
                              }
                              ?>
                              <option value="">Select Category</option>
                             
                            </select>
                        </div>
                        <div class="mb-3  ">
                            <label for="get_id" class="form-label">Choose Sub Category</label>
                            <select id="language" class="select2 form-select" name="sub_cat" required>
                              <?php
                                    $sql3 = "select * from sub_category";
                                    $result3 = mysqli_query($conn, $sql3);
                                    while ($fetch3 = mysqli_fetch_assoc($result3)){
                                        ?>
                                             <option value="<?php echo $fetch3 ['id']; ?>"><?php echo $fetch3 ['sub_cat']; ?></option>
                                        <?php
                                    }
                              ?>
                              <option value="">Select Sub Category</option>
                             
                            </select>
                        </div>
                        <div class="mb-3  ">
                            <label for="get_id" class="form-label">Choose Sub Sub Category</label>
                            <select id="language" class="select2 form-select" name="sub_sub_cat" required>
                              
                              <option value="">Select Sub Sub Category</option>
                             
                            </select>
                        </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Product Name</label>
                        <input
                          type="text" name="brand_name"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">MRP</label>
                        <input
                          type="text" name="brand_name"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">PRICE</label>
                        <input
                          type="text" name="brand_name"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Quantity</label>
                        <input
                          type="text" name="brand_name"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      <div class="mb-3  ">
                            <label for="get_id" class="form-label">Size</label>
                            <select id="language" class="select2 form-select" name="sub_sub_cat" required>
                            <?php
                              $sql4 = "SELECT * from size";
                              $result4 = mysqli_query($conn, $sql4);
                              while ($fetch4 = mysqli_fetch_assoc($result4)){
                                ?>
                                <option value="<?php echo $fetch4 ['id']; ?>"><?php echo $fetch4 ['size']; ?></option>
                                <?php
                              }
                              ?>
                              <option value="">Select Sub Sub Category</option>
                             
                            </select>
                        </div>
                        <div class="mb-3  ">
                            <label for="get_id" class="form-label">Colour</label>
                            <select id="language" class="select2 form-select" name="sub_sub_cat" required>
                              
                              <option value="">Select Sub Sub Category</option>
                             
                            </select>
                        </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Short Description</label>
                        <input
                          type="text" name="brand_name"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Description</label>
                        <input
                          type="text" name="brand_name"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Sku</label>
                        <input
                          type="text" name="brand_name"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Best Seller</label>
                        <input
                          type="text" name="brand_name"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">status</label>
                        <select id="language" class="select2 form-select" name="sub_sub_cat" required>
                              <option value="">Select Status</option>
                              <option value="">Active</option>
                              <option value="">Inactive</option>
                             
                            </select>
                      </div>
                      
                      <div class="card">
                       <h5 class="card-header">Upload Image</h5>
                       <div class="card-body">
                        <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" name="image" type="file" id="formFile" />
                        </div>
                        
                         <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
						 </div>
				         </form>
                      
                  </div>
                    </div>
                  </div>
                </div>

                  
            </div>


		
            </div>    
                    
                  
            </div>
                  
		
		</main>
    
    <!-- Javascript -->
    <script src="scipt.js"></script>

    <script src="https://kit.fontawesome.com/f2786c0b81.js" crossorigin="anonymous"></script>
</body>
</html>