<?php include '../../layouts/functions.php'; ?>
<?php start_content('Home page'); ?>

<div>

    <?php
        // Hiển thị tất cả lỗi trong PHP
        // Chỉ nên hiển thị lỗi khi đang trong môi trường Phát triển (Development)
        // Không nên hiển thị lỗi trên môi trường Triển khai (Production)
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        
        // Truy vấn database
        // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
        include_once(__DIR__ . '/../../dbconnect.php');

        /* --- 
        --- 2. Truy vấn dữ liệu Loại Sản phẩm theo khóa chính
        --- 
        */
        // Chuẩn bị câu truy vấn $sqlSelect, lấy dữ liệu ban đầu của record cần update
        // Lấy giá trị khóa chính được truyền theo dạng QueryString Parameter key1=value1&key2=value2...
        $brand_id = $_GET['id'];
        $sqlSelect = "SELECT * FROM `brands` WHERE id=$brand_id;";

        // Thực thi câu truy vấn SQL để lấy về dữ liệu ban đầu của record cần update
        $resultSelect = mysqli_query($conn, $sqlSelect);
        $brandRow = mysqli_fetch_array($resultSelect, MYSQLI_ASSOC); // 1 record
        /* --- End Truy vấn dữ liệu Sản phẩm theo khóa chính --- */
    ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Chỉnh sửa Thương hiệu</h5>
        </div>
        <div class="card-body">
            <form action="" method="post" name="frmBrand" id="frmBrand" class="w-100">
                <div class="form-group">
                    <label for="brand_id">Mã thương hiệu</label>
                    <input type="text" class="form-control" id="brand_id" name="brand_id" placeholder="Mã" value="<?= $brandRow['id'] ?>" readonly>
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="brand_name">Tên thương hiệu</label>
                        <span id="brand_name_length" class="text-right"></span>
                    </div>
                    <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Tên thương hiệu" value="<?= $brandRow['name'] ?>" maxlength="50" oninput="inputLength('brand_name_length', this);">
                </div>
                <div class="form-group">
                    <div class="d-flex justify-content-between">
                        <label for="brand_description">Mô tả</label>
                        <span id="brand_description_length" class="text-right"></span>
                    </div>
                    <textarea type="text" class="form-control" id="brand_description" name="brand_description" placeholder="Mô tả thương hiệu" maxlength="255" oninput="inputLength('brand_description_length', this);"><?= $brandRow['description'] ?></textarea>
                </div>
                <button class="btn btn-primary" name="btnSave">Lưu dữ liệu</button>
                <button class="btn btn-warning" name="btnCancel">Quay lại</button>
            </form>
        </div>
    </div>

    <?php

        // 2. Nếu người dùng có bấm nút "Quay lại"
        if (isset($_POST['btnCancel'])) {
            echo '<script>location.href="AllBrands.php";</script>';
        }

        // 3. Nếu người dùng có bấm nút "Lưu dữ liệu"
        if (isset($_POST['btnSave'])) {
            // Lấy dữ liệu người dùng hiệu chỉnh gởi từ REQUEST POST
            $brand_name = $_POST['brand_name'];
            $brand_description = $_POST['brand_description'];

            // Kiểm tra ràng buộc dữ liệu (Validation)
            // Tạo biến lỗi để chứa thông báo lỗi
            $errors = [];

            // Validate Tên loại Sản phẩm
            // required
            if (empty($brand_name)) {
                $errors['brand_name'][] = [
                    'rule' => 'required',
                    'rule_value' => true,
                    'value' => $brand_name,
                    'msg' => 'Vui lòng nhập tên Thương hiệu'
                ];
            }
            // minlength 3
            if (!empty($brand_name) && strlen($brand_name) < 3) {
                $errors['brand_name'][] = [
                    'rule' => 'minlength',
                    'rule_value' => 3,
                    'value' => $brand_name,
                    'msg' => 'Tên Thương hiệu phải có ít nhất 3 ký tự'
                ];
            }
        }
    ?>

    <!-- Nếu có lỗi VALIDATE dữ liệu thì hiển thị ra màn hình 
    - Sử dụng thành phần (component) Alert của Bootstrap
    - Mỗi một lỗi hiển thị sẽ in theo cấu trúc Danh sách không thứ tự UL > LI
    -->
    <?php if (isset($_POST['btnSave']) && isset($errors) && (!empty($errors))) : ?>
        <div id="errors_container" class="alert alert-danger face my-2" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul>
                <?php foreach ($errors as $fields) : ?>
                    <?php foreach ($fields as $field) : ?>
                        <li><?= $field['msg']; ?></li>
                    <?php endforeach; ?>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <?php 
        // Nếu không có lỗi VALIDATE dữ liệu (tức là dữ liệu đã hợp lệ)
        // Tiến hành thực thi câu lệnh SQL Query Database
        // => giá trị của biến $errors là rỗng

        // Nếu người dùng có bấm nút "Lưu dữ liệu" và biến $errors không tồn tại Hoặc giá trị của biến $errors rỗng
        if (isset($_POST['btnSave']) && (!isset($errors) || (empty($errors)))) {
            // VALIDATE dữ liệu đã hợp lệ
            // Thực thi câu lệnh SQL QUERY
            // Câu lệnh UPDATE
            $sql = "UPDATE `brands` SET name = '$brand_name', description = '$brand_description' WHERE id = $brand_id;";

            //Thực thi INSERT
            mysqli_query($conn, $sql) or 
            die("<b>Có lỗi khi thực thi câu lệnh SQL: </b>" . mysqli_error($conn) . "<br /><b>Câu lệnh vừa thực thi:</b></br>$sql");

            // Đóng kết nối
            mysqli_close($conn);

            // Sau khi cập nhật dữ liệu, tự động điều hướng về trang Danh sách
            // Điều hướng bằng Javascript
            echo '<script>location.href = "AllBrands.php";</script>';
        }
    ?>

</div>

<script>
    $(function() {
        $("#frmBrand").validate({
            rules: {
                brand_name: {
                    required: true,
                    minlength: 3,
                    maxlength: 50
                }
            },
            messages: {
                brand_name: {
                    required: "Vui lòng nhập tên Thương hiệu",
                    minlength: "Tên Thương hiệu phải có ít nhất 3 ký tự",
                    maxlength: "Tên Thương hiệu không được vượt quá 50 ký tự"
                }
            },
            errorElement: "em",
            errorPlacement: function(error, element) {
                // Thêm class `invalid-feedback` cho field đang có lỗi
                error.addClass("invalid-feedback");
                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("label"));
                } else {
                    error.insertAfter(element);
                }
            },
            success: function(label, element) {},
            highlight: function(element, errorClass, validClass) {
                $(element).addClass("is-invalid").removeClass("is-valid");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).addClass("is-valid").removeClass("is-invalid");
            }
        });
    });
</script>

<?php end_content(); ?>