<?php

$con=mysqli_connect("localhost","root","","project");

$uname=$_POST['uname'];
$pno=$_POST['pno'];
$email=$_POST['email'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];

if($con)
{
    if($pass1==$pass2){
        $update=mysqli_query($con,"INSERT INTO projectdetails Values('".$uname."','".$pno."','".$email."','".$pass1."')");
        
        if($update){
            header('location:index.html');
        }

    }
    else
    {
        header('location:signin.html');
    }
}