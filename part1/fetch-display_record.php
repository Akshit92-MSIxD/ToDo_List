<?php


    $sql = "SELECT * from `Notes`;";
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
        <td>" . $row['Title'] . "</td>
        <td>" . $row['Description'] . "</td>
        <td> <button type='button' class='btn btn-primary edit' id='".$row['Sno']."' >Edit</button>  <button type='button' class='btn btn-primary delete'>Delete</button></td>
        </tr>";
        $Sno++;
        }
    }

?>