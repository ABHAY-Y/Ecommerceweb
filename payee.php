<?php
session_start();
include("connectoili.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $Nammme= $_POST['fi'];
   $Product=$_POST['aw'];
   $ProductPrice=$_POST['me'];
   $TotalProducts=$_POST['ye'];
   if(!empty($Nammme) && !empty($Product) && !empty($ProductPrice))
   {
      $query="insert into paymentmode (Nammme, TotalProducts, Product, ProductPrice) values('$Nammme', '$TotalProducts', '$Product', '$ProductPrice')";
      mysqli_query($con, $query);
      header("Location: customershomepage.php");
   }
   else{
       echo "Please enter valid info";
   }
  }
?>
<html>
<head>
    <title>Contact us form using php mysql</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>Payment</h3>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="firstname">Name</label>
                <input type="text" name="fi" id="firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Product name</label>
                <input type="text" name="aw" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">No. of Products</label>
                <input type="text" name="ye" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Product price</label>
                <input type="text" name="me" id="message" class="form-control" required>
            </div>
            <div class="form-group">
                  <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>