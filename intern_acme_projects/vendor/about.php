<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .a1 
        {
            width:340px;
            height:300px;
            margin-left:100px;
            margin-top:40px;
            border-style: groove;
            border-color:#7f79ed;
            border-radius:15px 50px 30px;
            background-color:#c8dead;
            
        }
        .a1 img 
        {
            width:200px;
            height:150px;
        }
        p 
        {
            font-weight:600;
        }
        .a2 
        {
            display:inline-block;
        }
        .a2 img 
        {
            transform:translate(60px,-130px);
            width:500px;
        }
        .a3 
        {
            width:800px;
            height:200px;
            margin-left:570px;
            border-style: groove;
            border-color:#7f79ed;
            border-radius:15px 50px 30px;
            background-color:#c8dead;
            transform:translate(0px,-100px);
        }
        .a4 
        {
            transform:translate(100px,-310px);
        }
        .a4 img 
        {
            width:400px;
            height:260px;
        }
    </style>
</head>
<body style="background: url(https://www.freegreatpicture.com/files/147/4560-background-color.jpg)">
    
</body>
</html>
<?php

include "menu.php";
echo "<div class='a2'>
        <div class='a2 a1'>
        <h1>Leave a Mark</h1>
        <p>We're known more by the impact we create
                than the titles we hold. Impact that is brought by
                working together on audacious challenges at scale
                with an aim to revolutionize for the Indian customer.
                We believe great ideas can emerge from anywhere
                and must be backed. Our people - backed by our
                culture of end-to-end ownership - have revolutionised
                India's e-commerce sector - several times over!
        </p>
        </div>
        <div class='a2'>
            <img src='https://img.freepik.com/premium-photo/group-business-people-working-together-preparing-new-project-meeting-office_52137-36422.jpg?w=360' alt='Girl in a jacket'>        
        </div>
        
    </div>
    <div class='a3'>
        <h1>Experiment Learn Grow</h1>
        <p>
            Our journey of building India's biggest unicorn
            start-up has been full of successes, but also failures
            and learning from them. That's why there's calculated
            risk-taking, a high willingness to learn and improvise,
            and a growth orientation built into everything we do.
            Whether it be opening a new warehouse, or making
            our mobile app a bit more consumer friendly, we're
            always experimenting, learning and growing!
        </p>
    </div>
    <div class='a4'>
        <img src='https://c8.alamy.com/comp/2CC0DT0/creative-three-3-people-logo-design-vector-group-of-persons-sign-2CC0DT0.jpg'>
    </div>"
?>