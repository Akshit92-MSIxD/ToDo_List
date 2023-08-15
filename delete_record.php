<?php


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['SnoDelete']))
{
  
  $SnoDelete = $_POST['SnoDelete'];

  $query = " DELETE from `notes` where `Sno` = '$SnoDelete';";

  $result = mysqli_query($conn,$query);

  if($result)
  {
    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
   Your note has been deleted successfully!!!
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
  }


}

?>