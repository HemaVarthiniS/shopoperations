<?php
$servername="localhost";
$username="root";
$password="";
$dbname="college";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if($conn){
//echo "connection ok";
}
else{
    echo "connection failes".mysqli_connect_error();
}
?>