<?php
error_reporting(0);
//koneksi
$con = mysqli_connect("localhost","root","", "db_ta");
if (!$con) {
    die("Koneksi EROR" . mysqli_connect_error($con));
}
