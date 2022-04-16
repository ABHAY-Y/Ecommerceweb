<?php
session_start();
include("connectoili.php");
include("functidf.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $user_name= $_POST['usernamee'];
   $password=$_POST['passwordd'];
   if(!empty($user_name) && !empty($password))
   {
       $user_id= random_num(20);
       
      $query="insert into users (user_id, user_name, password) values('$user_id', '$user_name', '$password')";
      mysqli_query($con, $query);
      header("Location: logoiion.php");
   }
   else{
       echo "Please enter valid info";
   }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Page</title>
</head>
<body>
  <div class="ciao">
<img src="https://logopond.com/logos/dafdd4e68dda46dc129c57a2e4802154.png" width="75" height="75" class="logosolo">
            <h3>Element<span>Jewellers</span></h3>
</div>
<form action="#" method="post" class="sigm">
          <h1>Sign Up</h1>
            <input type="text" name="usernamee" placeholder="Name" required>     
            <input type="password" name="passwordd" placeholder="Password" required>  
            <input type="submit" value="Signup">
        </form>
        <style>
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
}
.ciao h3{
  position: absolute;
  left: 625px;
  top: 100px;
  color: #1DC4E7;
  font-size: 35px;
}
.logosolo{
      position: absolute;
      left: 734px;
      top: 48px;
      border-radius: 5px;
    }
.signupflatcartoon{
  position: absolute;
  left: 10%;
  top: 20%;
}
.signright{
  position: absolute;
  left: 70%;
  top: 20%;
}
.sigm{
  width: 300px;
  padding: 40px;
  position: absolute;
  top:50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background: #212f3d;
  text-align: center;
  border-radius: 30px;
  border-style: solid;
  border-color: red;
}
.sigm h1{
  color: white;
  text-transorm: uppercase;
  font-weight: 500;
}
.sigm input[type="text"],.sigm input[type="password"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #3498db;
  padding: 14px 10px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
}
.sigm input[type="text"]:focus,.sigm input[type="password"]:focus{
width: 280px;
border-color: #2ecc71;
}
.sigm input[type="submit"]{
  border:0;
  background: none;
  display: block;
  margin: 20px auto;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  width: 200px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}
.sigm input[type="submit"]:hover{
  background: #2ecc71;
}

</style>
</body>
</html>