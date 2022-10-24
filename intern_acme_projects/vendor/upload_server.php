<?php
$src_path=$_FILES['sowmith']['tmp_name'];

$imname=$_FILES['sowmith']['name'];

date_default_timezone_set("Asia/Kolkata");

$unique=date("YmdHis").".jpg";
echo "Unique=$unique";
$dest_path="../image/$unique";
move_uploaded_file($src_path,$dest_path);

$name=$_POST['name'];
$price=$_POST['price'];
$details=$_POST['details']; 

include_once "../shared/connection.php";

$cmd="insert into product(name,price,details,impath) values('$name',$price,'$details','$dest_path')";

echo "<br> $cmd
    $src_path";
mysqli_query($conn,$cmd);
header("Location:view.php");
?>