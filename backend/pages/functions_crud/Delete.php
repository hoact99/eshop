<?php

    // Delete function
    // Hiển thị tất cả lỗi trong PHP
    // Chỉ nên hiển thị lỗi khi đang trong môi trường Phát triển (Development)
    // Không nên hiển thị lỗi trên môi trường Triển khai (Production)
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $TABLENAME = $_GET['tb'];
    
    // Truy vấn database
    // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
    include(__DIR__ . '/../../dbconnect.php');

    // 2. Chuẩn bị câu truy vấn $sql
    // Lấy giá trị khóa chính được truyền theo dạng QueryString Parameter key1=value1&key2=value2...
    $id = $_GET['id'];
    $sql = "DELETE FROM `$TABLENAME` WHERE id=" . $id;
    
    echo "<script>console.log('Debug Objects: " . $id . "' );</script>";
    echo "<script>console.log('Debug Objects: " . $sql . "' );</script>";

    // 3. Thực thi câu lệnh DELETE
    $result = mysqli_query($conn, $sql);

    // 4. Đóng kết nối
    mysqli_close($conn);

    // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
    header('location:../manage/' . $TABLENAME . '.php');
    
?>