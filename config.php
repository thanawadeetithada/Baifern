<?php
$host = "localhost"; // ชื่อโฮสต์
$username = "root"; // ชื่อผู้ใช้ฐานข้อมูล
$password = ""; // รหัสผ่าน (ถ้าไม่ได้ตั้ง ให้ปล่อยว่าง)
$database = "blog_db"; // ชื่อฐานข้อมูล

$conn = new mysqli($host, $username, $password, $database);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
