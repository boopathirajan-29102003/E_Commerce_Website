<?php

$con=mysqli_connect("localhost","root","","project");

$info=$_POST['info'];
$pass=$_POST['pass'];


$get=mysqli_query($con,"SELECT * FROM projectdetails WHERE pno='".$info."'");
$fetch=mysqli_fetch_array($get);

$upno=$fetch['pno'];
$upass=$fetch['password'];


if($info == $upno  && $pass == $upass )
{
    header('location:index.html');
}
else{

    header('location:login.html');
}
?>