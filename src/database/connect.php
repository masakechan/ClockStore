<?php
// Thông tin kết nối
$host = 'localhost'; // hoặc '127.0.0.1'
$dbname = 'Shop_Clock';
$username = 'username'; // Tên người dùng của bạn
$password = 'password'; // Mật khẩu của bạn

// Kết nối đến cơ sở dữ liệu
$conn = new mysqli($host, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

echo "Kết nối thành công!";
?>
