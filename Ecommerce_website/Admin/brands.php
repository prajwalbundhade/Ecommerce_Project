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

    <title>Brands</title>
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
					<h1>Brands</h1>
					
					
				</div>
				
			</div>
            <div class="card mb-4">
                    <h5 class="card-header">Brands Details</h5>
                   
                    
                    <hr class="my-0" />
                    <div class="col-md-7">
                    <div class="card mb-4">
                    
                    <div class="card-body">

					<form action="" method="post" enctype="multipart/form-data">

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">New Brand Name</label>
                        <input
                          type="text" name="brand_name"
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


		<?php
		if(isset($_POST['submit']))
			{
        $brand_name = $_POST['brand_name'];
        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];

        $folder = "./uploads/" . $filename;
        
       
    
      
        $query2 = "INSERT INTO `brands`( `brand_name`, `image`) VALUES ('$brand_name','$filename')";
    
     
        mysqli_query($conn, $query2);
    
       
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h4>  Image uploaded successfully!</h4>";
        } else {
            echo "<h4>  Failed to upload image!</h4>";
        }
			}
		?>


          <?php

          $sql2 = "SELECT * FROM `brands` order by id ASC ";
          $result2 = mysqli_query($conn, $sql2);
          ?>
			<div class="card mb-4">
                    <h5 class="card-header">Brands List</h5>

			<div class="card">
               
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
					              <th>#</th>
                        <th>BRAND NAME</th>
                        <th>IMAGE</th>
					            	<th>ACTION</th>
                      </tr>
                    </thead>
                    <?php
                      $i = 1;
                      while($rows = mysqli_fetch_assoc($result2)){
                        ?>
                    <tbody class="table-border-bottom-0">
                      <tr>
                      <td> <strong><?php echo $i++  ?></strong></td>
                        <td><?php echo $rows ['brand_name']; ?></td>
                        <td><img src="uploads/<?php echo $rows ['image']; ?>" height="70px" width="80px" alt=""></td>
                        
                        
                       <td>
                          
							
                             
                       <a  href="http://localhost/Ecommerce_website/Admin/deletecategory.php?id=<?php echo $rows ['id']; ?>"> <input type="submit" class="btn btn-danger" value="Delete" ></a>
                              
                              <!-- <a  href="<?php echo $rows ['id']; ?>"><input type="submit" class="btn btn-primary" value="edit" ></a> -->
                              
                            
                        </td>
                      </tr>
                     
                     
                     
                    </tbody>
                    <?php
                      }
                    ?>
                  </table>
                </div>
            </div>    
                    
                  
            </div>
                  
		
		</main>
    
    <!-- Javascript -->
    <script src="scipt.js"></script>

    <script src="https://kit.fontawesome.com/f2786c0b81.js" crossorigin="anonymous"></script>
</body>
</html>