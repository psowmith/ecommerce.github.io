<?php

session_start();

if(isset($_SESSION['cart']))
{
    $local_cart=$_SESSION['cart'];

    $total_count=count($local_cart);
}
else
{
    $total_count=0;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<style>
    .abc 
    {
        background-image:url("https://colors.dopely.top/inside-colors/wp-content/uploads/2021/06/colorful-backgrounds-1-1024x640.jpg");
    }
    .parent_menu
    {
        display:flex;
        justify-content:start;
        gap:30px;
        
    }
    .parent_menu div
    {
        
    }
    .parent_menu a
    {
        color:inherit;
        text-decoration:none;
        padding:10px;
        border-radius:12px;
        font-weight:bold;
    }
    .parent_menu a:hover
    {
        background-color:#aaa;
        
    }
    .cart-count-parent 
    {
        position:relative;
    }
    .cart-count 
    {
        padding:5px;
        border-radius:50%;
        background-color:tomato;
        color:white;
        position:absolute;
        right:-10px;
        top:-10px;
        font-weight:bold;
    }
</style>
</head>
<body>
<div class=' abc d-flex p-4 text-white w-100 justify-content-between'>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThRXgRWRNK0J8SsQ8utU5hab5cBy7PGoOdWq_tzwEW-LU9i6GdrfgarNcr-4NNptXpoLk&usqp=CAU" alt="" width="70" height="40">
    <div class='parent_menu'>
        <div class='ml-4' >
            <a href='index.php'>View Products</a>
        </div>
        <div>
            <a href='cart.php'>View cart</a>
        </div>
        <div>
            <a href='order.php'>View Orders</a>
        </div>
    
    </div>

    <div class='d-flex'>
        <div class='cart-count-parent'>
            <button class='btn btn-warning'> 
                <i class='bi-cart'></i>
            </button>
            <span class='cart-count'>
                <?php echo "$total_count"  ?>
            </span>
        </div>
        <div class='ms-3'>
            <a href='logout.php'>
                <button class='btn btn-danger'>
                     <i class='bi bi-box-arrow-right'>Logout </i> 
                </button>
            </a>
        </div>
    </div>
</div>
</body>
</html>