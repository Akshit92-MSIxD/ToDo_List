<?php

  if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['title'] , $_POST['desc']))
  {
  
  $title = $_POST['title'];
  $desc = $_POST['desc'];
  
  
  $query = "INSERT into `notes`(`Title`,`Description`,`Tstamp`) values('$title','$desc',current_timestamp())";
  
  $result = mysqli_query($conn,$query);
  
   if($result)
   {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
     Your notes has been added successfully!!!
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
   }
  
  }

?>