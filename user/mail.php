<?php 
session_start();
include("connection.php");

if(isset($_GET['p_id'])){
   $p_id = $_GET['p_id'];

   $sel = "SELECT * FROM `products` WHERE product_id = '$p_id'";
$query = mysqli_query($connect, $sel);
$fetch_pr = mysqli_fetch_assoc($query);

$pn = $fetch_pr['product_name'];
$pp = $fetch_pr['product_price'];
$pm = $fetch_pr['product_model'];
$ps = $fetch_pr['product_specification'];

$user_email = $_SESSION['email'];
$user = $_SESSION['user'];
    
    
    $to = $user_email;
    $sub = "Order Confirmed!" . $pm ;
    $msg = "DEAR <b>" . $user . "</b> <br> Your Order has been confirmed! <br>" . "Product Name: " . $pn . "<br> Product Price: " . $pp . "<br> Product Model: " . $pm . "<br> Product Specification: "  . $ps;
    $header = "From: faraz_inam@aptechnorth.edu.pk" . "\r\n" .
              "Content-Type: text/html; charset=UTF-8" . "\r\n" .
              "MIME-version: 1.0";

   $done = mail($to, $sub, $msg, $header);

   if($done){
    echo "<script>
    alert('Email Sent');
    window.location.href = 'index.php';
    </script>";
   }

   else{
    echo "<script>
    alert('ERROR');
    </script>";
   }
}
?>