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

    
    <title>Sub Sub Category</title>
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
					<h1>Sub Sub Categories</h1>
					
					
				</div>
				
			</div>
            <div class="card mb-4">
                    <h5 class="card-header">Sub Sub Categories Details</h5>
                    <!-- Account -->
                    
                    <hr class="my-0" />
                    <div class="col-md-7">
                    <div class="card mb-4">

                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                      
                      
                      <div class="mb-3  ">
                            <label for="get_id" class="form-label">Category</label>
                            <select id="categories_id" class="select2 form-select" name="categories_id" required>
                              <?php
                              $sql2 = "select * from category where category_id='$categories' and sub_cat_id='$sub_id'";
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
                            <label for="get_id" class="form-label">Sub Category</label>
                            <select id="subCatData" class="select2 form-select" name="sub_id" required>
                              <?php
                              $sql3 = "SELECT  * from  sub_category ";
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
                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">New Sub Sub Category Name</label>
                        <input
                          type="text" name="sub_sub_cat"
                          class="form-control"
                          id=""
                          placeholder=""
                          required
                        />
                      </div>
                      <div class="card">
                    <h5 class="card-header">Upload Image</h5>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input  name="image" class="form-control" type="file" id="formFile" required />
                      </div>
                      <div>
            <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
            </div>
            </form>

            <?php
	       	if(isset($_POST['submit'])){
            
            $category_id = $_POST['category_id'];
            $sub_id = $_POST['sub_id'];
            $sub_sub_cat = $_POST['sub_sub_cat'];
           
            $filename = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];

            $folder = "./uploads/" . $filename;
        
          
            $sub_sub_cat_query = "insert into inner_sub_categories(categories_id,sub_id,sub_sub_cat,filename) values('$category_id','$sub_id','$sub_sub_cat','$filename')";
    
            mysqli_query($conn,$sub_sub_cat_query);
           // mysqli_query($conn,$sub_cat_queryy);
           
            if (move_uploaded_file($tempname,$folder)) {
                echo "<h4>  Image uploaded successfully!</h4>";
            } else {
                echo "<h4>  Failed to upload image!</h4>";
            }
			}
		?>
                    </div>
                  </div>
                    </div>
                  </div>
                </div>

                  
            </div>
           

            <?php

            $sub_sub_cat_sql = "SELECT category.category , sub_category.sub_cat,  sub_sub_category.* from category ,sub_category, sub_sub_category where category.id = sub_category.get_id and sub_category.id = sub_sub_category.sscid";

            // $sub_sub_cat_sql = "SELECT category.category, sub_category.sub_cat, sub_sub_category.* from  category JOIN sub_category on category.id = sub_category.id join sub_sub_category on sub_category.id = sub_sub_category.sscid";

            $sub_sub_cat_result = mysqli_query($conn, $sub_sub_cat_sql);
           
             ?>
			<div class="card mb-4">
                    <h5 class="card-header">Sub Categories List</h5>
                    <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
					              <th>#</th>
                        <th>CATEGORY NAME</th>
                        <th>SUB CATEGORY NAME</th>
                        <th>SUB SUB CATEGORY NAME</th>
                        <th>IMAGE</th>
                        <th>Action</th>
						         
                      </tr>
                    </thead>
                    <?php
                    $i = 1;
             while($sub_sub_cat_fetch = mysqli_fetch_assoc($sub_sub_cat_result)){
                    ?>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td> <strong><?php echo $i++  ?></strong></td> 
                        <td><?php echo $sub_sub_cat_fetch ['category']; ?></td>
                        <td><?php echo $sub_sub_cat_fetch ['sub_cat']; ?></td>
                        <td><?php echo $sub_sub_cat_fetch ['sub_sub_cat']; ?></td>
                        <td><img src="uploads/<?php echo $sub_sub_cat_fetch ['image'];  ?>" height="70px" width="80px" alt=""><td>
                        <td>
                        <a  href="?id=<?php echo  ['id']; ?>"> <input type="submit" class="btn btn-danger" value="Delete" ></a>
                              
                              <a  href="?id=<?php echo  ['id']; ?>"><input type="submit" class="btn btn-primary" value="Edit" ></a>
                      
                        </td>
                     
                      </tr>
                     
                     
                     
                    </tbody>
                    <?php
                      }
                    ?>
                  </table>
                </div>
			    
                    
                  
            </div>
                  
		
		</main>
    
    <!-- Javascript -->
    <script src="script.js"></script>

    <script src="https://kit.fontawesome.com/f2786c0b81.js" crossorigin="anonymous"></script>
</body>
</html>