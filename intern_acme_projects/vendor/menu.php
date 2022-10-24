<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
    .parent_menu
    {
        display:flex;
        justify-content:start;
        gap:30px;
        background-image:url("https://colors.dopely.top/inside-colors/wp-content/uploads/2021/06/colorful-backgrounds-1-1024x640.jpg");
    }
    .parent_menu div
    {
        
    }
    .parent_menu a
    {
        color:white;
        text-decoration:none;
        padding:10px;
        border-radius:12px;
        font-size:20px;
        font-weight:bold;
    }
    .parent_menu a:hover
    {
        background-color:#bac79d;
        
    }
</style>
</head>
<body>
    <div class='parent_menu p-4 text-white w-100'>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThRXgRWRNK0J8SsQ8utU5hab5cBy7PGoOdWq_tzwEW-LU9i6GdrfgarNcr-4NNptXpoLk&usqp=CAU" alt="" width="70" height="40">
        <div class='ml-4' >
            <a href='index.php'>Upload Product</a>
        </div>
        <div>
        <a href='view.php'>View Product</a>
        </div>
        <div>
        <a href='order.php'>View Orders</a>
        </div>
        <div>
        <a href='about.php'>about</a>
        </div>
    </div>
</body>
</html>