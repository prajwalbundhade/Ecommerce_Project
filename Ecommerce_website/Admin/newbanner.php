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

    <title>Banner</title>
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
					<h1>Banner</h1>
					
					
				</div>
				
			</div>

    <!-- main content  -->
			
            <div class="card mb-4">
                    <h5 class="card-header">Banner Details</h5>
                    <!-- Account -->
                    
                    <hr class="my-0" />
                    <div class="col-md-7">
                    <div class="card mb-4">
                    <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">

                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">New Banner Name</label>
                        <input
                          type="text" name="banner_name"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      </div>


                      <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">HEADING1</label>
                        <input
                          type="text" name="heading1"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      </div>
                       

                      <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">HEADING2</label>
                        <input
                          type="text" name="heading2"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      </div>
                      
                      <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">BTN TXT</label>
                        <input
                          type="text" name="btn_txt"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      </div>

                      <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label"> BTN LINK</label>
                        <input
                          type="text" name="btn_link"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      </div>                      

                      
                      <div class="card">
                    <h5 class="card-header">Upload Image</h5>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" name="image" type="file" id="formFile" />
                      </div>
                      <div>
            <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button>
            </div>

            </form>
                    </div>
                  </div>
                    </div>
                  </div>
                </div>

                  
            </div>


            <?php
		  if(isset($_POST['submit']))
			{
        $banner_name = $_POST['banner_name'];
        $heading1 = $_POST['heading1'];
        $heading2 = $_POST['heading2'];
        $btn_txt  = $_POST['btn_txt'];
        $btn_link = $_POST['btn_link'];
        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];

        $folder = "./uploads/" . $filename;
        
       
    
      
        $query = "INSERT INTO `banner`( `banner _name`, `heading1`, `heading2`, `btn_txt`, `btn-link`, `image`) VALUES ('$banner_name','$heading1','$heading2','$btn_txt','$btn_link','$filename')";
    
     
        mysqli_query($conn, $query);
    
       
        if (move_uploaded_file($tempname, $folder)) {
            echo "<h4>  Image uploaded successfully!</h4>";
        } else {
            echo "<h4>  Failed to upload image!</h4>";
        }
			}
		 ?>


        <?php

$sql = "SELECT * FROM `banner` order by id ASC ";
$run = mysqli_query($conn, $sql);
        ?>
           
	
                  
		
           <div class="card mb-4">
                    <h5 class="card-header">Banner list</h5>
		
			<div class="card">
             
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
					
                        <th>#</th>
                        <th>HEADING1</th>
                        <th>HEADING2</th>
                        <th>BTN TXT</th>
                        <th>BTN LINK</th>
                        <th>IMAGE</th>
						
					             	<th>ACTION</th>
                      </tr>
                    </thead>


                    <?php
                      $i = 1;
                      while($rows = mysqli_fetch_assoc($run)){
                        ?>
                      <tbody class="table-border-bottom-0">
                      <tr>

                      <td> <strong><?php echo $i++  ?></strong></td>
                        <!-- <td><?php echo $rows ['banner_name']; ?></td> -->
                        <td><?php echo $rows ['heading1']; ?></td>
                        <td><?php echo $rows ['heading2']; ?></td>
                        <td><?php echo $rows ['btn_txt']; ?></td>
                        <td><?php echo $rows ['btn-link']; ?></td>

                        <td><img src="uploads/<?php echo $rows ['image'];  ?>" height="70px" width="80px" alt=""></td>
						             <td>
                        

                        <a  href="http://localhost/Ecommerce_website/Admin/deletebanner.php?id=<?php echo $rows ['id']; ?>"> <input type="submit" class="btn btn-danger" value="Delete" ></a>
                        <a  href="http://localhost/Ecommerce_website/Admin/updatebanner.php?id=<?php echo $rows ['id']; ?>"> <input type="submit" class="btn btn-primary" value="Edit" ></a>


     
                              
                     <?php
                      }
                      ?>

                        <!-- <td> <strong>1</strong></td>
                        <td></td>
                        <td></td> -->
						<!-- <td></td>
                        <td></td>
                        <td></td>
						 -->
                        
                        
            <td>
                          
                                         
                                          <!-- <a class="btn btn-primary" href=""
                                            ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                           -->
                                          <!-- <a class="btn btn-danger" href=""
                                            ><i class="bx bx-trash me-1"></i> Delete</a>
                                         -->
                                    </td>
                      </tr>
                      
                     
                     
                    </tbody>
                  </table>
                </div>
            </div>
                  
		
		</main>
    <!-- Javascript -->
   
</body>
</html>