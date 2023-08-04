<?php

$showAlert = false;

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  require 'partials/_DBconnect.php';

$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];


// Checking if this username already exists in the database or not!!!
$exists = false;

$sql = " Select * from `users` where `username` = '$username' ";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result); 

if($num == 1)
{
    $exists = true;
}

if( ($password == $cpassword) && $exists == false)
{
  $hash = password_hash($password,PASSWORD_DEFAULT);

    $sql = "INSERT into `users`(`username`,`password` , `datetime`) values('$username','$hash', current_timestamp())";
    
    $result = mysqli_query($conn,$sql);

    if($result)
    {
        $showAlert = true;
    }

}

else if($exists == true)
{
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
    This username is already taken. Please try another one!!!
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
}

else 
{
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong> Password Mismatch!!!!</strong> Please type the same password in the confirm password field!!!!
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
}


}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

   <?php  require 'partials/_nav.php'; ?>
    
   <?php

   if($showAlert==true)
   {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!!!</strong> Your account is now created and you can login!!!
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
   }

    ?>

   <h1 class="text-center mt-4"> SignUp to our Website </h1>

   <form class="mx-5"  action="signup.php" method="post">

  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username"  name="username" maxlength="15" >
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" maxlength="23">
  </div>

  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
    <div  class="form-text">Make sure to type the same password!!!.</div>
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" class="btn btn-primary">SignUp</button>
</form>
    
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

  </body>
</html>