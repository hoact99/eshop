<?php 
    // var_dump($_SERVER["SCRIPT_NAME"]); die;
    // Biến $_SERVER là biến hệ thống do PHP quản lý, dùng để lưu trữ các thông tin về Request gởi đến Server
    // Trong đó key: $_SERVER['SCRIPT_NAME']
    // Dùng để lưu trữ giá trị thông tin đường dẫn URL
    // Tùy theo đường dẫn URL, set giá trị Tên trang và Tiêu đề phù hợp

    $SHOP_NAME = "ANC";

    switch ($_SERVER['SCRIPT_NAME']) {
        //CRUD Danh mục Loại sản phẩm
        case "/php/eshop/backend/pages/admin/404.php":
            $CURRENT_PAGE = "backend.pages.admin.404";
            $PAGE_TITLE = "Quản trị " . $SHOP_NAME . " | 404";
            break;
        case "/php/eshop/backend/pages/admin/blank.php":
            $CURRENT_PAGE = "backend.pages.admin.blank";
            $PAGE_TITLE = "Quản trị " . $SHOP_NAME . " | Blank";
            break;
        case "/php/eshop/backend/pages/admin/buttons.php":
            $CURRENT_PAGE = "backend.pages.admin.buttons";
            $PAGE_TITLE = "Quản trị " . $SHOP_NAME . " | Buttons";
            break;
        case "/php/eshop/backend/pages/admin/cards.php":
            $CURRENT_PAGE = "backend.pages.admin.cards";
            $PAGE_TITLE = "Quản trị " . $SHOP_NAME . " | Cards";
            break;
        case "/php/eshop/backend/pages/admin/charts.php":
            $CURRENT_PAGE = "backend.pages.admin.charts";
            $PAGE_TITLE = "Quản trị " . $SHOP_NAME . " | Charts";
            break;
        case "/php/eshop/backend/pages/admin/tables.php":
            $CURRENT_PAGE = "backend.pages.admin.tables";
            $PAGE_TITLE = "Quản trị " . $SHOP_NAME . " | Tables";
            break;
        case "/php/eshop/backend/pages/admin/utilities-animation.php":
            $CURRENT_PAGE = "backend.pages.admin.utilities-animation";
            $PAGE_TITLE = "Quản trị " . $SHOP_NAME . " | Utilities Animation";
            break;
        case "/php/eshop/backend/pages/admin/utilities-border.php":
            $CURRENT_PAGE = "backend.pages.admin.utilities-border";
            $PAGE_TITLE = "Quản trị " . $SHOP_NAME . " | Utilities Border";
            break;
        case "/php/eshop/backend/pages/admin/utilities-color.php":
            $CURRENT_PAGE = "backend.pages.admin.utilities-color";
            $PAGE_TITLE = "Quản trị " . $SHOP_NAME . " | Utilities Color";
            break;
        case "/php/eshop/backend/pages/admin/utilities-other.php":
            $CURRENT_PAGE = "backend.pages.admin.utilities-other";
            $PAGE_TITLE = "Quản trị " . $SHOP_NAME . " | Utilities Other";
            break;
        case "/php/eshop/backend/pages/brands/AllBrands.php":
            $CURRENT_PAGE = "backend.pages.brands";
            $PAGE_TITLE = "Quản trị " . $SHOP_NAME . " | Thương hiệu";
            break;
        case "/php/eshop/backend/pages/brands/CreateBrand.php":
            $CURRENT_PAGE = "backend.pages.brands";
            $PAGE_TITLE = "Quản trị " . $SHOP_NAME . " | Tạo Thương hiệu mới";
            break;
        
        // Tên trang và Tiêu đề mặc định
        default:
            $CURRENT_PAGE = "backend.pages.index";
            $PAGE_TITLE = "Quản trị " . $SHOP_NAME;
    }
?>