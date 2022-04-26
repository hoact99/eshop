<?php $TABLENAME = $_GET['tb']; ?>

<div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Thêm mới <?= $CONFIG_NAME_VI ?></h5>
        </div>
        <div class="card-body">
            <form action="" method="post" name="frm$TABLENAME" id="frm$TABLENAME" class="w-100">
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="name">Nhập tên <?= $CONFIG_NAME_VI ?></label>
                        <span id="name_length" class="text-right"></span>
                    </div>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Tên <?= $CONFIG_NAME_VI ?>" value="" maxlength="50" minlength="3" oninput="$('#name_length').text(`${this.value.length}/${this.maxLength}`);">
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="description">Nhập mô tả <?= $CONFIG_NAME_VI ?></label>
                        <span id="description_length" class="text-right"></span>
                    </div>
                    <textarea type="text" class="form-control" id="description" name="description" placeholder="Mô tả <?= $CONFIG_NAME_VI ?>" maxlength="255" oninput="$('#description_length').text(`${this.value.length}/${this.maxLength}`);"></textarea>
                </div>
                <button class="btn btn-primary" name="btnSave">Lưu dữ liệu</button>
                <a class="btn btn-warning" href="<?= $TABLENAME ?>.php" name="btnCancel">Quay lại</a>
            </form>
        </div>
    </div>

        <?php 
            // Truy vấn database
            // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
            include(__DIR__ . '/../../dbconnect.php');

            // 3. Nếu người dùng có bấm nút "Lưu dữ liệu"
            if (isset($_POST['btnSave'])) {
                // Lấy dữ liệu người dùng hiệu chỉnh gởi từ REQUEST POST
                $name = $_POST['name'];
                $description = $_POST['description'];

                // Thực thi câu lệnh SQL QUERY
                // Câu lệnh INSERT
                $sql = "INSERT INTO `$TABLENAME` (name, description) VALUES ('$name', '$description');";

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