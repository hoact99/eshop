<?php $TABLENAME = $_GET['tb']; ?>

<div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Thêm mới Thương hiệu </h5>
        </div>
        <div class="card-body">
            <form action="" method="post" name="frm$TABLENAME" id="frm$TABLENAME" class="w-100">
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="name">Tên thương hiệu</label>
                        <span id="name_length" class="text-right"></span>
                    </div>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Tên thương hiệu" value="" maxlength="50" minlength="3" oninput="$('#name_length').text(`${this.value.length}/${this.maxLength}`);">
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="description">Mô tả loại sản phẩm</label>
                        <span id="description_length" class="text-right"></span>
                    </div>
                    <textarea type="text" class="form-control" id="description" name="description" placeholder="Mô tả thương hiệu" maxlength="255" oninput="$('#description_length').text(`${this.value.length}/${this.maxLength}`);"></textarea>
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
                $name = $_POST['name'];
                $description = $_POST['description'];

                // Thực thi câu lệnh SQL QUERY
                // Câu lệnh INSERT
                $sql = "INSERT INTO `brands` (name, description) VALUES ('$name', '$description');";

                // Thực thi INSERT
                mysqli_query($conn, $sql) or die("<b>Có lỗi khi thực thi câu lệnh SQL: </b>" . mysqli_error($conn) . "<br /><b>Câu lệnh vừa thực thi:</b></br>$sql");

                // Đóng kết nối
                mysqli_close($conn);

                // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
                // Điều hướng bằng Javascript
                header('location:../manage/' . $TABLENAME . '.php');
            }
        ?>

</div>