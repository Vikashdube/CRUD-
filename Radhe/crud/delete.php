
<?php

include 'connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from `crud` where id = $id";
    $result = mysqli_query($con,$sql);

    if($result){
        // echo "Delete successfully";
        header('location:display.php');
    }else{
        echo "Not Deleted". mysqli_connect_error();

    }
}


?>