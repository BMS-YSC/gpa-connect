<?php
$servername = "localhost";
$username = "root";
$password = "Pass@123";
$dbname = "cpeproj";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname)
    or die("Error while connecting");

