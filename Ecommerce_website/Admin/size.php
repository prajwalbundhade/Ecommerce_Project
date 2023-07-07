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
  
    <title>Size</title>
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
					<h1>Size</h1>
					
					
				</div>
				
			</div>
            <div class="card mb-4">
                    <h5 class="card-header">Size Details</h5>
                   
                    
                    <hr class="my-0" />
                    <div class="col-md-7">
                    <div class="card mb-4">
                    
                    <div class="card-body">

					<form action="" method="post" enctype="multipart/form-data">


                      </div>
                      <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Enter Size</label>
                        <input
                          type="text" name="size"
                          class="form-control"
                          id=""
                          placeholder=""
                        />
                      </div>
                      
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
      
        $size = $_POST['size'];
        
        
        
       
    
      
        $query3 = "INSERT INTO `size`( `size`) VALUES ('$size')";
    
     
        mysqli_query($conn, $query3);
    
       
       
			}
		?>


          <?php

          $sql3 = "SELECT * FROM `size` order by id ASC ";
          $result3 = mysqli_query($conn, $sql3);
          ?>
			<div class="card mb-4">
                    <h5 class="card-header">Size List</h5>

			<div class="card">
               
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
					              <th>#</th>
                        <th>SIZE</th>
					            	<th>ACTION</th>
                      </tr>
                    </thead>
                    <?php
                      $i = 1;
                      while($rows1 = mysqli_fetch_assoc($result3)){
                        ?>
                    <tbody class="table-border-bottom-0">
                      <tr>
                      <td> <strong><?php echo $i++  ?></strong></td>
                        <td><?php echo $rows1 ['size']; ?></td>
                        
                        
                        
                       <td>
                          
							
                             
                       <a  href="http://localhost/Ecommerce_website/Admin/deletesize.php?id=<?php echo $rows1 ['id']; ?>"> <input type="submit" class="btn btn-danger" value="Delete" ></a>
                              
                              <a  href="http://localhost/Ecommerce_website/Admin/editsize.php?id=<?php echo $rows1 ['id']; ?>"><input type="submit" class="btn btn-primary" value="edit" ></a>
                              
                            
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
    <script src="script.js"></script>

    <script src="https://kit.fontawesome.com/f2786c0b81.js" crossorigin="anonymous"></script>
</body>
</html>