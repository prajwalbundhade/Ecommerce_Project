<?php
session_start();
if(isset($_SESSION['id'])){
    $id= $_SESSION['id'];
   
}else{
header("location:login.php");
}
include('dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Ecommerce home page</title>
    <style>
      @media(max-width: 600px){
    #categories  p{
        padding-left: 2 0px !important;
    } 
}

    </style>
</head>

<body>
    
<!-- navbar starts here-->
<?php
include('header.php');
?>
    <!-- end of navbar -->

    <!-- header banner -->
    <header id = "header" class = "carousel slide" data-bs-ride = "carousel" >
        <div class = " h-100 d-flex align-items-center carousel-inner">


            <div class = "text-center carousel-item active">
            <img src="img/slider-1.jpg" class="d-block w-100" alt="...">
            
            </div>
        </div>

        <button class = "carousel-control-prev" type = "button" data-bs-target="#header" data-bs-slide = "prev">
            <span class = "carousel-control-prev-icon"></span>
        </button>
        <button class = "carousel-control-next" type = "button" data-bs-target="#header" data-bs-slide = "next">
            <span class = "carousel-control-next-icon"></span>
        </button>
    </header>

    <!--header banner ends here -->

  <!-- categories  -->
  <section id = "collection" class = "py-5">
  <div class = "container">
            <div class = "title text-center mb-5">
                <h2 class = "position-relative d-inline-block">Categories</h2>
            </div>

         
            <?php

            $select_query1 = "Select * from `category`";
            $result_query1 = mysqli_query($conn, $select_query1);

            
            
            ?>

                <div class = "collection-list  g-3 g-xl-4 row row-cols-lg-6 row-cols-sm-3 row-cols-3">
                <?php
                      $i = 1;
                      while($row4 = mysqli_fetch_assoc($result_query1)){
                        ?>
                    <div id="categories" class = "col">
                        <div class = "collection-img position-relative">
                        <img src = "Admin/uploads/<?php echo $row4 ['image']; ?>" class = "rounded-circle  w-75">
                        <div class = "text">
                        <p class = "text py-2 fs-4 fw-medium" style="padding-left: 40px"><?php echo $row4['category']; ?></p>
                        </div>
                        </div>
                    </div>
                    <?php
                      }
                    ?>
                </div>
        </div>
                    
  </section>
  <!-- categories end  -->




   <!-- Products -->
  <section id = "products" class = "py-2">
      

   <div class="container my-5">
    <header class="mb-4">
      <h3>New products</h3>
    </header>

    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <img src="img/card.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">GoPro HERO6 4K Action Camera - Black</h5>
            <p class="card-text">$790.50</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
              <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <img src="img/card.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Canon camera 20x zoom, Black color EOS 2000</h5>
            <p class="card-text">$320.00</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
              <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <img src="img/card.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Xiaomi Redmi 8 Original Global Version 4GB</h5>
            <p class="card-text">$120.00</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
              <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <img src="img/card.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Apple iPhone 12 Pro 6.1" RAM 6GB 512GB Unlocked</h5>
            <p class="card-text">$120.00</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
              <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <img src="img/card.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Apple Watch Series 1 Sport Case 38mm Black</h5>
            <p class="card-text">$790.50</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
              <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <img src="img/card.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">T-shirts with multiple colors, for men and lady</h5>
            <p class="card-text">$120.00</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
              <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <img src="img/card.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Gaming Headset 32db Blackbuilt in mic</h5>
            <p class="card-text">$99.50</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
              <a href="#!" class="btn btn-light border icon-hover px-2 pt-2"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 d-flex">
        <div class="card w-100 my-2 shadow-2-strong">
          <img src="img/card.webp" class="card-img-top" style="aspect-ratio: 1 / 1" />
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">T-shirts with multiple colors, for men and lady</h5>
            <p class="card-text">$120.00</p>
            <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
              <a href="#!" class="btn btn-primary shadow-0 me-1">Add to cart</a>
              <a href="#!" class="btn btn-light border px-2 pt-2 icon-hover"><i class="fas fa-heart fa-lg text-secondary px-1"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </section>
<!-- Products -->

<!-- brands -->
<section id = "collection" class = "py-5">
        <div class = "container">
            <div class = "title text-center mb-5">
                <h2 class = "position-relative d-inline-block">Brands</h2>
            </div>

         
            <?php

            $select_query = "Select * from `brands`";
            $result_query = mysqli_query($conn, $select_query);

            
            
            ?>

                <div class = "collection-list g-3 g-xl-4 row row-cols-lg-6 row-cols-sm-3 row-cols-3">
                <?php
                      $i = 1;
                      while($row3 = mysqli_fetch_assoc($result_query)){
                        ?>
                    <div class = "col">
                        <div class = "collection-img position-relative">
                        <img src = "Admin/uploads/<?php echo $row3 ['image']; ?>" class = "rounded-circle  w-75">
                        <div class = "text-center">
                        <p class = "text py-2"><?php echo $row3['brand_name']; ?></p>
                        </div>
                        </div>
                    </div>
                    <?php
                      }
                    ?>
                </div>
        </div>
  </section>
<!-- brAnds end -->
   <!-- footer -->
<?php
   include('footer.php');
   ?>
 
    <!-- end of footer -->
    <script src="https://kit.fontawesome.com/f2786c0b81.js" crossorigin="anonymous"></script>
</body>
</html>    