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

    <title>Categories</title>
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
					<h1>Categories</h1>
					
					
				</div>
				
			</div>
            <div class="card mb-4">
                    <h5 class="card-header">Categories Details</h5>
                    <!-- Account -->
                    
                    <hr class="my-0" />
                    <div class="col-md-7">
                    <div class="card mb-4">

                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">New Category Name</label>
                        <input
                          type="text" name="category"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      
                      <div class="card">
                    <h5 class="card-header">Upload Image</h5>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input  name="image" class="form-control" type="file" id="formFile" />
                      </div>
                      <div>
            <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
            </div>
            </form>

            <?php
		if(isset($_POST['submit'])){

            $category = $_POST['category'];
            $filename = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];

            $folder = "./uploads/" . $filename;
        
          
            $query = "INSERT INTO `category`( `category`, `image`) VALUES ('$category','$filename')";
        
         
            mysqli_query($conn, $query);
        
           
            if (move_uploaded_file($tempname, $folder)) {
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

            $sql = "SELECT * FROM `category` order by id ASC ";
            $result = mysqli_query($conn, $sql);
            ?>
			<div class="card mb-4">
                    <h5 class="card-header">Categories List</h5>
                    <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
					              <th>#</th>
                        <th>NAME</th>
                        <th>IMAGE</th>
						            <th>ACTION</th>
                      </tr>
                    </thead>
                    <?php
                      $i = 1;
                      while($rows = mysqli_fetch_assoc($result)){
                        ?>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td> <strong><?php echo $i++  ?></strong></td>
                        <td><?php echo $rows ['category']; ?></td>
                        <td><img src="uploads/<?php echo $rows ['image'];  ?>" height="70px" width="80px" alt=""></td>
						
                     
                        
                       <td>
                          
							
                             
                              <a  href="http://localhost/Ecommerce_website/Admin/deletecategory.php?id=<?php echo $rows ['id']; ?>"> <input type="submit" class="btn btn-danger" value="Delete" ></a>
                              
                              <a  href="http://localhost/Ecommerce_website/Admin/editcategory.php?id=<?php echo $rows ['id']; ?>"><input type="submit" class="btn btn-primary" value="Edit" ></a>
                              
                            
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
    <script src="scipt.js"></script>

    <script src="https://kit.fontawesome.com/f2786c0b81.js" crossorigin="anonymous"></script>
</body>
</html>