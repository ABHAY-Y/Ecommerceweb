<?php
include 'connectoili.php';
$id = $_GET['idth'];
$deletequery = "delete from customio where id=$id";
$query = mysqli_query($con,$deletequery);
header('location:customerss.php');
?>
