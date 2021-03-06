<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>E-Mart SignUp</title>

    <!-- Icons font CSS-->
    <link href="vendor1/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor1/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <!-- Vendor CSS-->
    <link href="vendor1/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor1/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css1/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title"> Signup Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                    <label class="label--desc">Email</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="pass">
                                    <label class="label--desc">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                        <input class="input--style-5" type="tel" minlength="10" maxlength="10" id="mobile" name="phone" title="10 digit mobile number" required>
                                        <label class="label--desc">Mobile Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">Address</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="uaddr">
                                            <label class="label--desc">Address</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row m-b-55">
                            <div class="name">city</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="ucity">
                                            <label class="label--desc">City</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="register">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
include('connect.php');
if(isset($_POST['register']))
{
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];
    $addr = $_POST['uaddr'];
    $city = $_POST['ucity'];

    

    
    if(($city=="Mathura" || $city=="mathura"))
    {
        $sql = "insert into login_user(fname,lname,uemail,upass,uphone,uaddr,ucity) values('$fname','$lname','$email','$pass','$phone','$addr','$city');";

        if(mysqli_query($conn,$sql))
        {
            echo "<script>window.alert('Account Successfully Created!!!')</script>";
            echo "<script>window.open('index.php','_self')</script>";
        }
        else
        {
            echo "<script>window.alert('Account Credentials Already Exist or Incorrect Data')</script>";
            echo "<script>window.open('register.php','_self')</script>";
        }
    }
    else
    {
        echo "<script>window.alert('It seems like you belong to other geographical location except Mathura.')</script>";
        echo "<script>window.open('register.php','_self')</script>";
    }

}
?>

<script>
   $('#mob_frm').submit(function(e) {
            e.preventDefault();
            if(!$('#mobile').val().match('[0-9]{10}'))  {
                alert("Please put 10 digit mobile number");
                return;
            }  

        });
</script>



    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->