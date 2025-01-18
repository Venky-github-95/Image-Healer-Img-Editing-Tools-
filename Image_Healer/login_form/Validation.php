<?php
 
 session_start();
 
 
 $con=mysqli_connect('localhost','root','');

 mysqli_select_db($con,'img_healer_db');

 $name=$_POST['user'];
 $pass=$_POST['password'];

 $s="select * from logreg_tb where name = '$name' && password='$pass'";

 $result=mysqli_query($con,$s);

 $num=mysqli_num_rows($result);

 if($num == 1){
    $_SESSION['username'] = $name;
   header('location:Home.php') ;
 }
 else{
  //  header('location:Login.php');
   echo '<script>alert("Invalid Username or Password")</script>';
  require_once 'Login.php';
 }
 ?>