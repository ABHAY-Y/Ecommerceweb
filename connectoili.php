<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="loginminiproj";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("failed to establish");
}