<?php
    session_start();

    include_once(__DIR__ . '/../../dbconnect.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `accounts` WHERE username='$username' and password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    $id = $row["id"];

    $sql = 
    "SELECT persons.name as person_name, permissions.name as permission_name
    FROM `accounts` 
    JOIN `persons` ON persons.id='$id' JOIN `permissions` ON accounts.id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    $fullname = $row["person_name"];
    $permission = $row["permission_name"];

    if ($count == 1) {
        $_SESSION["login"] = true;
        $_SESSION["fullname"] = $fullname;
        $_SESSION["permission"] = $permission;
        header('location:../admin/index.php');
    }

?>