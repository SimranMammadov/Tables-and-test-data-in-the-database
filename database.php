<?php
$hostname     = "localhost";
$username     = "root";
$password     = "";
$databasename = "users";
$conn = mysqli_connect($hostname, $username, $password,$databasename);
if (!$conn) {
    die("Xəta baş verdi: " . mysqli_connect_error());
}
?>