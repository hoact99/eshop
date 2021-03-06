<!-- Nhúng file cấu hình để xác định được Tên và Tiêu đề của trang hiện tại người dùng đang truy cập -->
<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Nhúng file quản lý phần HEAD -->
    <?php include_once('head.php'); ?>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- header -->
        <?php include_once('partials/header.php'); ?>
        <!-- end header -->

        <!-- sidebar -->
        <?php include_once('partials/sidebar.php'); ?>
        <!-- end sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- topbar -->
                <?php include_once('partials/topbar.php'); ?>
                <!-- end topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?=$content;?> 
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- footer -->
            <?php include_once('partials/footer.php'); ?>
            <!-- end footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <form method="post" class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" name="btnLogout">Logout</button>
                </div>
            </div>
        </div>
    </form>

    <?php
        if (isset($_POST['btnLogout'])) {
            session_destroy();
            echo '<script>location.href = "../login/login.php";</script>';
        }
    ?>

    <!-- Nhúng file quản lý phần SCRIPT JAVASCRIPT -->
    <?php include_once('scripts.php'); ?>

    <!-- Các file Javascript sử dụng riêng cho trang này, liên kết tại đây -->
    <!-- <script src="..."></script> -->

</body>

</html>