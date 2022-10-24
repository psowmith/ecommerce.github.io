<!DOCTYPE html>
<html lang="en">
<?php
include_once "../shared/connection.php";

$pid=$_GET['pid'];
$name=$_GET['name'];
$price=$_GET['price'];
$details=$_GET['details'];
$impath=$_GET['impath'];


echo "pid=$pid <br>";
echo "pid=$impath";

echo "<a href='delete_product.php?pid=$pid'></a>"
?>
<head>
    <style>
        img 
        {
            width:100px;
            height:100px;
        }
    </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body style="background: url(https://www.freegreatpicture.com/files/147/4560-background-color.jpg)">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form enctype="multipart/form-data" class="text-center w-28 p-4 bg-warning" method="post" action="edit_server.php">
            <h3 class="text-center">Edit Product</h3>
            <input type="hidden" value="<?php echo "$pid"; ?>" name='pid'>
            <input value="<?php echo "$name";?>" type="text" class="form-control mt-3" name="name" required>
            <input value="<?php echo "$price";?>" type="text" class="form-control mt-4" name="price" required>
            <textarea name="details" cols="60" rows="5" class="mt-3"><?php echo "$details";?></textarea>
            <input accept=".jpg, .png" class="form-control mt-3" type="file" name="sowmith" id="item_img" required hidden>
            <label for="item_img">
                <img src="<?php echo "$impath";?>" alt="">
            </label>
            <input type="submit" class="mt-3 btn btn-success" value="update">
        </form>
    </div>
</body>
</html>

