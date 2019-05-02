<?php

session_start();  
if(!$_SESSION['user'])  
{  
  
    header("Location: admin.php");//redirect to login page to secure the welcome page without login access.  
}  
$user = $_SESSION['user'];
?>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
//use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'emart2k19@gmail.com';                     // SMTP username
    $mail->Password   = 'emartadmin1234';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to
    include('connect.php');
    $id = $_GET['id'];
    $sql = "select * from orders where oid=$id;";
    $res = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($res))
    {
        $email = $row['uemail'];
        $img = $row['img'];
        $fname = $row['fname'];
        $lname = $row['lname'];
        $price = $row['tprice'];
         //Recipients
        $mail->setFrom('emart2k19@gmail.com', 'Emart');
        $mail->addAddress($email, $fname.$lname);     // Add a recipient
        $mail->addAttachment($img, 'Product Image');
    }
   
    //$mail->addAddress('ellen@example.com');               // Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Emart Order Delivery Mail';
    $mail->Body    = '<h1>Congratulation... </h1><h2>This is to inform you that your order is<b style="color:green;"> Delivered </b> Successfully .</h2>';
    $mail->AltBody = 'Congratulation... This is to inform you that your order is Delivered Successfully';
    
    if($mail->send())
    {
        echo "<script>window.alert('Status Updated !!')</script>";
        echo "<script>window.open('pending.php','_self')</script>";
    }
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}