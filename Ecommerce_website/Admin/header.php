<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom Css -->
    <style>
		a{
			text-decoration: none !important;
		}
	</style>
	<link rel="stylesheet" href="style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
 
<section id="sidebar">
		<a href="index.php" class="brand">
			<i class="fa fa-solid fa-house"></i>
			<span class="text">Dashboard</span>
		</a>
		<ul class="side-menu top Dashboard">
			<li class="active">
				<a href="index.php">
					<i class="fa fa-solid fa-house"></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="">
				<a href="orders.php">
					<i class="fa fa-solid fa-cart-shopping"></i>
					<span class="text">Orders</span>
					
				</a>
				
			</li>
			<li>
				<a href="brands.php">
					<i class="fa fa-brands fa-amazon"></i>
					<span class="text">Brands</span>
				</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<i class="fa fa-solid fa-bars"></i>
					<span class="">Categories</span>
				</a>
				<ul class="dropdown-menu">
                            <li>
                              <a href="categories.php" class="dropdown-item "
                                >Categories</a
                              >
                            </li>
                            <li>
                              <a href="sub_categories.php" class="dropdown-item "
                                >Sub Categories</a
                              >
                            </li>
                            <li>
                              <a href="sub_sub_categories.php" class="dropdown-item "
                                >Sub Sub Categories</a
                              >
                            </li>
                            
                </ul>	
			</li>
			<li>
				<a href="#">
					<i class="fa fa-solid fa-dumpster-fire"></i>
					<span class="text">Attribute</span>
				</a>
			</li>
            <li>
				<a href="products.php">
					<i class="fa fa-solid fa-dumpster-fire"></i>
					<span class="text">InHouse Product</span>
				</a>
			</li>
            <li>
				<a href="product-review.php">
					<i class="fa fa-solid fa-dumpster-fire"></i>
					<span class="text">Product Reviews</span>
				</a>
			</li>
			<li>
				<a href="color-master.php">
					<i class="fa fa-solid fa-dumpster-fire"></i>
					<span class="text">Color Master</span>
				</a>
			</li>
			<li>
				<a href="size.php">
					<i class="fa fa-solid fa-dumpster-fire"></i>
					<span class="text">Size</span>
				</a>
			</li>
			<li>
				<a href="banner.php">
					<i class="fa fa-solid fa-dumpster-fire"></i>
					<span class="text">Banner</span>
				</a>
			</li>
			<li>
				<a href="testimonials.php">
					<i class="fa fa-solid fa-dumpster-fire"></i>
					<span class="text">Testimonials</span>
				</a>
			</li>
			<li>
				<a href="users.php">
					<i class="fa fa-solid fa-dumpster-fire"></i>
					<span class="text">Users</span>
				</a>
			</li>
			<li>
				<a href="coupon.php">
					<i class="fa fa-solid fa-dumpster-fire"></i>
					<span class="text">Coupon</span>
				</a>
			</li>
			<li>
				<a href="contact.php">
					<i class="fa fa-solid fa-dumpster-fire"></i>
					<span class="text">Contact</span>
				</a>
			</li>
		</ul>

		
	</section>

	<!-- Left Sidebar End -->

    <!--  -->
	<section id="content">
		<!-- navbar end -->
		<nav>
			<i class="fa fa-menu fa-solid fa-arrow-left "></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class="fa fa-solid fa-magnifying-glass"></i></button>
				</div>
			</form>
			
			
			<a href="#" class="notification">
				<i class="fa-solid fa-language"></i>
				<span class="num"></span>
			</a>
			<a href="#" class="notification">
				<i class="fa-regular fa-envelope"></i>
				<span class="num"></span>
			</a>
			<a href="#" class="notification">
				<i class="fa-solid fa-cart-shopping"></i>
				<span class="num"></span>
			</a>
			<!-- profile -->
			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				<i class="fa-solid fa-user"></i>
				
			</a>
			<ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="" alt class="" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block">Prajwal Bundhade</span>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="profile.php">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-cog me-2"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="logout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                </ul>
			
		</nav>
		<!-- navbar end  -->
	

 <!-- Javascript -->
 <script src="script.js"></script>

<script src="https://kit.fontawesome.com/f2786c0b81.js" crossorigin="anonymous"></script>
</body>
</html>        