<?php 

    function genTable($item_list) {
        $table = null;
        $table .= "<table class='table table-bordered text-center' id='dataTable' width='100%' cellspacing='0'><thead><tr>";
        
        foreach ($item_list as $key => $value) {
            static $check = false;
            if (!$check) {
                foreach ($value as $_key => $_value) {
                    $table .= "<th>$_key</th>";
                }
                $check = true;
            }
        }
        $table .= "</tr></thead><tbody>";
        foreach ($item_list as $key => $value) {
            $table .= "<tr>";
            foreach ($value as $_key => $_value) {
                $table .= "<td>$_value</td>";
            }
            $table .= "</tr>";
        }
        $table .= "</tr></tbody></table>";
        return $table;
    }

    function genUpdateForm($row, $TABLENAME, $action) {
        $form = null;
        $form .= "<form action='' method='post' name='frm$TABLENAME' id='frm$TABLENAME' class='w-100'>";
        foreach ($row as $key => $value) {
            $form .= "<div class='form-group'><label for='$key'>$key</label>";
            switch ($key) {
                case 'id':
                    $form .= "<input type='text' class='form-control' id='$key' name='$key' placeholder='$key' value='$value' disabled>";
                    break;
                case 'description':
                    $form .= "<textarea type='text' class='form-control' id='$key' name='$key' placeholder='$key'>$value</textarea>";
                    break;
                case 'is_active':
                    $form .= 
                        "<input type='hidden' class='form-control' name='$key' value='0'>
                        <input type='checkbox' class='form-control' name='$key' value='1' checked>";
                    break;
                default:
                    $form .= "<input type='text' class='form-control' id='$key' name='$key' placeholder='$key' value='$value'>";
                    break;
            }
            $form .= "</div>";
        }
        $form .= "<button class='btn btn-primary' name='btnSave'>Lưu dữ liệu</button>
            <a class='btn btn-warning' href='$TABLENAME.php' name='btnCancel'>Quay lại</a>
        </form>";
        return $form;
    }
    
?>