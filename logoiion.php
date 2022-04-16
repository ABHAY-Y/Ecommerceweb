<?php
session_start();
include("connectoili.php");
include("functidf.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $user_name= $_POST['usernamee'];
   $password=$_POST['passwordd'];
   if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
   {
      $query="select * from users where user_name = '$user_name' limit 1";
      $result=mysqli_query($con, $query);
      if($result)
      {
        if($result && mysqli_num_rows($result)>0)
        {
            $user_data=mysqli_fetch_assoc($result);
           
           if($user_data['password']===$password)
           {
            $_SESSION['user_id'] =$user_data['user_id'];
            header("Location: homepagee.php");
            die; 
           }
        }
      }
      echo "Invalid username or password!";
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
  <title>Login page</title>
</head>
<body> 
<div class="smash">
<img src="https://logopond.com/logos/dafdd4e68dda46dc129c57a2e4802154.png" width="75" height="75" class="logologin">
            <h3>Element<span>Jewellers</span></h3>
</div>
<div class="verticline"></div>
<form action="#" method="post" class="cui">
<img src="https://logopond.com/logos/dafdd4e68dda46dc129c57a2e4802154.png" width="75" height="75" class="logologinin">
  <h1>
    Login
</h1>
            <input type="text" name="usernamee" placeholder="username" required>
            <input type="password" name="passwordd" placeholder="Password" required>
            <input type="submit" value="login">
          <div class="linko">Not a member? <a href="http://localhost/mproj/signonin.php" class="gogo">Signup now</a></div>
        </form>
        <style>
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background-image: url('https://htmlcolorcodes.com/assets/images/html-color-codes-color-tutorials-hero.jpg');
 
}
.cui{
  width: 300px;
  padding: 40px;
  position: absolute;
  top:50%;
  left: 70%;
  transform: translate(-50%, -50%);
  background: #212f3d;
  text-align: center;
  border-radius: 30px;
  height: 500px;
  border-style: solid;
  border-color: #deecb8;
}
.cui h1{
  color: white;
  text-transform: uppercase;
  font-weight: 500;
}
.cui input[type="text"],.cui input[type="password"]{
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
.cui input[type="text"]:focus,.cui input[type="password"]:focus{
width: 280px;
border-color: #2ecc71;
}
.cui input[type="submit"]{
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
.cui input[type="submit"]:hover{
  background: #2ecc71;
}
.linko{
  margin: 0;
  padding: 0;
  color: #DC143C;
}
.gogo{
  text-decoration: none;
  color: #f4d03f;
}
.smash{
  position: absolute;
  left: 10%;
  top: 32%;
}
.smash h3{
  position: absolute;
        color: #fff;
        font-size: 50px;
        font-weight: 900;
        left: 100px;
    }
    .smash span{
      position: absolute;
        color: #1DC4E7;   
    }
    .logologin{
      position: absolute;
      left: 15px;
      top: 48px;
      border-radius: 5px;
    }
    .logologinin{
      border-radius: 5px;
    }
    .verticline{
      position: absolute;
      border: 0.1px  solid gray;
      color: solid white;
      height: 600px;
      top: 69px;
      left: 50%;
      align: center;
    }
</body>
</html>

 
