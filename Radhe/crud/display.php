<?php
 include 'connect.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

<div class="container">

  <button class="btn btn-primary mt-5"><a href="signup.php" class="text-light">Add</a></button>
    
  <table class="table mt-3">
  <thead>
    <tr>
      <th scope="col">Sl_no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">password</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>

 <?php
   
  $sql ="select * from `crud`";
  $result = mysqli_query($con,$sql);

  if($result){
    
    while ($row=mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];


        echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password.'</td>
      
     <td>
      <button class="btn btn-primary" ><a href="update.php? updateid='.$id.'" class= "text-light">Update</a></button>
      <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class = "text-light">Delete</a></button>
       
      </td>



    </tr> ';

    }

  }

?>


  </tbody>
</table>
 </div>

</body>
</html>