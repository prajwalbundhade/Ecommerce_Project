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
   
    <title>Banner</title>
</head>
<body>
    <!-- Left Sidebar start -->
	<?php
		include "header.php";
	?>
	<!-- to navbar -->

    <!-- main content  -->
    <main>
			
            <div class="card mb-4">
                    <h5 class="card-header">Banner Details</h5>
                    <!-- Account -->
                    
                    <hr class="my-0" />
                    <div class="col-md-7">
                    <div class="card mb-4">
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">New Banner Name</label>
                        <input
                          type="text"
                          name="banner_name"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Heading 1</label>
                        <input
                          type="text"
                          name="heading1"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Heading 2</label>
                        <input
                          type="text"
                          name="heading2"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Button Text</label>
                        <input
                          type="text"
                          name="btntxt"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Button Link</label>
                        <input
                          type="text"
                          name="btnlink"
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
                        <input class="form-control" type="file" name="image" id="formFile" />
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
		
			<div class="card">
                <h5 class="card-header">Banner Detail</h5>
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