<?php include '../../layouts/functions.php'; ?>
<?php start_content('Home page'); ?>

<div>

    <?php 
        // Truy vấn database để lấy danh sách
        // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
        include_once(__DIR__ . '/../../dbconnect.php');

        // 2. Chuẩn bị câu truy vấn $sql
        $stt = 1;
        $sql = "SELECT * FROM `brands`";

        // 3. Thực thi câu truy vấn SQL để lấy về dữ liệu
        $result = mysqli_query($conn, $sql);

        // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tích để sử dụng
        // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
        // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
        $brands_list = [];
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $brands_list[] = array(
                'brand_id' => $row['id'],
                'brand_name' => $row['name'],
                'brand_description' => $row['description']
            );
        }
    ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Quản lý <?= $CONFIG_TITLE ?></h5>
            <a href="CreateBrand.php" class="btn btn-primary">Thêm mới</a>
        </div>
        <div class="card-body">
            <?php if($brands_list): ?>
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="col-1">Mã</th>
                            <th>Tên thương hiệu</th>
                            <th class="col-7">Mô tả</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <!-- <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                        </tr>
                    </tfoot> -->
                    <tbody>
                        <?php foreach ($brands_list as $brand) : ?>
                        <tr>
                            <td><?= $brand['brand_id'] ?></td>
                            <td><?= $brand['brand_name'] ?></td>
                            <td class="text-left text-break"><?= $brand['brand_description'] ?></td>
                            <td>
                                <!-- Nút sửa, bấm vào sẽ hiển thị form hiệu chỉnh thông tin dựa vào khóa chính `lsp_ma` -->
                                <a href="EditBrand.php?id=<?= $brand['brand_id'] ?>" class="btn btn-warning">
                                    <span data-feather="edit"></span> Sửa
                                </a>
                                <a href="DeleteBrand.php?id=<?= $brand['brand_id'] ?>" class="btn btn-danger btn-delete">
                                    <span data-feather="delete"></span> Xóa
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php 
                else:
                    echo 'Bạn chưa có thương hiệu nào.';
                endif; 
            ?>
        </div>
    </div>

    <script>
        $(".btn-warning").click(function(e) {
            e.preventDefault();
            $('.container-fluid').load(this.href);
        });
    </script>

</div>

<?php end_content(); ?>