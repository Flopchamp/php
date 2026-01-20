<?php
    $db_host = "localhost:3300";
    $db_user = "root";
    $db_pass = "";
    $db_name = "businessdb";
    $conn = "";

try {

    $conn = mysqli_connect($db_host,
                             $db_user,
                              $db_pass, 
                              $db_name);
} catch (mysqli_sql_exception) {
    echo "Connection failed <br> ";
        }


            if($conn){
                echo "Connection Successful <br>";   
            }
            else{
                echo "Connection Failed <br>";
            }
// : Uncaught mysqli_sql_exception 127.0.0.1:3300.
?>