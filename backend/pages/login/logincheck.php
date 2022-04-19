<?php
    session_start();

    include_once(__DIR__ . '/../../dbconnect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `accounts` WHERE username='$username' and password='$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        $_SESSION["login"] = true;
        header('location:../admin/index.php');
    }
?>