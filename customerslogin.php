<?php
session_start();
include("connectoili.php");
include("afunc.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
   $name= $_POST['useeeer'];
   $paaswd=$_POST['passsswd'];
   if(!empty($name) && !empty($paaswd) && !is_numeric($name))
   {
      $query="select * from customio where name = '$name' limit 1";
      $result=mysqli_query($con, $query);
      if($result)
      {
        if($result && mysqli_num_rows($result)>0)
        {
            $user_data=mysqli_fetch_assoc($result);
           
           if($user_data['paaswd']===$paaswd)
           {
            $_SESSION['user_i'] =$user_data['user_i'];
            header("Location: customershomepage.php");
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
 
  <title>Login form | Elements Jewellery |</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Times New Roman', Times, serif;
}
html,body{
    display: grid;
    place-items: center;
    background-image: url("goldbgimg.jpg");
    height: 700px;
    width: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 2250px;
}
.wrapper{
    overflow: hidden;
    max-width: 390px;
    background: #fff;
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
.button {
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
  border-radius: none;
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
.buttu{
    position: relative;
    left: 35%;
    top: 20px;
    background-color: #447caa;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    border-radius: 10px;
}

</style>
<body>
  <div class="wrapper">
    <div class="title-text">
        <div class="title login">
            <h3>Elements Jewellery Store<h3>
                <hr size="3" width="90%" color="black">
                 <h6><u>Login Portal</u></h6></div>
                           
<div class="title signup">
<pre>
 <u>Signup Form</u></pre> </div>
    </div>
    <div class="imgcontainer">
        <pre>                <center><img src="https://logopond.com/logos/dafdd4e68dda46dc129c57a2e4802154.png" alt="Avatar"  width="100"></center></pre>
        </div>
      <div class="form-inner">
        <form action="#" class="login" method="post">
          <div class="field">
            <input type="text" name="useeeer"placeholder="Username" required>
          </div>
          <div class="field">
            <input type="password" name="passsswd" placeholder="Password" required>
          </div>
          <input type="submit" value="login" class="buttu">
          <div class="signup-link">Not a member? <a href="customerssignup.php">Signup now</a></div>
        </form>

       
      </div>
    </div>
</div>

  
</body>
</html>