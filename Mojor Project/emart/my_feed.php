
<?php

session_start();  
if(!$_SESSION['email'])  
{  
    header("Location: index.php");//redirect to login page to secure the welcome page without login access.  
}  
$email = $_SESSION['email'];
?>
<!DOCTYPE html>
<html>
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
      <!-- For Clients slider -->
      <link rel="stylesheet" href="css2/flexslider.css" type="text/css" media="all" />
      <!--flexs slider-->
      <link href="css2/JiSlider.css" rel="stylesheet">
      <!--Shoping cart-->
      <link rel="stylesheet" href="css2/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="css2/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
   </head>
   <body>
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
                        <p><a href="mailto:emart2k19@gmail.com">emart2k19@gmail.com</a></p>
                     </li>
                     <li>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="container-fluid">
               <div class="hedder-up row">
                  <div class="col-lg-3 col-md-3 logo-head">
                     <h1><a class="navbar-brand" href="ad_home.php">E-Mart(Admin)</a></h1>
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
<hr>
<br><br><br><br><br><br><br><br><br>
<hr>
<h1 style="background-color: green; color: white; text-align: center;">My Feedback</h1>
<center>
<?php echo '<form action="feedback.php?uemail='.$email.'" method="post">'; ?>
        <label>Write your Feedback</label>
        <input type="text" name="feedback"><br><br>
        <label>Rating</label>
        <select name="rating">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br><br>
        <input type="submit" value="Feedback">
    </form>
</center>
<hr>
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
											include("connect.php");
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
										<a href="register.php"><button type="button" class="btn btn-success btn-lg btn-block	">Register</button></a>
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
      <!--responsiveslides banner-->
      <script src="js2/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:false,
         		nav:true ,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->	 
      <!--slider flexisel -->
      <script src="js2/jquery.flexisel.js"></script>
      <script>
         $(window).load(function() {
         	$("#flexiselDemo1").flexisel({
         		visibleItems: 3,
         		animationSpeed: 3000,
         		autoPlay:true,
         		autoPlaySpeed: 2000,    		
         		pauseOnHover: true,
         		enableResponsiveBreakpoints: true,
         		responsiveBreakpoints: { 
         			portrait: { 
         				changePoint:480,
         				visibleItems: 1
         			}, 
         			landscape: { 
         				changePoint:640,
         				visibleItems:2
         			},
         			tablet: { 
         				changePoint:768,
         				visibleItems: 2
         			}
         		}
         	});
         	
         });
      </script>
      <!-- //slider flexisel -->
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
      <!-- //bootstrap working-->

</body>
</html>