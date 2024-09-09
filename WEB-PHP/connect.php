<?php
$servername = "localhost";
$username = "root";
$password = "";


try {
    // แก้ไขการตั้งค่าการเชื่อมต่อ PDO
    $conn = new PDO("mysql:host=$servername;dbname=regis_db;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>


