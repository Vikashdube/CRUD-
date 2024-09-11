<?php

include 'connect.php';
$id = $_GET['updateid'];

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update `crud` set id=$id, name='$name',email='$email',mobile='$mobile',password='$password'  ";



     $result = mysqli_query($con,$sql);

     if($result){
        // header('location:display.php');
        echo "Update successfully";
     }else{
        echo "not update". mysqli_connect_error();
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

    <title>crud</title>
</head>

<body>
    

    <div class="container">

    <h1 class="text-center mt-3"><i>Form</i></h1>

    <form method="post">
        <div class="form-group mt-5">  
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
            
        </div>
        <div class="form-group mt-3"> 
            <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Enter your email">
        </div>

        <div class="form-group mt-3">   
            <input type="text" name="mobile" class="form-control" id="exampleInputPassword1" placeholder="Enter your Mobile">
        </div>
        
        <div class="form-group mt-3">   
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your password">
        </div>
        






        <button type="submit" name="submit" class="btn btn-primary w-100 mt-2">Submit</button>
    </form>

    </div>


</body>

</html>