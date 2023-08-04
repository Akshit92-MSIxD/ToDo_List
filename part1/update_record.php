<?php
    
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['editTitle'] , $_POST['editdesc'])) // isset(var1,......) checks if variable is set or not , returns true if declared and not NULL otherwise false!!!
    {
      
    $SnoEdit= $_POST['SnoEdit'];
    
    $editTitle = $_POST['editTitle'];
    $editdesc = $_POST['editdesc'];
    
    $query = "UPDATE `notes` SET `Title` = '$editTitle' , `Description` = '$editdesc' where `notes`.`Sno` = '$SnoEdit' ";
    
    $result = mysqli_query($conn,$query);
    
     if($result)
     {
      echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
       Your note has been edited successfully!!!
      <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
     }
    }
    

?>