<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $db = "miniproject";
 

 $conn = mysqli_connect($servername, $username, $password, $db);

 if(!$conn){
    die("Failed To connect Database");
 }
?>