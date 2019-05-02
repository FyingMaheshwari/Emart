<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Product Detail</title>
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css2/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css2/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!--Shoping cart-->
      <link rel="stylesheet" href="css2/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <link rel="stylesheet" type="text/css" href="css2/jquery-ui1.css">
      <link href="css2/easy-responsive-tabs.css" rel='stylesheet' type='text/css' />
      <link rel="stylesheet" href="css2/flexslider.css" type="text/css" media="screen" />
      <!--stylesheets-->
      <link href="css2/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>
   <body>
      <!--headder-->
      <div class="header-outs" id="home">
      <div class="header-bar">
         <div class="info-top-grid">
            <div class="info-contact-agile">
            <ul>
                     <li>
                        <span class="fas fa-phone-volume"></span>
                        <p>+(91)7060979363</p>
                     </li>
                     <li>
                        <span class="fas fa-envelope"></span>
                        <p><a href="mailto:info@example.com">emart.admin@gmail.com</a></p>
                     </li>
                     <li>
                     </li>
                  </ul>
            </div>
         </div>
            <div class="container-fluid">
               <div class="hedder-up row">
                  <div class="col-lg-3 col-md-3 logo-head">
                     <h1><a class="navbar-brand" href="home.php">E-mart</a></h1>
                  </div>
                  <div class="col-lg-5 col-md-6 search-right">
                     <form class="form-inline my-lg-0" action="free_search.php" method="post">
                        <input class="form-control mr-sm-2" type="search" name = "srch" placeholder="Search" style="color: black;">
                        <button class="btn" type="submit">Search</button>
                     </form>
                  </div>
                  <div class="col-lg-4 col-md-3 right-side-cart">
                     <div class="cart-icons">
                         <ul>
                         <li>
                           <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
                        </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item active">
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Beauty Items
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link" href="free_product.php?name=Face_Cream">Fairness Cream</a>
                           <a class="nav-link " href="free_product.php?name=Perfumes">Deodrant/Perfume</a>
                           <a class="nav-link " href="free_product.php?name=Facewash/Soap">Facewash/Soap</a>
                           <a class="nav-link " href="free_product.php?name=Kajal/Mascara">Kajal/Mascara</a>
                           <a class="nav-link " href="free_product.php?name=Face_Powder">Face Powder</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Snacks
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a href="free_product.php?name=Namkeen" class="nav-link">Snacks/Namkeens</a>
                           <a href="free_product.php?name=Biscuits/Rusks" class="nav-link">Biscuits/Rusks</a>
                           <a href="free_product.php?name=Cakes/Pancakes" class="nav-link">Cakes/Pancakes</a>
                           <a href="free_product.php?name=Dry_Fruits" class="nav-link">Roasted Dryfruits</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Beverages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link " href="free_product.php?name=Cold_Drink">Cold Drinks</a>
                           <a class="nav-link " href="free_product.php?name=Juices">Real & Other Juices </a>
                            <a class="nav-link " href="free_product.php?name=Milk_Shakes">Milk shakes </a>
                        </div>
                     </li>
                     
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Household Items
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link" href="free_product.php?name=Washing-Powder">Washing-Powder</a>
                           <a class="nav-link " href="free_product.php?name=Washing-Soaps">Washing-Soaps</a>
                           <a class="nav-link " href="free_product.php?name=Bathing-Soaps">Bathing-Soaps</a>
                           <a class="nav-link " href="free_product.php?name=Handwash-Gel">Handwash-Gel</a>
                            <a class="nav-link " href="free_product.php?name=Toilet-Cleaner">Toilet-Cleaner</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dal/Masala
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a href="free_product.php?name=Dal(Unpacked)" class="nav-link">Dal(Unpacked)</a>
                           <a href="free_product.php?name=Dal(Packed)" class="nav-link">Dal(Packed)</a>
                           <a href="free_product.php?name=Masala" class="nav-link">Masala</a>
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>
      </div>
	  </div>
      <!--//headder-->
      <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <?php
      $did = $_GET['did'];
      include('connect.php');
      $sql = "select * from products where did=$did;";
      $res = mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($res))
      {
         $dname = $row['dname'];  
         $price = $row['price'];
         $oprice = $row['oprice'];
         $prod = $row['cat'];
         $img = $row['img'];
         $img2 = $row['img2'];
         $desp = $row['desp'];
      }
      ?>
      <!--/shop-->
      <section class="banner-bottom py-lg-5 py-3">
         <div class="container">
            <div class="inner-sec-shop pt-lg-4 pt-3">
               <div class="row">
                  <div class="col-lg-4 single-right-left ">
                     <div class="grid images_3_of_2">
                        <div class="flexslider1">
                           <ul class="slides">
                              <li data-thumb="<?php echo $img; ?>">
                                 <div class="thumb-image"> <img src="<?php echo $img; ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                              </li>
                              <li data-thumb="<?php echo $img2; ?>">
                                 <div class="thumb-image"> <img src="<?php echo $img2; ?>" data-imagezoom="true" class="img-fluid" alt=" "> </div>
                              </li>
                           </ul>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                     <h3><?php echo $dname; ?></h3>
                     <p><span class="item_price"><?php echo 'Rs. '.$oprice; ?></span>
                        <del><?php echo 'Rs. '.$price; ?></del>
                     </p>
                     <div class="rating1">
                        <ul class="stars">
                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                     <div class="description">
                        <h5>Check delivery, payment options and charges at your location</h5>
                        <form action="#" method="post">
                           <input class="form-control" type="text" name="Email" placeholder="Please enter..." required="">
                           <input type="submit" value="Check">
                        </form>
                     </div>
                     
                     <div class="occasion-cart">
                     <div class="toys single-item singlepage">
                     <?php
                           echo '<form method="post" action="#">';
                           echo '<input type="hidden" name="img" value="'.$img.'">';
                           echo '<input type="hidden" name="cat" value="'.$prod.'">';
                           echo '<input type="hidden" name="item" value="'.$dname.'">';
                           echo '<input type="hidden" name="amount" value="'.$price.'">';
                           echo '<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#exampleModal" class="toys-cart ptoys-cart add">
                              Add to Cart
                              </button>
                           </form>';
                     ?>
                     </div>
                     </div>

                     <ul class="footer-social text-left mt-lg-4 mt-3">
                        <li>Share On : </li>
                        <li class="mx-1">
                           <a href="#">
                           <span class="fab fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="">
                           <a href="#">
                           <span class="fab fa-twitter"></span>
                           </a>
                        </li>
                        <li class="mx-1">
                           <a href="#">
                           <span class="fab fa-google-plus-g"></span>
                           </a>
                        </li>
                        <li class="">
                           <a href="#">
                           <span class="fab fa-linkedin-in"></span>
                           </a>
                        </li>
                        <li class="mx-1">
                           <a href="#">
                           <span class="fas fa-rss"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="clearfix"> </div>
                  <!--/tabs-->
                  <div class="responsive_tabs">
                     <div id="horizontalTab">
                        <ul class="resp-tabs-list">
                           <li>Description</li>
                        </ul>
                        <div class="resp-tabs-container">
                           <!--/tab_one-->
                           <div class="tab1">
                              <div class="single_page">
                                 <h6><?php echo $dname; ?></h6>
                                 <p><?php echo $desp; ?></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--//tabs-->
               </div>
            </div>
         </div>
      </section>
      <!--subscribe-address-->
      <section class="subscribe">
         <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 map-info-right px-0">
               <iframe src="https://www.google.com/maps/embed?!3m1!4b1!4m5!3m4!1s0x39736cfc7c4e745b:0xe8c316767b69fcc5!8m2!3d27.6022335!4d77.5991208"> </iframe>
            </div>
            <div class="col-lg-6 col-md-6 address-w3l-right text-center">
               <div class="address-gried ">
                  <span class="far fa-map"></span>
                  <p>GLA University<br>INDIA Mathura,UP
                  <p>
               </div>
               <div class="address-gried mt-3">
                  <span class="fas fa-phone-volume"></span>
                  <p> +(91)7060979363<br>+(91)9720243656</p>
               </div>
               <div class=" address-gried mt-3">
                  <span class="far fa-envelope"></span>
                  <p><a href="mailto:info@example.com">emart.admin@gmail.com</a></p>
               </div>
            </div>
         </div>
		 </div>
      </section>
     <!-- footer -->
     <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="copy-agile-right">
            <p> 
               © 2018 E-mart.
            </p>
         </div>
      </footer>
      <!-- //footer -->
<!-- Modal 1-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form method="post" action="">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Email or Mobile" name="email" required="required">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="Enter Password" name="pass" required="required">
                           </div>
										<button type="submit" class="btn btn-warning btn-lg btn-block" name="login">Login</button><br><br>
                           </div>
										 </form>
										 <!--Check the login user deatil using script-->
											<?php
											include('connect.php');
											if(isset($_POST['login']))  
											{  
													$email=$_POST['email'];  
													$pass=$_POST['pass'];  
												
													$check_user="select * from login_user WHERE (uemail ='$email' OR uphone='$email') AND upass = '$pass';";  
												
													$run=mysqli_query($conn,$check_user);  
												
													if(mysqli_num_rows($run))  
													{  
															echo "<script>window.open('home.php','_self')</script>";  
												
															$_SESSION['email']=$email;//here session is used and value of $user_email store in $_SESSION. 
												
													}  
													else  
													{  
														echo "<script>alert('Email or password is incorrect!')</script>";  
													}  
											}  

										?>
										<a href="register.php"><button type="button" class="btn btn-success btn-lg btn-block">Register</button></a>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- //Modal 1-->





      <!--Modal 2-->
      <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-sm">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Login Alert!!</h4>
     <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <p style="text-align: center;">GOTO HOME PAGE<br><b>Join Emart if not done yet..</b><br>"Please Login to buy this item"</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
      <!--//Modal 2-->
      <!--jQuery-->
      <script src="js2/jquery-2.2.3.min.js"></script>
      <!-- newsletter modal -->
      <!-- cart-js -->
      <script src="js2/minicart.js"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      <!-- //cart-js -->
      <!-- price range (top products) -->
      <script src="js2/jquery-ui.js"></script>
      <script>
         //<![CDATA[ 
         $(window).load(function () {
         	$("#slider-range").slider({
         		range: true,
         		min: 0,
         		max: 9000,
         		values: [50, 6000],
         		slide: function (event, ui) {
         			$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
         		}
         	});
         	$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
         
         }); //]]>
      </script>
      <!-- //price range (top products) -->
      <!-- single -->
      <script src="js2/imagezoom.js"></script>
      <!-- single -->
      <!-- script for responsive tabs -->
      <script src="js2/easy-responsive-tabs.js"></script>
      <script>
         $(document).ready(function () {
         	$('#horizontalTab').easyResponsiveTabs({
         		type: 'default', //Types: default, vertical, accordion           
         		width: 'auto', //auto or any width like 600px
         		fit: true, // 100% fit in a container
         		closed: 'accordion', // Start closed if in accordion view
         		activate: function (event) { // Callback function if tab is switched
         			var $tab = $(this);
         			var $info = $('#tabInfo');
         			var $name = $('span', $info);
         			$name.text($tab.text());
         			$info.show();
         		}
         	});
         	$('#verticalTab').easyResponsiveTabs({
         		type: 'vertical',
         		width: 'auto',
         		fit: true
         	});
         });
      </script>
      <!-- FlexSlider -->
      <script src="js2/jquery.flexslider.js"></script>
      <script>
         // Can also be used with $(document).ready()
         $(window).load(function () {
         	$('.flexslider1').flexslider({
         		animation: "slide",
         		controlNav: "thumbnails"
         	});
         });
      </script>
      <!-- //FlexSlider-->
      <!-- start-smoth-scrolling -->
      <script src="js2/move-top.js"></script>
      <script src="js2/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         
         
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!-- //smooth-scrolling-of-move-up -->
      <!--bootstrap working-->
      <script src="js2/bootstrap.min.js"></script>
      <!-- //bootstrap working--> 
   </body>
</html>