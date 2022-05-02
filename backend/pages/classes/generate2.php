<?php 

    include '../../dbconnect.php';

    class Generate {
        public int $id;
        public string $name;
        public string $description;
        public int $permission_id;
        public string $username;
        public string $password;
        public bool $is_active;
        public string $actions;

        public function __construct(object $obj) {
            $this->id = $obj->id;
            if (isset($obj->name)) {
                $this->name = $obj->name;
            }
            if (isset($obj->description)) {
                $this->description = $obj->description;
            }
            if (isset($obj->permission_id)) {
                $this->permission_id = $obj->permission_id;
            }
            if (isset($obj->username)) {
                $this->username = $obj->username;
            }
            if (isset($obj->password)) {
                $this->password = $obj->password;
            }
            if (isset($obj->is_active)) {
                $this->is_active = $obj->is_active;
            }
            $this->actions = 
            "<a href='?action=update&id=$obj->id' class='btn btn-warning'>
                <span data-feather='edit'></span> Sửa
            </a>
            <a href='?id=$obj->id' class='btn btn-danger btn-delete'>
                <span data-feather='delete'></span> Xóa
            </a>";
        }

        public function getKeyAlias($key) {
            switch ($key) {
                case 'id': 
                    return 'Mã';
                    break;
                case 'actions':
                    return 'Hành động';
                    break;
                case 'name':
                    return 'Tên';
                    break;
                case 'description':
                    return 'Mô tả';
                    break;
                case 'permission_id':
                    return 'Mã quyền';
                    break;
                case 'username':
                    return 'Tên tài khoản';
                    break;
                case 'password':
                    return 'Mật khẩu';
                    break;
                case 'is_active':
                    return 'Đang hoạt động';
                    break;
                default:
                    break;
            }
        }

        public function genFormFields($key, $value) {
            $alias = $this->getKeyAlias($key);
            switch ($key) {
                case 'id':
                case 'permission_id':
                    return 
                        "<label for='$key'>Nhập $alias</label><br>
                        <input type='text' name='$key' id='$key' value='$value' disabled><br>";
                    break;
                case 'name':
                case 'username':
                case 'password':
                    return 
                        "<label for='$key'>Nhập $alias</label><br>
                        <input type='text' name='$key' id='$key' value='$value'><br>";
                    break;
                case 'description':
                    return 
                        "<label for='$key'>Nhập $alias</label><br>
                        <input type='text' name='$key' id='$key' value='$value'><br>";
                    break;
                case 'is_active':
                    return 
                        "<label for='$key'>$alias</label><br>
                        <input type='checkbox' name='$key' value='$key' checked='$value'>";
                default:
                    break;
            }
        }

        public function genTableHeader($key) {
            $alias = $this->getKeyAlias($key);
            return "<th>$alias</th>";
        }

        public function genTableField($value) {
            echo "<td>$value</td>";
        }
    }

    $item_list = array();
    $sql = "SELECT * from `parent_categories`";
    if ($result = mysqli_query($conn, $sql)) {
        while ($obj = mysqli_fetch_object($result)) {
            $item_list[] = new Generate($obj);
        }
        mysqli_free_result($result);
    }

    function genTable($item_list) {
        echo "<table class='table table-bordered text-center' id='dataTable' width='100%' cellspacing='0'><tbody>";
        foreach ($item_list as $key => $value) {
            echo "<tr>";
            foreach ($value as $_key => $_value) {
                echo $value->genTableField($_value);
            }
            echo "</tr>";
        }
        echo "</tbody><thead><tr>";
        foreach ($item_list as $key => $value) {
            foreach ($value as $_key => $_value) {
                echo $value->genTableHeader($_key);
            }
            break;
        }
        echo "</tr></thead></table>";
    }

    genTable($item_list);

    function genForm($item_list) {
        foreach ($item_list as $key => $value) {
            foreach ($value as $_key => $_value) {
                echo $value->genFormFields($_key, $_value);
            }
        }
    }

    genForm($item_list);
    
?>