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
            background-color:#c8dead;
            display:inline-block;
            margin-left:10px;
            border-radius:15px 50px 30px;
            border-style: groove;
            border-color:#7f79ed;
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
            /*background-color:#b3dcf2;*/
            
            color:#262fde;
            font-weight: bold;
            font-style:italic;
            margin:0;
            border-radius:10px 20px 20px;
            text-align: center;
        }
    </style>
</head>
<body style="background: url(https://www.freegreatpicture.com/files/147/4560-background-color.jpg)">
    
</body>
</html>
<?php
include 'menu.php';
include_once "../shared/connection.php";
$mysqli_obj=mysqli_query($conn,"select * from product");
while($row=mysqli_fetch_assoc($mysqli_obj))
{
    //print_r($row);
    //echo "<br>";

    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $details=$row['details'];
    $impath=$row['impath'];


    echo "<div class='parent'>
            <h3 class='name'>$name</h3>
            <h2 class='price'>$price <span class='currency'>Rs</span></h2>
            <img class='image' src='$impath'>
            <p  class='details'>$details</p>
            <div class='text-end'>
                <input value='$pid' name='pid' hidden> 
                <a href='edit_item.php?pid=$pid&name=$name&price=$price&details=$details&impath=$impath'>    
                    <button class='btn p-1 btn-warning'> 
                        <i class='bi-pencil'> </i>
                    </button>
                </a>

                <a href='delete_product.php?pid=$pid'>
                    <button class='btn p-1 btn-danger'> 
                        <i class='bi-trash'> </i>
                    </button>
                </a>
            </div>
    
        </div>";
}


?>
