<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];

    $sql="insert into crud (name,email,mobile,password)
    values ('$name','$email','$mobile','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
      // echo "Data inserted successfully";
      header('location:display.php');
    }else{
        die(mysqli_error($con));
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <title>Crud operation</title>
  </head>
  <body>
    <!-- Form div -->
    <div class="container my-5">
        <form method="post">

        <!-- Name div -->
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" 
            placeholder="Enter your name" 
            name="name" autocomplete="off">
        </div>

        <!-- Email div -->
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" 
            placeholder="Enter your email" 
            name="email" autocomplete="off">
        </div>

        <!-- Mobile div -->
        <div class="form-group">
            <label>Mobile</label>
            <input type="text" class="form-control" 
            placeholder="Enter your number" 
            name="mobile" autocomplete="off">
        </div>

        <!-- Password div -->
        <div class="form-group">
            <label>Password</label>
            <input type="text" class="form-control" 
            placeholder="Enter your password" 
            name="password" autocomplete="off">
        </div>
        
        <button type="submit" class="btn btn-primary" 
        name="submit">Submit</button>
      </form>

    </div>
    
  </body>
  
  
  
  
</html>