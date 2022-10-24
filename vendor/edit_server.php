<?php
    /*$file=$_FILES['fileToUpload']['name'];

    date_default_timezone_set("Asia/Kolkata");
    $unique=date("YmdHis").".jpg";
    echo "Unique=$unique";
    $dest_path="../image/$unique"; 
    move_uploaded_file($file,$dest_path);
    $pid=$_POST['pid'];
    $name = $_POST['name'];
    $price =$_POST['price'];
    $details = $_POST['details'];
    $conn= mysqli_connect('localhost','root','','sowmith');
    $query = "UPDATE product SET name='$name', details='$details', price='$price', impath='$dest_path' WHERE pid=$pid";
    mysqli_query($conn,$query);
    echo mysqli_error($conn);
    mysqli_close($conn); */
    
    $src_path=$_FILES['sowmith']['tmp_name'];

    $imname=$_FILES['sowmith']['name'];
    date_default_timezone_set("Asia/Kolkata");
    
    $unique=date("YmdHis").".jpg";
    echo "Unique=$unique";
    $dest_path="../image/$unique";
    move_uploaded_file($src_path,$dest_path);
    $pid=$_POST['pid'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $details=$_POST['details']; 
    
    include_once "../shared/connection.php";
    
    $cmd="UPDATE product SET name='$name', details='$details', price='$price', impath='$dest_path' WHERE pid=$pid";
    
    echo "<br> $cmd";
    mysqli_query($conn,$cmd);

    header("Location:view.php");


?>
