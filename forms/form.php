<?php
require_once("../includes/conn.php");
if(isset($_POST['add'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
     
   $sql="INSERT into userdetail(firstname,lastname,email,phone,message)
   VALUES ('$firstname','$lastname','$email','$phone','$message')";
mysqli_query($conn,$sql);
header('location:../index.php');
}
?>