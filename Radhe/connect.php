<?php
$server = "localhost";
$user="root";
$password="";
$dbname= "youtub";

$conn = mysqli_connect($server,$user,$password,$dbname);


if($conn){
    echo "Connection successful";
}else{
    die ("Connection faild".mysqli_connect_error());

}


?>