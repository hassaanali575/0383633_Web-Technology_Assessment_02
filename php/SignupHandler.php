<?php

header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With");
include 'dbconnection.php';



$data=file_get_contents("php://input");
$data=JSON_decode($data,true);



$username=$data["username"];
$password=$data["password"];
$q="INSERT INTO `user`(`username`, `password`) VALUES ('$username','$password')";


$r=mysqli_query($con,$q);


if($r)
{
    echo "User Successfully Registered";
     
}
else
{
    echo "User does not Register";

}

?>