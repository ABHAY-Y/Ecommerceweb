<?php
session_start();
include("connectoili.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $Firstname= $_POST['firstee'];
   $Lastname=$_POST['lastee'];
$Phone=$_POST['phoneee'];
$mail=$_POST['emailee'];
$message=$_POST['messageeee'];
   if(!empty($Firstname) && !empty($Lastname) && !empty($Phone) && !empty($mail) && !empty($message))
   {
      $query="insert into feedbacko (Firstname, Lastname, Phone, mail, message) values('$Firstname','$Lastname','$Phone','$mail','$message')";
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
        <h3>Request Quote or Submit feedback</h3>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="firstname">Firstname</label>
                <input type="text" name="firstee" id="firstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="lastname">Lastname</label>
                <input type="text" name="lastee" id="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" name="phoneee" id="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="emailee" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <input type="text" name="messageeee" id="message" class="form-control" required>
            </div>
            <div class="form-group">
        <button class="btn btn-success" type="submit">Submit</button>
        <button class="btn btn-danger" type="reset">Reset</button>
    </div>
        </form>
    </div>
</body>
</html>