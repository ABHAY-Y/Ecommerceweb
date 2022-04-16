<?php
session_start();
include("connectoili.php");
include("afunc.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $name= $_POST['useeeer'];
   $paaswd=$_POST['passsswd'];
   if(!empty($name) && !empty($paaswd))
   {
      $user_i = random_num(20);
      $query="insert into customio (user_i, name, paaswd) values('$user_i','$name','$paaswd')";
      mysqli_query($con, $query);
      header("Location: customerslogin.php");
      
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
  <title>Signup form | Elements Jewellery |</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
}
html,body{
    display: grid;
    place-items: center;
    background-image: url("https://media.istockphoto.com/photos/abstract-gold-background-picture-id524653165?b=1&k=20&m=524653165&s=170667a&w=0&h=rlXBabJz89vkGRzVE0HTOXMcdkPoOiNwoPPHXxNhVac=");
    height: 700px;
    width: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 2250px;
}
.wrapper{
    overflow: hidden;
    max-width: 390px;
    background: white;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.5);
}
.wrapper .title-text{
    display: flex;
    width: 200%;
}
.wrapper .title-text .title{
    width: 50%;
    font-size: 35px;
    font-weight: 700;
    text-align: center;
}
.button1 button {
    height: 50px;
    width: 100%;
    margin-top: 20px;
    font-size: 30px;
    background-color: #447caa;
    border-radius: 12px;
}
a{
    color: #fff;
    text-align: center;
    text-decoration: none;
}
a:hover {
    color: rgb(20, 33, 204);
    text-decoration: underline;
}
input[type="radio"]{
    display: none;
}
.form-inner form .field{
    height: 50px;
    width: 100%;
    margin-top: 20px;
}
.form-inner form .field input{
    height: 100%;
    width: 100%;
    outline: none;
    padding-left: 15px;
    font-size: 17px;
    border-radius: 20px;
    border: 1px solid lightgray;
    border-bottom-width: 2px;
    transition: all 0.4s ease;
}
img {
  border-radius: 20%;
}
.field button{
    height: 50px;
    width: 100%;
    margin-top: 20px;
    color:#7309a4;
}
.form-inner form .field input:focus{
    border-color: rgb(74, 4, 139);
}
.form-inner form .pass-link{
    margin-top: 5px;
}
.form-inner form .signup-link{
    text-align: center;
    margin-top: 30px;
}
.form-inner form .pass-link a,
.form-inner form .signup-link a{
    color: coral;
    text-decoration: none;
}
.form-inner form .signup-link {
    text-align: center;
    margin-top: 30px;
}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{
    text-decoration: underline;
}
form .field input[type="submit"]{
    color: #fff;
    font-size: 20px;
    font-weight: 500;
    padding-left: 0px;
    border: none;
    cursor: pointer;
    background: #447caa;
}
.abcde{
    position: absolute;
    left: 745px;
    background-color: #447caa; 
    border: none;
    color: white;
    padding: 5px 3px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 10px;
}
.signupflcartoon{
  position: absolute;
  left: 10%;
  top: 20%;
}
.signrig{
  position: absolute;
  left: 70%;
  top: 20%;
}
.jewellll{
    color: #1DC4E7;   
}
.title-text h3{
    color: #1DC4E7;
    font-family: sans-serif;
}
</style>
<body>
<div class="wrapper">
    <div class="title-text">
        <div class="title login">
            <h3>Element<span class="jewellll">Jewellers</span><h3>  
                 <h6><u>Signup</u></h6></div>                         
<div class="title signup">
<pre>
 <u>Signup Form</u></pre> </div>
    </div>
    <div class="imgcontainer">
        <pre>                <center> <img src="https://logopond.com/logos/dafdd4e68dda46dc129c57a2e4802154.png" alt="Avatar"  width="100"> </center></pre>
        </div>
      <div class="form-inner">
        <form action="#" class="login" method="post">
          <div class="field">
            <input type="text"  name="useeeer" placeholder="Username" required>
          </div>
          <div class="field">
            <input type="password" name="passsswd" placeholder="Password" required>
          </div>
          <div class="field">
            <input type="password"  name="passsswd" placeholder="Confirm Password" required>
          </div>
          <input type="submit" value="Signup" class="abcde">
        </form>
      </div>
    </div>
</div>
</body>
</html>