<?php

$login = false;
$showError = false;

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
require 'partials/_DBconnect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * from `users` where `username` = '$username' ";

$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);

if($num>=1)
{

   $row = mysqli_fetch_assoc($result);

   if(password_verify($password,$row['password'])) // Note: $password will be first converted into hash then verify!!!
   {
    $login = true;

    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    header('location: welcome.php');
   }
   else
   {
      $showError = true;
   }

}
else
{
  $showError = true;
}


}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>

   <?php  require 'partials/_nav.php'; ?>
    
   <?php

   if($login==true)
   {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Success!!!</strong> You are logged in!!!
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
   }

   if($showError==true)
   {
    echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>Invalid Credentials!!!</strong> Your username and password is incorrect!!!
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
   }

    ?>

   <h1 class="text-center mt-4"> Login to our Website </h1>

   <form class="mx-5"  action="login.php" method="post">

  <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username"  name="username" maxlength="15">
  </div>

  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password" maxlength="23">
  </div>


  <button type="submit" class="btn btn-primary">Login</button>
</form>


    
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

  </body>
</html>