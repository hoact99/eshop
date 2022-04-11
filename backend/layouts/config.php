<?php 
    // var_dump($_SERVER["SCRIPT_NAME"]); die;
    // Biến $_SERVER là biến hệ thống do PHP quản lý, dùng để lưu trữ các thông tin về Request gởi đến Server
    // Trong đó key: $_SERVER['SCRIPT_NAME']
    // Dùng để lưu trữ giá trị thông tin đường dẫn URL
    // Tùy theo đường dẫn URL, set giá trị Tên trang và Tiêu đề phù hợp

    switch ($_SERVER['SCRIPT_NAME']) {
        //CRUD Danh mục Loại sản phẩm
        case "/php/eshop/backend/pages/404.php":
            $CURRENT_PAGE = "backend.pages.404";
            $PAGE_TITLE = "Quản trị eShop | 404";
            break;
        case "/php/eshop/backend/pages/blank.php":
            $CURRENT_PAGE = "backend.pages.blank";
            $PAGE_TITLE = "Quản trị eShop | Blank";
            break;
        case "/php/eshop/backend/pages/buttons.php":
            $CURRENT_PAGE = "backend.pages.buttons";
            $PAGE_TITLE = "Quản trị eShop | Buttons";
            break;
        case "/php/eshop/backend/pages/cards.php":
            $CURRENT_PAGE = "backend.pages.cards";
            $PAGE_TITLE = "Quản trị eShop | Cards";
            break;
        case "/php/eshop/backend/pages/charts.php":
            $CURRENT_PAGE = "backend.pages.charts";
            $PAGE_TITLE = "Quản trị eShop | Charts";
            break;
        case "/php/eshop/backend/pages/tables.php":
            $CURRENT_PAGE = "backend.pages.tables";
            $PAGE_TITLE = "Quản trị eShop | Tables";
            break;
        case "/php/eshop/backend/pages/utilities-animation.php":
            $CURRENT_PAGE = "backend.pages.utilities-animation";
            $PAGE_TITLE = "Quản trị eShop | Utilities Animation";
            break;
        case "/php/eshop/backend/pages/utilities-border.php":
            $CURRENT_PAGE = "backend.pages.utilities-border";
            $PAGE_TITLE = "Quản trị eShop | Utilities Border";
            break;
        case "/php/eshop/backend/pages/utilities-color.php":
            $CURRENT_PAGE = "backend.pages.utilities-color";
            $PAGE_TITLE = "Quản trị eShop | Utilities Color";
            break;
        case "/php/eshop/backend/pages/utilities-other.php":
            $CURRENT_PAGE = "backend.pages.utilities-other";
            $PAGE_TITLE = "Quản trị eShop | Utilities Other";
            break;
        
        // Tên trang và Tiêu đề mặc định
        default:
            $CURRENT_PAGE = "backend.pages.index";
            $PAGE_TITLE = "Quản trị eShop | Dashboard";
    }
?>