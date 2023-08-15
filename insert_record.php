<?php

  if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['title'] , $_POST['desc']))
  {
  
  $title = $_POST['title'];
  $desc = $_POST['desc'];
  
  
  $query = "INSERT into `notes`(`note_title`,`note_desc`,`note_creator`) values('$title','$desc','xyz@gmail.com')";
  
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