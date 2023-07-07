<?php

@include 'dbcon.php';

session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="product-page.css">

    <!-- Bootstrap  -->

<!------ Include the above in your HEAD tag ---------->


    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



    <title>Ecommerce About page</title>
	<style>
		.mycard{
			margin-top:85px !important;
		}
	</style>
</head>

<body>
    
<!-- navbar starts here-->
<?php
include('header.php');
?>
<!-- navbar ends here-->

<!-- main -->
<div class="container mb-2 ">
		<div class="mycard ">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="img/white-shirt.jpg" /></div>
						  <div class="tab-pane" id="pic-2"><img src="img/white-shirt.jpg" /></div>
						  <div class="tab-pane" id="pic-3"><img src="img/white-shirt.jpg" /></div>
						  <div class="tab-pane" id="pic-4"><img src="img/white-shirt.jpg" /></div>
						  <div class="tab-pane" id="pic-5"><img src="img/white-shirt.jpg" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="img/white-shirt.jpg" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="img/white-shirt.jpg" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="img/white-shirt.jpg" /></a></li>
						  <li><a data-target="#pic-4" data-toggle="tab"><img src="img/white-shirt.jpg" /></a></li>
						  <li><a data-target="#pic-5" data-toggle="tab"><img src="img/white-shirt.jpg" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">men's white shirt</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">1 reviews</span>
						</div>
						<p class="product-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt fuga delectus nemo ullam voluptate asperiores quae velit possimus, nisi magni debitis repellendus, quidem reprehenderit. Quod magnam beatae temporibus iusto cupiditate.</p>
						<h4 class="price">current price: <span>1180</span></h4>
						<br>
						<h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
						<h5 class="colors">colors:
					
							<span class="color green"></span>
							<span class="color blue"></span>
							<div class="form-outline me-1" style="width: 70px;">
                            <input type="number" value="1" class="form-control" />
							
                        </div>
						<div class="action mt-2">
						
							<button class="add-to-cart btn btn-default" type="button">add to cart</button>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
						</h5>
						
						
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- !-- main -->

   <!-- Products -->
   <section id = "products" class = "py-1">
      

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
   <!-- footer -->
   <?php
   include('footer.php');
   ?>
    <!-- end of footer -->
    <script src="https://kit.fontawesome.com/f2786c0b81.js" crossorigin="anonymous"></script>
    
</body>
</html>    