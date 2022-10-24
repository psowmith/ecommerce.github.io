<?php

include_once '../shared/connection.php';

$pid=$_GET['pid'];

echo "Received Pid=$pid";

$cmd="delete from product where pid=$pid";

$sql_status=mysqli_query($conn,$cmd);
if($sql_status)
{
    echo "alert('product succesively deleted')";
    header('location:view.php');
}
else
{
    echo "something went wrong";
}

?>