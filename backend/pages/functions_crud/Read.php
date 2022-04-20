<div>

    <?php 
        $TABLENAME = basename($_SERVER['SCRIPT_FILENAME'], ".php");

        // Truy vấn database để lấy danh sách
        // 1. Include file cấu hình kết nối đến database, khởi tạo kết nối $conn
        include(__DIR__ . '/../../dbconnect.php');

        // 2. Chuẩn bị câu truy vấn $sql
        $sql = "SELECT * FROM `$TABLENAME`";

        // 3. Thực thi câu truy vấn SQL để lấy về dữ liệu
        $result = mysqli_query($conn, $sql);

        // 4. Khi thực thi các truy vấn dạng SELECT, dữ liệu lấy về cần phải phân tích để sử dụng
        // Thông thường, chúng ta sẽ sử dụng vòng lặp while để duyệt danh sách các dòng dữ liệu được SELECT
        // Ta sẽ tạo 1 mảng array để chứa các dữ liệu được trả về
        $itemList = [];
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $itemList[] = array(
                'id' => $row['id'],
                'name' => $row['name'],
                'description' => $row['description']
            );
        }
    ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Quản lý <?= $vi_page_name; ?></h5>
            <a href="../functions_crud/Create.php?tb=<?= $TABLENAME ?>" class="btn btn-primary">Thêm mới</a>
        </div>
        <div class="card-body">
            <?php if($itemList): ?>
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="col-1">Mã</th>
                            <th>Tên <?= $vi_page_name ?></th>
                            <th class="col-7">Mô tả</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($itemList as $item) : ?>
                        <tr>
                            <td><?= $item['id'] ?></td>
                            <td><?= $item['name'] ?></td>
                            <td class="text-left text-break"><?= $item['description'] ?></td>
                            <td>
                                <!-- Nút sửa, bấm vào sẽ hiển thị form hiệu chỉnh thông tin dựa vào khóa chính `lsp_ma` -->
                                <a href="Edit.php?id=<?= $item['id'] ?>" class="btn btn-warning">
                                    <span data-feather="edit"></span> Sửa
                                </a>
                                <a href="../functions_crud/Delete.php?tb=<?= $TABLENAME ?>&id=<?= $item['id'] ?>" class="btn btn-danger btn-delete">
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
                    echo 'Bạn chưa có ' . $vi_page_name . ' nào.';
                endif; 
            ?>
        </div>
    </div>

</div>