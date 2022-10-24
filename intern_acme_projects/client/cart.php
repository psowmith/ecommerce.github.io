<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        /*.parent:hover
        {
            zoom:1.2;
        }*/
        .parent
        {
            width:fit-content;
            padding:10px;
            background-color:bisque;
            display:inline-block;
            margin-left:10px;
        }
        .parent img
        {
            width:250px;
            height:200px;

        }
        .price
        {
            color:tomato;

        }
        .currency
        {
            font-size:12px;
        }
        .name
        {
            background-color:yellow;
            color:black;
            margin:0;
        }
    </style>
</head>
<body style="background: url(https://www.freegreatpicture.com/files/147/4560-background-color.jpg)">
    
</body>
</html>

<?php
    include 'menu.php';
    include_once '../shared/connection.php';
    //session_start();
    if(!isset($_SESSION['cart']))
    {
        echo "<h1> CART is Empty</h1>";
        die;
    }
    $local_cart=$_SESSION['cart'];
    $pids=implode(",",$local_cart);
    $cmd="select * from product where pid in($pids)";
    $sqli_obj=mysqli_query($conn,$cmd);
    $total_price=0;
    while($row=mysqli_fetch_assoc($sqli_obj))
    {
        $pid=$row['pid'];
        $name=$row['name'];
        $price=$row['price'];
        $details=$row['details'];
        $impath=$row['impath'];
        $total_price+=$price;

        echo "<div class='parent'>
                <h3 class='name'>$name</h3>
                <h2 class='price'>$price <span class='currency'>Rs</span></h2>
                <img class='image' src='$impath'>
                <p  class='details'>$details</p>


                    <div class='text-end'>
                        <a href='removecart.php?pid=$pid'>
                            <button class='btn p-1 btn-danger'> 
                                <i class='bi-trash'> </i>
                            </button>
                        </a>
                    </div>
            </div>";
    }
echo "<h2>Toal Price=$total_price</h2>
<button class='btn btn-success'>Place Order</button>";
?>