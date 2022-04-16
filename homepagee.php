<?php
session_start();
include("connectoili.php");
include("functidf.php");
$user_data=check_logoiion($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homep</title>
</head>
<body>
<body>
    <header>
        <div class="dash">
            <h3>Element<span>Jewellers</span></h3>
</div>
<div class="right-area">
     <a href="logoooout.php" class="logoutuu">Logout</a>
</div>
</header> 
<br>
<div class="side-bar">
<div class="identio">
    Hey, <?php echo $user_data['user_name']; ?>
</div>
<span><a href="">Owners</a></span>
<br>
<span><a href="">Products</a></span>
<br>
<span><a href="http://localhost/mproj/customerss.php">Registered Customers</a></span>
<br>
<span><a href="selliiiiii.php">Selling Details</a></span>
<br>
<span><a href="http://localhost/mproj/feedbacks.php">Feedback</a></span>
<br>
</div>
<div class="upseel">
    <?php 
    require 'connectoili.php';
    $query = "SELECT id FROM customio ORDER BY id";
    $query_run = mysqli_query($con, $query);
    $row = mysqli_num_rows($query_run);
    echo '<h1>' .$row.'</h1>';
    ?>
    <h2>total customers</h2>
</div>
<div class="reseel"> 
<?php
require 'connectoili.php';
$query ="SELECT MAX(ProductPrice) AS tpu FROM paymentmode ORDER BY ProductPrice";
$query_run = mysqli_query($con, $query);
while($qw=mysqli_fetch_assoc($query_run)) {
    echo '<h1>' .$qw['tpu'] .'</h1>';
}
?>
<h2>Max bought price</h2>
</div>
<div class="addo">
    <?php
    require 'connectoili.php';
    $query ="SELECT SUM(ProductPrice) AS addpricee FROM paymentmode ORDER BY ProductPrice";
    $query_run = mysqli_query($con, $query);
    while($ok=mysqli_fetch_assoc($query_run)) {
        echo '<h1>'.$ok['addpricee'].'</h1>';
    }
    ?>
    <h2>Revenue</h2>
    </div>
    <iframe src="https://www.kitco.com" width="50%" height="550" class="kiy" ></iframe>
<div class="end">
    <div class="info">
        <h2>This website is created by SE COMPS A division students</h2>
        <img src="https://logopond.com/logos/dafdd4e68dda46dc129c57a2e4802154.png" alt="" width="250">
    </div>
    
    <div class="name">
        <h3>NAME</h3>
        <h3>Abhay Yadav &nbsp;&nbsp;|&nbsp;&nbsp;Abhishek Wafare &nbsp;&nbsp;|&nbsp;&nbsp;Siddhesh Sable&nbsp;&nbsp;|&nbsp;&nbsp;Chaitanya Zade</h3>
    </div>

    <div class="social">
        <a href="https://www.youtube.com/">You Tube</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="https://www.linkedin.com/">LinkedIn</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="https://www.instagram.com/">Instagram</a>
    </div>
    
    <div class="footer">
        <a href="#">FAQ</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="#">Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="#">Terms of Use</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="#">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="#">Refund Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;
        <a href="#">&copy; 2021 | JWS Group</a>
    </div>
    
</div>


</body>
</html>
<style>
    body{
        margin: 0;
        padding: 0;
        font-family: "Roboto", sans-serif;
    }
    .kiy{
        position: relative;
        left: 20%;
        top: 100px;
    }
    header{
        position: absolute;
        background: #22242A;
        padding: 20px;
        width: 100%;
        height: 30px;
    }
    .dash h3{
        color: #fff;
        margin: 0;
        
        font-size: 22px;
        font-weight: 900;
    }
    .dash span{
        color: #1DC4E7;
    }
    .logoutuu{
        padding: 5px;
        background: #19B3D3;
        text-decoration: none;
        float: right;
        margin-top: -30px;
        margin-right: 40px;
        border-radius: 50px;
        font-size: 15px;
        font-weight: 600;
        color: #fff;
    }
    .logoutuu:hover{
        background: #0D9DBB;
    }
    .side-bar{
      background: #2F323A;
      margin-top: 52px;
      padding-top: 30px;
      position: absolute;
      left: 0;
      width: 250px;
      height: 1800px;
    }
    .side-bar .identio{
        color: #ccc;
        margin-top: 0;
        margin-bottom: 20px;
        margin-left: 20px;
    }
    .side-bar a{
        color: #fff;
        display: block;
        width: 100%;
        line-height: 60px;
        padding-left: 40px;
        box-sizing: border-box;
        text-decoration: none;
        transition: 0.5s;
        transition-property: background;
    }
    .side-bar a:hover{
        background: #19B3D3;
    }
    .upseel{
        position: relative;
        left: 300px;
        top: 60px;
        border-radius: 25px;
        padding: 20px;
        width: 200px;
        height: 150px;
        background-color: #e3effc;
        border-style: outset;
        border-color: #3895D3;
    }
    .reseel{
        position: absolute;
        border-radius: 25px;
        background-color: #e3effc;
        left: 600px;
        top: 79px;
        padding: 20px;
        width: 200px;
        height: 150px;
        border-style: outset;
        border-color: #3895D3;
    }
    .addo{
        position: absolute;
        border-radius: 25px;
        background-color: #e3effc;
        left: 900px;
        top: 79px;
        padding: 20px;
        width: 200px;
        height: 150px;
        border-style: outset;
        border-color: #3895D3;  
    }
    .end{
        position:relative;
        top: 1000px;
        width: 1550px;
            background-color: #fff;
        }
        .info{
            font-family: 'Courier New', Courier, monospace;
            padding-top: 10px;
            text-align: center;
            font-size:x-large;
            color: #6B5B95;
        }
        .name{
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
            white-space: nowrap;
            padding: 0 0 2px;
            color: royalblue;
        }
        .social {
            font-family: 'Times New Roman', Times, serif;
            text-align: center;
            margin: 20px;
        } 
        .footer {
            font-family: 'Times New Roman', Times, serif;
            background-color: #fff;
            height: 35px;
            padding-top: 5px;
            overflow: hidden;
        }
        .social a{
            color: red;
        } 
        .footer a{
            text-decoration: none;
            padding: 15px;
            color: rgb(36, 127, 6);
        }

</style>
</body>
</html>