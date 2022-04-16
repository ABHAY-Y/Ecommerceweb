
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
    <div class="boom">
<h1 class="headboom">Selling Details</h1>
<table class="tableboom"  cellspacing=0 cellpadding=15  >
    <thead>
        <tr class="inboom">
            <th>IdNo</th>
            <th width="170">Name</th>
            <th width="100">Jewellery</th>
            <th>Number of jewelleries</th>
            <th>Totalprice</th>
            <th class="dateee" width="150">Date</th>
            <th>Operation</th>
</tr>
</thead>
<tbody>
<?php
include 'connectoili.php';
include 'functidf.php';
$selectquery = " select * from paymentmode";
$query = mysqli_query($con,$selectquery);
$nums= mysqli_num_rows($query);
while($ress= mysqli_fetch_array($query)){
    ?>
    <tr>
    <td class="cusid"><?php echo $ress['id'];?></td>
    <td class="cusnam"><?php echo $ress['Nammme'];?></td>
    <td class="cusjewel"><?php echo $ress['Product'];?></td>
    <td class="cusnjewel"><?php echo $ress['TotalProducts'];?></td>
    <td class="custp"><?php echo $ress['ProductPrice'];?></td>
    <td class="cusdate"><?php echo $ress['date'];?></td>
    <td><a href="deletoi.php?idth=<?php echo $ress['id']; ?>" data-toggle="tooltip" data-placement="bottom" title="DELETE" class="cpsd">delete</a></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
<div class="end">
    <div class="info">
        <h2>This website is created by SE COMPS A division students</h2>
        <img src="element.jpeg" alt="" width="250">
    </div>
    
    <div class="name">
        <h3>NAME</h3>
        <h3>Abhay Yadav &nbsp;&nbsp;|&nbsp;&nbsp;Abhishek Wafare &nbsp;&nbsp;|&nbsp;&nbsp;Siddhesh Sabale&nbsp;&nbsp;|&nbsp;&nbsp;Chaitanya Zade</h3>
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
.headboom{
    position: absolute;
    left: 850px;
    top: 59px;
    text-align: center;
}
.tableboom{
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    min-width: 400px;
}
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
    .inboom{
        position: absolute;
        left: 490px;
        top: 130px;
        background-color: #009879; 
        color: white;
        border-radius: 7px 7px 0 0;
    }
    tr{
        position: relative;
        left: 490px;
        top: 160px;
        background-color: white;
        text-align: center;
        font-weight: bold;
    }
    .cusid{
        position: absolute;
        left: 10px;
    }
    .cusnam{
        position: absolute;
        left: 80px;
        width: 150px;
    }
    .cusjewel{
         position: absolute;
         left: 240px;
         width: 150px;
    }
    .cusnjewel{
         position: absolute;
         left: 450px;
    }
    .custp{
        position: absolute;
        left: 580px;
    }
    .cusdate{
        position: relative;
        left: 590px;
    }
   
    .cpsd{
        position: absolute;
        left: 875px;
        text-decoration: none;
        top: 28%;
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
