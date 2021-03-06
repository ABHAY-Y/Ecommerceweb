<?php
session_start();
include("connectoili.php");
include("afunc.php");
$user_data=check_customerslogin($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewellery</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <style>
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: 'Poppins', sans-serif;
        }
        .logo img{
            border-radius: none;
        }
        .navbar{
            display: flex;
            align-items: center;
            padding: 20px;
        }
        nav{
            flex: 1;
            text-align: right;
        }
        nav ul{
            display: inline-block;
            list-style-type: none;
        }
        nav ul li{
            display: inline-block;
            margin-right: 20px;
        }
        a{
            text-decoration: none;
            color: #555;
        }
        p{
            color: #555;
        }
        .container{
            max-width: 1300px;
            margin: auto;
            padding-left: 25px;
            padding-right: 25px;
        }
        .row{
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .col-2{
            flex-basis: 50%;
            min-width: 300px;
        }
        .col-2 h1{
            text-align: center;
            font-size: 50px;
            line-height: 60px;
            color: #9B2335;
        }
        .btn{
            display: inline-block;
            background: #ff523b;
            color: #fff;
            padding: 8px 30px;
            margin: 20px ;
            margin-left: 37%;
            border-radius: 30px;
            transition: 0.5s;
        }
        .btn:hover{
            background: #563434;
        }
        .header{
            background: radial-gradient(#fff,rgb(206, 153, 7));
        }
        .categories{
            margin: 70px 0;
        }
        .col-3{
            flex-basis: 30%;
            min-width: 250px;
            margin-bottom: 30px;
            transition: transform 0.5s;
        }
        .col-3 img{
            width: 100%;
        }
        .col-3:hover{
            transform: translateY(-5px);
        }
        .small-container{
            max-width: 1080px;
            margin: auto;
            padding-left: 25px;
            padding-right: 25px;
        }
        .col-4{
            flex-basis: 25%;
            padding: 10px;
            min-width: 200px;
            margin-bottom: 50px;
            transition: transform 0.5s;
        }
        .col-4 img{
            width: 100%;
        }
        .title{
            text-align: center;
            margin: 0 auto 80px;
            position: relative;
            line-height: 60px;
            color: #555;
        }
        .title::after{
            content: '';
            background: #ff523b;
            width: 80px;
            height: 5px;
            border-radius: 5px;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }
        h4{
            color: #555;
            font-weight: normal;
        }
        .col-4 p{
            font-size: 14px;
        }
        .col-4:hover{
            transform: translateY(-5px);
        }
        .offer{
            background: radial-gradient(#fff,rgb(206, 153, 7));
            margin-top: 80px;
            padding: 30px 0;
        }
        .col-2 .offer-img{
            padding: 50px;
        }
        small{
            color: #555;
        }
<!-------------footer------------->
        .heading{
            text-align: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 20px;
            color: maroon;
            background-color: rgb(17, 124, 143);
            padding: 0.02px;
        }
        .info{
            font-family: 'Courier New', Courier, monospace;
            padding-top: 50px;
            text-align: center;
            font-size:x-large;
            color: #6B5B95;
        }
        .info a{
            color: rgb(218, 84, 84);
        }
        a:hover{
            color: rgb(36, 127, 6);
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
        .social a{
            color: red;
        }      
        .footer {
            font-family: 'Times New Roman', Times, serif;
            background-color: #333;
            height: 35px;
            padding-top: 5px;
            overflow: hidden;
        }
        .footer a{
            text-decoration: none;
            padding: 15px;
            color: rgb(36, 127, 6);
        }
        a:hover{
            color: fuchsia;
        }
        .end{
            background-color: rgb(245, 215, 176);
        }
        .an img{
            padding-top: px;
            padding-right: 50px;
        }
        .col-5{
            text-align: center;
            padding-left: 700px;
        }
        .offer-img{
            width: 90%;
        }

    </style>
</head>
<body>
    <div class="header">
    <div class="container">
     <div class="navbar">
        <div class="logo">
            <img src="https://logopond.com/logos/dafdd4e68dda46dc129c57a2e4802154.png" width="125px">
        </div>
        <nav>
         <ul>
            <li><a href="customersprod.php" target="blank">Products</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="customerslogin.php">Logout</a></li>
            <li><a href="feed.php">Feedback</a></li>
            Hey, <?php echo $user_data['name']; ?>
         </ul>
        </nav>
        <img src="" alt="">
     </div>
     <div class="row">
         <div class="col-2">
             <h1>ElementJewellers</h1>
             <a href="customersprod.php" target="blank" class="btn">Explore Now  &#8594;</a>
         </div>
     </div>
    </div>
    </div>
<div class="categories">
    <div class="small-container">
    <div class="row">
        <div class="col-3">
            <img src="" alt="">
        </div>
        <div class="col-3">
            <img src="watchimg4.png" alt="">
        </div>
        <div class="col-3">
            <img src="watchimg6.png" alt="">
        </div>
    </div>
 </div>
</div>
<div class="small-container">
    <h2 class="title">Featured Product</h2>
    <div class="row">
        <div class="col-4">
            <img src="https://the-collective.imgix.net/img/app/product/6/624678-6052682.jpg?w=1600&auto=format" alt="">
            <h4>                          Gold Watch</h4>
            <p>10000.00</p>
        </div>
        <div class="col-4">
            <img src="https://sencowebfiles.s3.ap-south-1.amazonaws.com/products/2LLBkWe4kNNaDTgKGKUxfUkzUydYn52QRn2XbddT.jpeg" alt="">
            <h4>          Gold Ring </h4>
            <p>10000.00</p>
        </div>
        <div class="col-4">
            <img src="https://www.whpjewellers.in/images/products/210818_061923_265_224_0_1.jpg" alt="">
            <h4>Earrings</h4>
            <p>11100.00</p>
        </div>
        <div class="col-4">
            <img src="https://www.whpjewellers.in/images/products/211204_121904_325_115_0_2.jpg" alt="">
            <h4>Gold Ring</h4>
            <p>10000.00</p>
        </div>
    </div>

    <h2 class="title">Latest Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="https://storage.sg.content-cdn.io/cdn-cgi/image/%7Bwidth%7D,%7Bheight%7D,quality=75,format=auto/in-resources/d7048855-742a-406c-a67d-5c2962e69e5e/Images/ProductImages/Source/GPEND14_1.jpg" alt="">
            <h4>Gold Necklace</h4>
            <p>10000.00</p>
        </div>
        <div class="col-4">
            <img src="https://www.whpjewellers.in/images/products/200730_015452_967_615_0_1.jpg" alt="">
            <h4>Gold Necklace</h4>
            <p>10000.00</p>
        </div>
        <div class="col-4">
            <img src="https://www.whpjewellers.in/images/products/211118_021636_960_004_0_1.jpg" alt="">
            <h4>Gold Watch</h4>
            <p>11100.00</p>
        </div>
        <div class="col-4">
            <img src="https://cdn-images.farfetch-contents.com/17/62/26/57/17622657_36857531_1000.jpg" alt="">
            <h4>Gold Watch</h4>
            <p>10000.00</p>
        </div>
    </div>
    
    <div class="row">
        <div class="col-4">
            <img src="https://staticimg.titan.co.in/Tanishq/Catalog/510896YRAAA00_1.jpg?impolicy=pqmed&imwidth=640" alt="">
            <h4> Gold Necklace</h4>
            <p>10000.00</p>
        </div>
        <div class="col-4">
            <img src="https://www.whpjewellers.in/images/products/211118_033911_346_088_0_1.jpg" alt="">
            <h4> Gold Necklace</h4>
            <p>10000.00</p>
        </div>
        <div class="col-4">
            <img src="https://www.whpjewellers.in/images/products/210731_013029_476_840_0_1.jpg" alt="">
            <h4>Gold Necklace</h4>
            <p>11100.00</p>
        </div>
        <div class="col-4">
            <img src="https://www.whpjewellers.in/images/products/210817_044443_513_900_0_1.jpg" alt="">
            <h4>    Gold Bangles</h4>
            <p>10000.00</p>
        </div>
    </div>
</div>

<!-----  offfer   ------->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="https://qph.fs.quoracdn.net/main-qimg-5875217f5550a3ad47ef2157b25cc2de" alt="" class="offer-img">
            </div>
            <div class="col-3">
                <p>Exclusively Available on Elements Jewellery Store</p>
                <h2>Gold Necklace and Earrings</h2>
                <small>Buying Gold Necklace and Earrings is for many an unattainable dream. And for others an acceptable desire. coensitive and soine, royal water, cyanide and mercury. </small>
                <a href="payee.php" class="btn">Buy Now &#8594;</a>
            </div>
        </div>
    </div>
</div>

<!---------footer----------->
<div class="heading">
<div class="end">
    <div class="info">
        <h2>ElementJewellers</h2>
        <img src="https://logopond.com/logos/dafdd4e68dda46dc129c57a2e4802154.png" alt="" width="250">
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
</div>


</body>
</html>