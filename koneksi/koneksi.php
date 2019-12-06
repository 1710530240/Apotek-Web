<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "apotek";

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn->connect_error) {
    echo "koneksi gagal:" . mysqli_error($conn);
}
