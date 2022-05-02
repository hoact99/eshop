<?php include '../classes/generate.php'; ?>

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
        $item_list = array();
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $actions = 
                "<a href='?action=update&id=$item[id]&tb=$TABLENAME' class='btn btn-warning'>
                    <span data-feather='edit'></span> Sửa
                </a>
                <a href='../functions_crud/Delete.php?id=$item[id]&tb=$TABLENAME' class='btn btn-danger btn-delete'>
                    <span data-feather='delete'></span> Xóa
                </a>";
            $item += ['actions' => $actions];
            $item_list[] = $item;
        }
    ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Quản lý <?= $CONFIG_NAME_VI ?></h5>
            <a href="<?= $TABLENAME ?>.php?action=create&tb=<?= $TABLENAME ?>" class="btn btn-primary btn-create">Thêm mới</a>
        </div>
        <div class="card-body">
            <?php 
                if($item_list): 
            ?>
            <div class="table-responsive">
                <?php echo genTable($item_list); ?>
            </div>
            <?php 
                else:
                    echo "Bạn chưa có $CONFIG_NAME_VI nào.";
                endif; 
            ?>
        </div>
    </div>

</div>