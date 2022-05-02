<?php 

    include '../../dbconnect.php';

    class Brand {
        public int $id;
        public string $name;
        public string $description;

        public function __construct(object $obj) {
            $this->id = $obj->id;
            $this->name = $obj->name;
            $this->description = $obj->description;
        }

        public function genTableField($key, $value) {
            switch ($key) {
                case 'id':
                case 'name':
                case 'description':
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
    $sql = "SELECT * from `brands`";
    if ($result = mysqli_query($conn, $sql)) {
        while ($obj = mysqli_fetch_object($result)) {
            $item_list[] = new Brand($obj);
        }
        mysqli_free_result($result);
    }
    foreach ($item_list as $key => $value) {
        foreach ($value as $_key => $_value) {
            echo $value->genTableField($_key, $_value);
        }
    }
?>