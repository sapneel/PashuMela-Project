<?php
/*
Author: Sapneel Saurabha
Website: https://sapneelsaurabha.wordpress.com
*/
?>

<?php


$servername = "localhost";
$username = "root";
$password = "";
$db = "pashumela";



$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>