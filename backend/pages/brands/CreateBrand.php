<?php include '../../layouts/functions.php'; ?>
<?php start_content('Home page'); ?>

<div class="d-none">

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Thêm mới Thương hiệu </h5>
        </div>
        <div class="card-body">
            <form action="" method="post" name="frmBrand" id="frmBrand" class="w-100">
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="brand_name">Tên thương hiệu</label>
                        <span id="brand_name_length" class="text-right"></span>
                    </div>
                    <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Tên thương hiệu" value="" maxlength="50" minlength="3" oninput="$('#brand_name_length').text(`${this.value.length}/${this.maxLength}`);">
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="brand_description">Mô tả loại sản phẩm</label>
                        <span id="brand_description_length" class="text-right"></span>
                    </div>
                    <textarea type="text" class="form-control" id="brand_description" name="brand_description" placeholder="Mô tả thương hiệu" maxlength="255" oninput="$('#brand_description_length').text(`${this.value.length}/${this.maxLength}`);"></textarea>
                </div>
                <button class="btn btn-primary" name="btnSave">Lưu dữ liệu</button>
                <button class="btn btn-warning" name="btnCancel">Quay lại</button>
            </form>
        </div>
    </div>

        <?php 
            // Truy vấn database
            // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
            include_once(__DIR__ . '/../../dbconnect.php');

            // 2. Nếu người dùng có bấm nút "Quay lại"
            if (isset($_POST['btnCancel'])) {
                echo '<script>location.href="AllBrands.php";</script>';
            }

            // 3. Nếu người dùng có bấm nút "Lưu dữ liệu"
            if (isset($_POST['btnSave'])) {
                // Lấy dữ liệu người dùng hiệu chỉnh gởi từ REQUEST POST
                $brand_name = $_POST['brand_name'];
                $brand_description = $_POST['brand_description'];

                // Thực thi câu lệnh SQL QUERY
                // Câu lệnh INSERT
                $sql = "INSERT INTO `brands` (name, description) VALUES ('$brand_name', '$brand_description');";

                // Thực thi INSERT
                mysqli_query($conn, $sql) or die("<b>Có lỗi khi thực thi câu lệnh SQL: </b>" . mysqli_error($conn) . "<br /><b>Câu lệnh vừa thực thi:</b></br>$sql");

                // Đóng kết nối
                mysqli_close($conn);

                // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
                // Điều hướng bằng Javascript
                echo '<script>location.href="AllBrands.php";</script>';
            }
        ?>

</div>

<?php end_content(); ?>