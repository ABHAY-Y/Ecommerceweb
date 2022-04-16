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
    <title>Document</title>
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
    background-image: url("bgimg.jpg");
    height: 700px;
    width: 100%;
    background-repeat: no-repeat;
    background-position: center;
    background-size: 2050px;
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

.wrapper .form-container{
    width: 100%;
    overflow: hidden;
}

.form-container .slide-controls{
    position: relative;
    display: flex;
    height: 50px;
    width: 100%;
    overflow: hidden;
    border-radius: 20px;
    margin: 30px 0 10px 0;
    justify-content: space-between;
    border: 1px solid lightgray;
}
.button1 button {
    height: 50px;
    width: 100%;
    margin-top: 20px;
    font-size: 28px;
    background-color: #447caa;
    border-radius: 12px;
}
a{
    color: #000;
}
a:hover {
    text-emphasis-color: red;
    color: red;
    text-decoration:double;
}
.slide-controls .slide{
    height: 100%;
    width: 100%;
    z-index: 1;
    color: #fff;
    font-size: 18px;
    font-weight: 600;
    text-align: center;
    line-height: 48px;
    cursor: pointer;
    transition: all 0.6s ease;
}

.slide-controls .signup{
    color: #000;
}
.slide-controls .slide-tab{
    position: absolute;
    height: 100%;
    width: 50%;
    left: 0;
    z-index: 0;
    border-radius: 20px;
    transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
    background-color: red;
}
input[type="radio"]{
    display: none;
}
#signup:checked ~ .slide-tab{
    left: 50%;
}
#signup:checked ~ .signup{
    color: #fff;
}
#signup:checked ~ .login{
    color: #000;
}
.form-container .form-inner {
    display: flex;
    width: 200%;
}
.form-container .form-inner form{
    width: 50%;
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
        <pre>                      <center><img src="element.jpeg" alt="Avatar"  width="100"></center></pre>
        </div>
    <div class="form-container">
    <div class="slide-controls">
      <input type="radio" name="slider" id="login" checked>
      <input type="radio" name="slider" id="signup">
     <label for="login" class="slide login">Login</label>
     <label for="signup" class="slide signup">Signup</label>
     <div class="slide-tab"></div>
    </div>
      <div class="form-inner">
        <form action="#" class="login">
          <div class="field">
            <input type="email" placeholder="Email Address" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Password" required>
          </div>
         
          <div class="button1">
            <button> <a href="#" >Login</a> </button>
          </div>
          <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
        </form>

        <form action="#" class="signup">
          <div class="field">
            <input type="email" placeholder="Email Address" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Password" required>
          </div>
          <div class="field">
            <input type="password" placeholder="Confirm Password" required>
          </div>
          <div class="field">
            <input type="submit" value="Signup">
          </div>
</form>
      </div>
    </div>
</div>
<script>
    const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
</script>
</body>
</html>