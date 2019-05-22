<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "db_ta";

$con = mysqli_connect($servername, $username, $password, $database);
if (!$con) {
    die("Koneksi EROR" . mysqli_connect_error($con));
}
?>
