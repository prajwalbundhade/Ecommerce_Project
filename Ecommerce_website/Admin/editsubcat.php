

<?php

@include '../dbcon.php';

session_start();

if(!isset($_SESSION['name'])){
   header('location:login.php');
}

           $s_id =$_GET['id'];

           $fetch_query = "select * from sub_category where id=$s_id";
           $result = mysqli_query($conn, $fetch_query);
           $data = mysqli_fetch_array($result);

      ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">

    
    <title>Sub Category</title>
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
                    <h5 class="card-header">Sub Categories Details</h5>
                    <!-- Account -->
                    
                    <hr class="my-0" />
                    <div class="col-md-7">
                    <div class="card mb-4">

                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                      
                      
                      <div class="mb-3  ">
                            <label for="get_id" class="form-label">Category</label>
                            <select id="language" class="select2 form-select" name="get_id" value="<?php echo $data['get_id'] ?>" required>
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
                        <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">New Sub Category Name</label>
                        <input
                          type="text" name="sub_cat"
                          class="form-control"
                          value="<?php echo $data['sub_cat'] ?>"
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
                        <img src="uploads/<?php echo $data ['image'];  ?>" height="70px" width="80px" alt="">
                      </div>
                      <div>
            <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
            </div>
            </form>

            <?php
		if(isset($_POST['submit'])){
           
            $sub_cat = $_POST['sub_cat'];
           
            $filename = $_FILES["image"]["name"];
            $tempname = $_FILES["image"]["tmp_name"];

            $folder = "./uploads/" . $filename;
        
           
            move_uploaded_file($tempname, $folder);
            
            $update_query = "UPDATE `sub_category` SET  `sub_cat`='$sub_cat',`image`='$filename' WHERE id=$s_id";
            $edit = mysqli_query($conn, $update_query);
           if($edit){
            echo ("<script>location.href = 'sub_categories.php'; </script>");
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

            $sub_cat_sql = "SELECT category.category as cattitle, sub_category. * from category JOIN sub_category on sub_category.get_id = category.id";
            $sub_cat_result = mysqli_query($conn, $sub_cat_sql);
           
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
                        <th>IMAGE</th>
						            <th>ACTION</th>
                      </tr>
                    </thead>
                    <?php
                    $i = 1;
             while($sub_cat_fetch = mysqli_fetch_assoc($sub_cat_result)){
                    ?>
                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td> <strong><?php echo $i++  ?></strong></td> 
                        <td><?php echo $sub_cat_fetch ['cattitle']; ?></td>
                        <td><?php echo $sub_cat_fetch ['sub_cat']; ?></td>
                        

                        <td><img src="uploads/<?php echo $sub_cat_fetch ['image'];  ?>" height="70px" width="80px" alt=""></td>
						
                     
                        
                       <td>
                          
							
                             
                       <a  href="http://localhost/Ecommerce_website/Admin/delete_sub_cat.php?id=<?php echo $sub_cat_fetch ['id']; ?>"> <input type="submit" class="btn btn-danger" value="Delete" ></a>
                              
                       <a  href="http://localhost/Ecommerce_website/Admin/editsubcat.php?id=<?php echo $rows ['id']; ?>"><input type="submit" class="btn btn-primary" value="Edit" ></a>
                              
                            
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