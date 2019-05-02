<?php

session_start();  
if(!$_SESSION['user'])  
{  
  
    header("Location: admin.php");//redirect to login page to secure the welcome page without login access.  
}  
$user = $_SESSION['user'];
?>
<?php
include('connect.php');
$sql1 = "select * from products order by dname asc;";

$res = mysqli_query($conn,$sql1);
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
                        <a class="nav-link" href="ad_home.php">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Product
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link" href="inventory.php">Add Inventory</a>
                           <a class="nav-link " href="products.php">Add Products</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Product-Types
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a href="add_typ.php" class="nav-link">Add Product Type</a>
                           <a href="cat.php" class="nav-link">Add Product Category</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link" href="show_feed.php"  role="button"  aria-haspopup="true" aria-expanded="false">
                        Feedback
                        </a>
                     </li>
                     
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Orders
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link" href="deliver.php">Delivered-Order</a>
                           <a class="nav-link " href="pending.php">Pending-Order</a>
                           <a class="nav-link " href="cancle.php">Cancelled-Order</a>
                        </div>
					 </li>
					 <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        User
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link" href="#"><?php echo "Welcome, ".$user; ?></a>
                           <a class="nav-link " href="ad_logout.php">Logout</a>
                        </div>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
<hr>
<br><br><br><br><br><br><br><br><br>
<h1 style="background-color: green; color: white; text-align: center;">Add Products</h1>
<hr>
<center>
<form action="add_prod.php" method="post" enctype="multipart/form-data">
    <label>Item name</label>
    <?php
    include('connect.php');

    $sql = "select distinct pname from inventory order by pname asc;";
    $result = mysqli_query($conn,$sql);
    echo "<select name='dname'>";
    echo "<option value=''>Select Your Item Name</option>";
    while($row = mysqli_fetch_array($result))
        {
    echo '<option value='.$row['pname'].'>'.$row['pname'].'</option>';
        }
    echo "</select>";
    ?><br><br>
    <label>Item Category</label>
    <?php
    include('connect.php');

    $sql = "select * from cat order by cname asc;";
    $result = mysqli_query($conn,$sql);
    echo "<select name='cat'>";
    echo "<option value=''>Select Your Item Category</option>";
    while($row = mysqli_fetch_array($result))
        {
    echo '<option value='.$row['cname'].'>'.$row['cname'].'</option>';
        }
    echo "</select>";
    ?>
    <br><br>
    <label>Item Type</label>
    <?php
    include('connect.php');

    $sql = "select * from ityp order by tname asc;";
    $result = mysqli_query($conn,$sql);
    echo "<select name='dtype'>";
    echo "<option value=''>Select Your Item Type</option>";
    while($row = mysqli_fetch_array($result))
        {
    echo '<option value='.$row['tname'].'>'.$row['tname'].'</option>';
        }
    echo "</select>";
    ?>
    <br><br>
    <label>Item price</label>
	<input type="text" name="price" placeholder="Enter item price"><br><br>
	<label>Item Description</label>
	<input type="text" name="desp" placeholder="Enter item Description"><br><br>
    <label>Item NetWeight(in gm.)</label>
	<input type="text" name="nwt" placeholder="Enter item Weight"><br><br>
    <label>Item Manufacture Date</label>
	<input type="date" name="mdate" placeholder="Enter item Manufacture Date"><br><br>
    <label>Item Batch No.</label>
	<input type="text" name="bno" placeholder="Enter item Batch No."><br><br>
    <label>Item License</label>
	<input type="text" name="lcns" placeholder="Enter item License"><br><br>
    <label>Item image 1</label>
    <input type="file" name="image"><br><br>
    <label>Item image 2</label>
	<input type="file" name="image2"><br><br>
        <input type="submit" class="btn btn-info" value="Upload">
</form>
</center>
<hr>
<h1 style="background-color: red; color: white; text-align: center;">Products Detail</h1>
<hr>

<table class="table table-bordered table-striped table-hover">
<tr>
		<th>Sno.</th>
        <th>Item Name</th>
        <th>Item Cat.</th>
        <th>Item Type</th>
        <th>Item Price</th>
        <th>Dis. Price</th>
        <th>Item Desp.</th>
        <th>Item Nwt(in gm.)</th>
        <th>Item Mfg. Date</th>
        <th>Batch-No</th>
        <th>License</th>
        <th>Image</th>
		<th>Edit</th>
		<th>Delete</th>
    </tr>
    

    <?php
$i=1;
while($row=mysqli_fetch_assoc($res))
{
	echo "<tr>";
    echo "<td>".$i."</td>";
    echo "<td>".$row['dname']."</td>";
    echo "<td>".$row['cat']."</td>";
    echo "<td>".$row['type']."</td>";
    echo "<td>".$row['price']."</td>";
    echo "<td>".$row['oprice']."</td>";
    echo "<td>".$row['desp']."</td>";
    echo "<td>".$row['nwt']."</td>";
    echo "<td>".$row['mdate']."</td>";
    echo "<td>".$row['batch']."</td>";
    echo "<td>".$row['lcns']."</td>";
    echo "<td><img src='".$row['img']."' width='100' height='100'></td>";
	echo "<td><a href='edit_prod.php?did=".$row['did']."'><i class='far fa-edit' style='color:blue;'></i></a></td>";
	echo "<td><a href='del_prod.php?did=".$row['did']."'><i class='fa fa-trash' aria-hidden='true' style='color:red;'></i></a></td>";
	echo "</tr>";
	$i++;
}
?>
</table>


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