<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nieuwsbrief";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// $connection = mysqli_connect('localhost','root','','nieuwsbrief');
    
// if($connection){
//     echo "we are connected";
//  }