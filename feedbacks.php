<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
<h1 class="feedhead">Feedback</h1>
<div class="feeds">
<?php
include 'connectoili.php';
include 'functidf.php';
$selectquery = " select * from feedbacko";
$query = mysqli_query($con,$selectquery);
$nums= mysqli_num_rows($query);
while($ress= mysqli_fetch_array($query)){
    ?>
    <div class="ok">
    <td class="feedname"><?php echo $ress['Firstname'];?></td><span>,</span><br>
    <td class="fed"><?php echo $ress['message']; ?></td>
</div><br><br>
    <?php
}
?>
</div>
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
<style>
    body{
        margin: 0;
        padding: 0;
        font-family: "Roboto", sans-serif;
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
      height: 1200px;
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
    .feedhead{
        position: relative;
        left: 800px;
        top: 58px;
    }
    .feeds{
        position: relative;
        left: 300px;
        top: 70px;  
    }
    .ok{
        position: relative;
        width: 500px;
        border-radius: 10px;
        border: 2px solid #73AD21;
        padding: 20px;
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