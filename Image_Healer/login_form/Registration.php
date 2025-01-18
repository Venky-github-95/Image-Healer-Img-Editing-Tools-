<?php
 
 session_start();
 
 header('location:Login.php');

 $con=mysqli_connect('localhost','root','');

 mysqli_select_db($con,'img_healer_db');

 $name=$_POST['user'];
 $pass=$_POST['password'];

 $s="select * from logreg_tb where name = '$name'";

 $result=mysqli_query($con,$s);

 $num=mysqli_num_rows($result);

 if($num == 1){
    echo "Username Already Taken";
 }else{
    $reg="insert into logreg_tb (name,password) values ('$name','$pass')";
    mysqli_query($con,$reg);
    echo "Registration successfully";
 }
 ?>