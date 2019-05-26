<?php
define("BASE_URL", "http://alur-akademik.com");
define("DB_HOST", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "db_ta");

$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
if (!$con) {
    die("Koneksi EROR" . mysqli_connect_error($con));
}
?>
