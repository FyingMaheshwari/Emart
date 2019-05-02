<?php 
session_start();  
if(!$_SESSION['email'])  
{  
  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
}  
$email = $_SESSION['email'];
?>
<?php
include('connect.php');
$ss = "select uid from login_user where uemail='$email';";
$rs = mysqli_query($conn,$ss);
$row = mysqli_fetch_assoc($rs);
$id = $row['uid']; 
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>E-Mart</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
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
      <!--price range-->
      <link rel="stylesheet" type="text/css" href="css2/jquery-ui1.css">
      <!--//price range-->
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
                        <p><a href="mailto:info@example.com">emart2k19@gmail.com</a></p>
                     </li>
                     <li>
                     </li>
                  </ul>
            </div>
         </div>
         <div class="container-fluid">
            <div class="hedder-up row">
               <div class="col-lg-3 col-md-3 logo-head">
                  <h1><a class="navbar-brand" href="home.php">E-Mart</a></h1>
               </div>
               <div class="col-lg-5 col-md-6 search-right">
                     <form class="form-inline my-lg-0" action="search.php" method="post">
                        <input class="form-control mr-sm-2" type="search" name = "srch" placeholder="Search" style="color: black;">
                        <button class="btn" type="submit">Search</button>
                     </form>
                  </div>
               <div class="col-lg-4 col-md-3 right-side-cart">
                  <div class="cart-icons">
                     <ul>
                        <li class="toyscart toyscart2 cart cart box_1">
                           <?php echo '<form action="checkout.php?id='.$id.'" method="post" class="last">';?>
                              <button class="top_toys_cart" type="submit" name="submit" value="">
                              <span class="fas fa-cart-arrow-down"></span>
                              </button>
                           </form>
                        </li>
                     </ul>
                  </div>
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
                           <a class="nav-link" href="product.php?name=Face_Cream">Fairness Cream</a>
                           <a class="nav-link " href="product.php?name=Perfumes">Deodrant/Perfume</a>
                           <a class="nav-link " href="product.php?name=Facewash/Soap">Facewash/Soap</a>
                           <a class="nav-link " href="product.php?name=Kajal/Mascara">Kajal/Mascara</a>
                           <a class="nav-link " href="product.php?name=Face_Powder">Face Powder</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Snacks
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a href="product.php?name=Namkeen" class="nav-link">Snacks/Namkeens</a>
                           <a href="product.php?name=Biscuits/Rusks" class="nav-link">Biscuits/Rusks</a>
                           <a href="product.php?name=Cakes/Pancakes" class="nav-link">Cakes/Pancakes</a>
                           <a href="product.php?name=Dry_Fruits" class="nav-link">Roasted Dryfruits</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Beverages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link " href="product.php?name=Cold_Drink">Cold Drinks</a>
                           <a class="nav-link " href="product.php?name=Juices">Real & Other Juices </a>
                            <a class="nav-link " href="product.php?name=Milk_Shakes">Milk shakes </a>
                        </div>
                     </li>
                     
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Household Items
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link" href="product.php?name=Washing-Powder">Washing-Powder</a>
                           <a class="nav-link " href="product.php?name=Washing-Soaps">Washing-Soaps</a>
                           <a class="nav-link " href="product.php?name=Bathing-Soaps">Bathing-Soaps</a>
                           <a class="nav-link " href="product.php?name=Handwash-Gel">Handwash-Gel</a>
                            <a class="nav-link " href="product.php?name=Toilet-Cleaner">Toilet-Cleaner</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dal/Masala
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a href="product.php?name=Dal(Unpacked)" class="nav-link">Dal(Unpacked)</a>
                           <a href="product.php?name=Dal(Packed)" class="nav-link">Dal(Packed)</a>
                           <a href="product.php?name=Masala" class="nav-link">Masala</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        User
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <?php
                           include('connect.php');

                           $sql = "select * from login_user where uemail='$email' or uphone = '$email' ;";
                           $res = mysqli_query($conn,$sql) ; 
                           while($row=mysqli_fetch_assoc($res))
                           {
                              $fname = $row['fname'];
                              $uid = $row['uid']; 
                           }
                           ?>
                           <a href="#" class="nav-link">Welcome, <?php echo $fname; ?></a>
                           <?php echo '<a class="nav-link" href="edit_prof.php?uid='.$uid.'">Edit Profile</a>';?>
                           <a class="nav-link " href="my_order.php">My order</a>
                           <a class="nav-link " href="my_feed.php">My feedback</a>
                           <a href="logout.php" class="nav-link">Logout</a>
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>
      </div>
	  </div>
      <!--//headder-->
      <!-- banner -->
      <div class="inner_page-banner four-img">
      </div>
      <section class="contact py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container-fluid py-lg-5 py-md-4 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Search Result</h3>
            <div class="row">
               <div class="side-bar col-lg-3">
               <div class="search-hotel">
                     <h3 class="agileits-sear-head">Search Here..</h3>
                     <form action="search.php" method="post">
                        <input type="search" placeholder="Product name..." name="srch" required="">
                        <input type="submit" value=" ">
                     </form>
                  </div>
							<!-- price range -->
							<div class="range">
								<h3 class="agileits-sear-head">Price range</h3>
								<ul class="dropdown-menu6">
									<li>

										<div id="slider-range"></div>
										<input type="text" id="" style="border: 0; color: #ffffff; font-weight: normal;" />
									</li>
								</ul>
							</div>
							<!-- //price range -->
                  <!-- discounts -->
                  <div class="left-side">
                     <h3 class="agileits-sear-head">Discount</h3>
                     <ul>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">5% or More</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">10% or More</span>
                        </li>
                        <li>
                           <input type="checkbox" class="checked">
                           <span class="span">20% or More</span>
                        </li>
                     </ul>
                  </div>
                  <!-- //discounts -->
               </div>
               <div class="left-ads-display col-lg-9">
               <div class="row">
               <?php
            include('connect.php');
            $srch = $_POST['srch'];
            $sql = "select * from products where dname like '%".$srch."%' or cat like '%".$srch."%' order by dname asc;";
            $result = mysqli_query($conn,$sql);
            while($row=mysqli_fetch_assoc($result))
            {
               $dname = $row['dname'];
               $price = $row['oprice'];
               $img = $row['img'];
               $prod = $row['cat'];
               echo '
                     <div class="col-lg-4 col-md-6 col-sm-6 product-men women_two">
                        <div class="product-toys-info">
                           <div class="men-pro-item">
                              <div class="men-thumb-item">

               <img src="'.$img.'" class="img-thumbnail img-fluid" alt="">

              <div class="men-cart-pro">
               <div class="inner-men-cart-pro">
                  <a href="single.php?did='.$row['did'].'" class="link-product-add-cart">Quick View</a>
               </div>
            </div>
            <span class="product-new-top">New</span>
         </div>
         <div class="item-info-product">
            <div class="info-product-price">
               <div class="grid_meta">
                  <div class="product_price">
                     <h4>
                     <a href="single.php?did='.$row['did'].'">'; echo $dname; echo'</a><br>
                     <a href="single.php?did='.$row['did'].'">'; echo $row['nwt'].'(gm/ml)'; echo'</a>
                  </h4>
                  <div class="grid-price mt-2">
                     <span class="money ">'; echo 'Rs. '.$price; echo '</span>
                  </div>
                  <ul class="stars">
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                             </a>
                                          </li>
                                          <li>
                                             <a href="#">
                                             <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                             </a>
                                          </li>
                                       </ul>
               </div>
            </div>


            
                        <div class="occasion-cart">
                        <div class="toys single-item hvr-outline-out">
                           <form method="post" action="check.php?id='.$id.'">
                           <input type="hidden" name="img" value="'.$img.'">
                              <input type="hidden" name="cat" value="'.$prod.'">
                              <input type="hidden" name="item" value="'.$dname.'">
                              <input type="hidden" name="amount" value="'.$price.'">
                              <button type="submit" class="toys-cart ptoys-cart add">
                              <i class="fas fa-cart-plus"></i>
                              </button>
                           </form>
                        </div>
                     </div>   
                                 </div>
                                 <div class="clearfix"></div>
                              </div>
                           </div>
                        </div>
                     </div>
                 
            ';
             }
             ?>
              </div>
              </div>
              </div>
               </div>
             </section>
           
                                    
                                    
      <!-- //show Now-->
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
               © 2018 E-mart.Developed By: Priyam Agarwal
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
                     <form action="#" method="post">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Your Name" name="Your Name" required="">
                           </div>
                           <div class="styled-input">
                              <input type="email" placeholder="Your Email" name="Your Email" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required="">
                           </div>
                           <button type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- //Modal 1-->
      <!--js working-->
      <script src='js2/jquery-2.2.3.min.js'></script>
      <!--//js working-->
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
      <!--bootstrap working-->
      <script src="js2/bootstrap.min.js"></script>
      <!-- //bootstrap working-->      <!-- //OnScroll-Number-Increase-JavaScript -->
   </body>
</html>
