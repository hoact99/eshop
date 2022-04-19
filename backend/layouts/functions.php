<?php 
    
    session_start();
    if (!isset($_SESSION["login"]) || $_SESSION["login"] == false) {
        header('location:../login/login.php');
    }

    $title = 'Page title';
    $layout = 'template.php';
    function start_content($page_title = '', $page_layout = 'template.php') {
        global $title, $layout;
        $title = $page_title;
        $layout = $page_layout;
        ob_start(); // bắt đầu khởi động chế độ output buffer
    }
    function end_content() {
    $content = ob_get_clean(); // dừng chế độ output buffer và lấy nội dung vào biến $content
        global $title, $layout;
        include($layout);
    }
    
?>