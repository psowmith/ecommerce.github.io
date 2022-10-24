<?php
$pid=$_GET['pid'];
//echo "product ID=$pid";

session_start();



if(!isset($_SESSION['cart']))
{
    $_SESSION['cart']=array();
}

$local_cart=$_SESSION['cart'];

$status=in_array($pid,$local_cart);

//echo "index=$status";
if($status)
{
    echo "<h3>product already available in cart</h3>";
}
else
{
    array_push($local_cart,$pid);
    $_SESSION['cart']=$local_cart;
    //print_r($local_cart);
    header('location:index.php');
}



?>