<?php

/* 
        Ways to connect to MySQL database :

1. MySQLi extension (Can be used in procedural way or Object oriented way!!!) (work with only MYSQL DB's)
2. Php data objects (PDO) (work with so many different DB's!!!)

 */



 // Conneting to the MySQL Database : 

 $servername = "localhost"; // Credentidals required to connect to the DB!!!
 $username = "root";
 $password = "";
 $database = "akshit";


        // -----> Create a connection :

        $conn = mysqli_connect($servername,$username,$password , $database);


        // ----->  Die if connection was not succesful :

            if(!$conn)
            {
                die("Sorry we failed to connect : " . mysqli_connect_error());
            }
            // else
            // {
            //     echo "connection was successful <br>";
            // }

       

                


    
?>