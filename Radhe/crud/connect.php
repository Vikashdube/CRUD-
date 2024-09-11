<?php

$con = new mysqli("localhost","root", "", "youtub");

if(!$con){
    echo "Not Connected". mysqli_connect_error();

    
}

?>