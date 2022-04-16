<?php
function check_customerslogin($con)
{
    if(isset($_SESSION['user_i']))
    {
        $id=$_SESSION['user_i'];
        $query="select * from customio where user_i = '$id' limit 1";
        $result= mysqli_query($con, $query);
        if($result && mysqli_num_rows($result)>0)
        {
            $user_data=mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    header("Location: customerslogin.php");
    die;
}
function random_num($length)
{
    $text="";
    if($length<5)
    {
        $length=5;
    }
    $len=rand(4,$length);
    for($i=0; $i<$len; $i++)
    {
        $text .= rand(0,9);
    }
    return $text;
}