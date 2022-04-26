<?php start_content('Home page'); ?>

<?php 

    $getPage = isset($_GET['action']) ? $_GET['action'] : null;

    switch ($getPage) {
        case 'create':
            include_once('../functions_crud/Create.php');
            break;
        case 'update':
            include_once('../functions_crud/Update.php');
            break;
        default:
            include_once('../functions_crud/Read.php');
            break;
    }

?>

<?php end_content(); ?>