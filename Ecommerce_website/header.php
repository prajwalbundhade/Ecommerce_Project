<?php

@include 'dbcon.php';


?>

<nav class = "navbar navbar-expand-lg navbar-light bg-white py-2 fixed-top">
        <div class = "container">
            <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "index.php">
                <!-- <img src = "" alt = "site icon"> -->
                <span  class = "logo text-uppercase  ms-2">Zipkart</span>
            </a>

            
    

            <div class = "order-lg-2 nav-btns">
                <button type = "button" class = "btn position-relative" >
                <a href="cart.php"> <i  class = " fa fa-shopping-cart"></i></a>
                    <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
                </button>
                <button type = "button" class = "btn position-relative">
                    <i class = "fa fa-heart"></i>
                    <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
                </button>
                <button type = "button" class = "btn position-relative  dropdown-toggle" data-bs-toggle="dropdown" >
                    <i class = "fa fa-user"></i>
                    <span class = "position-absolute top-0 start-100 translate-middle badge bg-primary"></span>
                </button>
                
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
                
            </div>

            <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
                <span class = "navbar-toggler-icon"></span>
            </button>

            

            <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
                <ul class = "navbar-nav mx-auto text-center">
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "index.php ">Home</a>
                    </li>
                    <li class="nav-item px-2 py-2 dropdown">
                    <a class="nav-link dropdown-toggle text-uppercase text-dark" href="#" id="navbarDropdown" data-bs-toggle="dropdown" >
                          Categories </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="mensproduct.php">Men's</a></li>
                         <li><a class="dropdown-item" href="#">Women's</a></li>
            
                        </ul>
                  </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "">About</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "">Contact</a>
                    </li>

                </ul>
                <form class="d-flex w-50" role="search">
      <input class="form-control  me-3" type="search" placeholder="Search your product" aria-label="Search">
      
    </form>
            </div>
            
        </div>
</nav>