<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database2000";

$conn = mysqli_connect($servername, $username, $password, $dbname);
   if(!$conn){
            echo "Error connecting to database";
   }
   echo "Datbase connected successfully";