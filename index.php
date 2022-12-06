
 <?php
   $con = new mysqli('localhost','root','','shop');

   if($con->connect_error){
	   die('connection faild :' .$con->connect_error);
   } 
   
   ?>
  
<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="images/favicon.png">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
	<!-- Fancybox -->
	<link rel="stylesheet" href="css/jquery.fancybox.min.css">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
	<!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

	
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> 0911404666</li>
								
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								
							
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.html"><img src="images/11.png" alt="logo"></a>
						
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<form method="post" action="search.php">
							<div class="search-bar">					
									<select name="category">
										<option selected="selected" >All Category</option>
										<option value="accessories">accessories</option>
										<option value="suppliments">suppliments</option>
										<option value="cloth">cloths</option>
									</select>
								
								 <div>
								 	<input name="search" placeholder="Search Products Here....." type="search">
									<button class="btnn" type="submit" name="searchBtn"><i class="ti-search"></i></button>
								 </div>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<div class="all-category">
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
								<ul class="main-category">
									<li><a href="#">New Arrivals <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="sub-category">
											<li><a href="acces.php">accessories</a></li>
											
											<li><a href="#">suppliments</a></li>
		
											<li><a href="#">cloths</a></li>
											
										</ul>
									</li>
									
									<li><a href="products.php">kids Event Planing</a></li>
									<li><a href="products.php">Cloth Design</a></li>
									<li><a href="products.php">Books</a></li>
									<li><a href="products.php">Teachers Training</a></li>
									<li><a href="services.php">Service</a></li>
									
								</ul>
							</div>
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
											<li class="active" ><a href="index.php">Home</a></li>
												<li><a href="products.php">Product</a></li>												
													<li><a href="event.php">kids Event Planing</a></li>
													<li><a href="clothdesing.php">Cloth Design</a></li>
                                                    
													<li > <a href="services.php">Service</a></li>
													<li><a href="contact.php">Contact Us</a></li>
													
													<li><a href="about.php">About Us</a></li>
												</ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
	
	<!-- Slider Area -->
	<section class="hero-slider">
		<!-- Single Slider -->
		<div class="single-slider">
		
			<div class="container">
				<div class="row no-gutters">
			

					<div class="col-lg-9 offset-lg-3 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<div class="hero-text">
									
										<h1><span>UP TO 50% OFF </span>Shirt For Kids</h1>
										
										<div class="button">
											<a href="#" class="btn">Shop Now!</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->
	
	<!-- Start Small Banner  -->
	
	<!-- End Small Banner -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Our services</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
					
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
								<a href= "acces.php"><img src="images/fac.jfif" alt="cloth.php"></a>
									
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										
									</div>
									<div class="product-action-2">
									
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">festival planning</a></h3>
								<div class="product-price">
									
								</div>
							</div>
						</div>
										
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
								<a href= "acces.php"><img src="images/birth.jfif" alt="cloth.php"></a>
									
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										
									</div>
									<div class="product-action-2">
									
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">birth day party planning</a></h3>
								<div class="product-price">
									
								</div>
							</div>
						</div>
										
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
								<a href= "acces.php"><img src="images/baby.jfif" alt="cloth.php"></a>
									
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										
									</div>
									<div class="product-action-2">
										
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">baby shower planning</a></h3>
								<div class="product-price">
									
								</div>
							</div>
						</div>
										
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
								<a href= "acces.php"><img src="images/cloth1.jfif" alt="cloth.php"></a>
									
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										
									</div>
									<div class="product-action-2">
										
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">cultural cloth design</a></h3>
								<div class="product-price">
									
								</div>
							</div>
						</div>
										
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
								<a href= "acces.php"><img src="images/book.jfif" alt="cloth.php"></a>
									
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										
									</div>
									<div class="product-action-2">
										
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">children books selling and publishing</a></h3>
								<div class="product-price">
									
								</div>
							</div>
						</div>
										
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
								<a href= "acces.php"><img src="images/camp.jfif" alt="cloth.php"></a>
									
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										
									</div>
									<div class="product-action-2">
										
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">kids summer camp</a></h3>
								<div class="product-price">
									
								</div>
							</div>
						</div>
										
						<!-- End Single Product -->
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
								<a href= "acces.php"><img src="images/teach.jfif" alt="cloth.php"></a>
									
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										
									</div>
									<div class="product-action-2">
										
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">we will give training for kids teachers</a></h3>
								<div class="product-price">
									
								</div>
							</div>
						</div>
										
						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Trending Item</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="nav-main">
								<!-- Tab Nav -->
								
								<!--/ End Tab Nav -->
							</div>
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">
										<?php
											$conn = new mysqli('localhost','root','','shop');


											if($conn->connect_error){
												die('connection faild :' .$conn->connect_error);
											}

											$query1 = " SELECT  * from product where trending = 'yes'  limit 15 ";
											$result1 = mysqli_query($conn, $query1);
											$sth1 = $conn->query($query1);
											$row1=mysqli_fetch_array($sth1);
											
											?>
		
									<?php while($row1 = $result1->fetch_assoc()):  $s1=$row1['image'];?>


											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="product-details.html">
														<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['image']); ?>" /> 
														</a>
														<div class="button-head">
															<div class="product-action">
																<a  href="details.php"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="#">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html"><?php echo $row1['name']; ?></a></h3>
														<div class="product-price">
															<span><?php echo $row1['price']; ?> birr</span>
														</div>
													</div>
												</div>
											</div>
											<?php endwhile; ?>



										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
							
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->
	
	<!-- Start Midium Banner  -->
	
	<!-- End Midium Banner -->
	
	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Hot Item</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<?php
							$query1 = " SELECT  * from product where hot = 'yes'  limit 10 ";
							$result1 = mysqli_query($conn, $query1);
							$sth1 = $conn->query($query1);
							$row1=mysqli_fetch_array($sth1);
						?>
						<?php while($row1 = $result1->fetch_assoc()):  $s1=$row1['image'];?>
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row1['image']); ?>" /> 
									<span class="out-of-stock">Hot</span>
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
										
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="#">Add to cart</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html"><?php echo $row1['name']; ?></a></h3>
								<div class="product-price">
									
									<span><?php echo $row1['price']; ?> birr</span>
								</div>
							</div>
						</div>
						<?php endwhile; ?>						
						<!-- End Single Product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->
	
	<!-- Start Shop Home List  -->
	<section class="shop-home-list section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>On sale</h1>
							</div>
						</div>
					</div>
					<?php
          

   
            if($conn->connect_error){
                die('connection faild :' .$conn->connect_error);
            }

			
            $query = " SELECT  * from product where category = 'onsell'  limit 4 ";
            $result = mysqli_query($conn, $query);
            $sth = $conn->query($query);
            $row=mysqli_fetch_array($sth);
            

            ?>
					<!-- Start Single List  -->
					<?php while($row = $result->fetch_assoc()):  $s=$row['image'];?>
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
								<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h4 class="title"><a href="#"><?php echo $row['name']; ?></a></h4>
									<p class="price with-discount"><?php echo $row['price']; ?></p>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>

					<!-- End Single List  -->
					<!-- Start Single List  -->
					
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Best Seller</h1>
							</div>
						</div>
					</div>
					<?php
						$query = " SELECT  * from product where bestselling = 'yes'  limit 4 ";
						$result = mysqli_query($conn, $query);
						$sth = $conn->query($query);
						$row=mysqli_fetch_array($sth);

					?>
					<?php while($row = $result->fetch_assoc()):  $s=$row['image'];?>
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
								<img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
									<a href="#" class="buy"><i class="fa fa-shopping-bag"></i></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#"><?php echo $row['name']; ?></a></h5>
									<p class="price with-discount"><?php echo $row['price']; ?></p>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					
				</div>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>festival</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
								<a><img src="images/Telegram/fas1.jpg" alt=""></a>
									
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Kids festival</a></h5>
								
								</div>
							</div>
						</div>
					</div>
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
								<a><img src="images/Telegram/fac2.jpg" alt=""></a>
									
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Kids festival</a></h5>
								
								</div>
							</div>
						</div>
					</div>
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
								<a><img src="images/Telegram/fac3.jpg" alt=""></a>
									
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Kids festival</a></h5>
								
								</div>
							</div>
						</div>
					</div>
					<div class="single-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12">
								<div class="list-image overlay">
								<a><img src="images/Telegram/fac4.jpg" alt=""></a>
									
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">Kids festival</a></h5>
								
								</div>
							</div>
						</div>
					</div>
					<!-- End Single List  -->
					<!-- Start Single List  -->
					
					<!-- End Single List  -->
				</div>
			</div>
		</div>
	</section>
	
	
	<!-- Modal -->
	

    
    <!-- Modal end -->
	
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
							<a href="index.php"><img src="images/11.png" alt="logo"></a>
							</div>
							
							<p class="call">Got Question? Call us 24/7<span><a href="tel:0911404666">0911404666</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="contact.php">About Us</a></li>
								
								<li><a href="about.php">Contact Us</a></li>
							
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
						
							<ul>
								
							
								
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									
									<li>Addis abeba</li>
									
									<li>0911404666</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020   -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="images/payments.png" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<!-- Popper JS -->
	<script src="js/popper.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Color JS -->
	<script src="js/colors.js"></script>
	<!-- Slicknav JS -->
	<script src="js/slicknav.min.js"></script>
	<!-- Owl Carousel JS -->
	<script src="js/owl-carousel.js"></script>
	<!-- Magnific Popup JS -->
	<script src="js/magnific-popup.js"></script>
	<!-- Waypoints JS -->
	<script src="js/waypoints.min.js"></script>
	<!-- Countdown JS -->
	<script src="js/finalcountdown.min.js"></script>
	<!-- Nice Select JS -->
	<script src="js/nicesellect.js"></script>
	<!-- Flex Slider JS -->
	<script src="js/flex-slider.js"></script>
	<!-- ScrollUp JS -->
	<script src="js/scrollup.js"></script>
	<!-- Onepage Nav JS -->
	<script src="js/onepage-nav.min.js"></script>
	<!-- Easing JS -->
	<script src="js/easing.js"></script>
	<!-- Active JS -->
	<script src="js/active.js"></script>
</body>
</html>