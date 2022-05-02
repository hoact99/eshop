<?php 

    include '../../dbconnect.php';

    class Account {
        public int $id;
        public int $permission_id;
        public string $username;
        public string $password;
        public bool $is_active;

        public function __construct(object $obj) {
            $this->id = $obj->id;
            $this->permission_id = $obj->permission_id;
            $this->username = $obj->username;
            $this->password = $obj->password;
            $this->is_active = $obj->is_active;
        }

        public function genTableField($key, $value) {
            switch ($key) {
                case 'id':
                case 'permission_id':
                case 'username':
                case 'password':
                case 'is_active':
                    return 
                    "<label for='$key'>Nhập $key</label>
                    <input type='text' name='$key' value='$value'><br>";
                    break;
                default:
                    break;
            }
        }
    }

    $item_list = array();
    $sql = "SELECT * from `accounts`";
    if ($result = mysqli_query($conn, $sql)) {
        while ($obj = mysqli_fetch_object($result)) {
            $item_list[] = new Account($obj);
        }
        mysqli_free_result($result);
    }
    foreach ($item_list as $key => $value) {
        foreach ($value as $_key => $_value) {
            echo $value->genTableField($_key, $_value);
        }
    }
?>