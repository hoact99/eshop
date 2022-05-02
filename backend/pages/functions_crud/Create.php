<?php include '../classes/generate.php'; ?>

<?php
    $TABLENAME = $_GET['tb'];
    $action = $_GET['action'];

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
    $sqlSelect = "SELECT * FROM `$TABLENAME`";

    $result = mysqli_query($conn, $sqlSelect);
    $col = 0;
    $row = array();
    while ($col < mysqli_num_fields($result)) 
    {
        $title = mysqli_fetch_field($result); 
        $row += [$title->name => ""];
        $col++; 
    }
    // Thực thi câu truy vấn SQL để lấy về dữ liệu ban đầu của record cần update
    
    /* --- End Truy vấn dữ liệu Sản phẩm theo khóa chính --- */

    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    
?>

<div>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="m-0 font-weight-bold text-primary">Thêm mới <?= $CONFIG_NAME_VI ?></h5>
        </div>
        <div class="card-body">
            <?php echo genUpdateForm($row, $TABLENAME, $action); ?>
        </div>
    </div>

        <?php 

            // 2. Nếu người dùng có bấm nút "Lưu dữ liệu"
            if (isset($_POST['btnSave'])) {
                $sql_set_table_fields = "";
                $sql_set_table_values = "";
                foreach ($row as $key => $value) {
                    if ($value == "") {
                        $value = "NULL";
                    }
                    if ($key != "id") {
                        $sql_set_table_fields .= "$key,";
                        $sql_set_table_values .= "'$_POST[$key]',";
                    }
                }
                $sql_set_table_fields = substr($sql_set_table_fields, 0, -1);
                $sql_set_table_values = substr($sql_set_table_values, 0, -1);
                
                echo $sql_set_table_fields;
                echo $sql_set_table_values;

                // Thực thi câu lệnh SQL QUERY
                // Câu lệnh INSERT
                $sql = "INSERT INTO `$TABLENAME` ($sql_set_table_fields) VALUES ($sql_set_table_values);";

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