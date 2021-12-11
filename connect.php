<?php
    define("servername", "localhost");
    define("username", "root");
    define("password","");
    define("dbname", "MapYourAncestors");

    $conn = mysqli_connect(servername,username,password,dbname);

    if($conn->connect_error){
        echo "unsuccessful";
     }
?>
