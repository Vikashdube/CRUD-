
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';

    $username = $_POST['uname'];
    $password = $_POST['upassword'];

    $sql="INSERT INTO `registration` (`uneme`, `upassword`) VALUES ( '$username', '$password')";

    $result = mysqli_query($conn,$sql);

    if($result){
        echo "Data inserted Successful";
    }else{
        echo ("Not Connected Successful". mysqli_connect_error());
        
    }
}


?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Signup Form</title>
</head>

<body>
    <h1 class="text-center mt-4 ">registration Form</h1>

    <div class="container">

        <form action="sign.php" method="post">
            <div class="form-group">
                
                <input type="text" name="uname" class="form-control mt-5"  placeholder="Enter your username">
                
            </div>
            <div class="form-group">
                
                <input type="password" name="upassword" class="form-control mt-4"  placeholder="Password">
            </div>
            
            <button type="submit" class="btn btn-primary w-100 mt-4">Submit</button>
        </form>

    </div>

</body>

</html>