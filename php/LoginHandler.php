<?php

header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With");
include 'dbconnection.php';

$data=file_get_contents("php://input");
$data=JSON_decode($data,true);



$username=$data["username"];
$password=$data["password"];
$q="SELECT * FROM `user` WHERE username='$username' AND password='$password'";



$r=mysqli_query($con,$q);


$b=false;
while($row=mysqli_fetch_assoc($r))
{
    $b=true;

}
if($b)
{
    echo "User Successfully Login";
}
else
{
    echo "Enter Correct Email or password";
}


 
?>