<?php

  $note_creator = $_SESSION['loggedin_email'];

    $sql = "SELECT * from `notes` where `note_creator` = '$note_creator';";
    $result = mysqli_query($conn,$sql);

    $num = mysqli_num_rows($result);

    if($num>0)
    {
        $Sno = 1;
        while($row = mysqli_fetch_assoc($result))
        {
        echo"
        <tr>
        <th scope='row'>" . $Sno . "</th>
        <td>" . $row['note_title'] . "</td>
        <td>" . $row['note_desc'] . "</td>
        <td> <button type='button' class='btn btn-primary edit' id='".$row['note_id']."' >Edit</button>  <button type='button' class='btn btn-primary delete'>Delete</button></td>
        </tr>";
        $Sno++;
        }
    }

?>