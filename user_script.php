<?php
require 'includes/common.php';
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$balance=mysqli_real_escape_string($con,$_POST['balance']);
$insert="insert into customers(name,email,balance) values('$name','$email','$balance')";
$insert_query=mysqli_query($con,$insert);
header('location: customers.php');
?>
