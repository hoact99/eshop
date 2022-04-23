<?php 
    // var_dump($_SERVER["SCRIPT_NAME"]); die;
    // Biến $_SERVER là biến hệ thống do PHP quản lý, dùng để lưu trữ các thông tin về Request gởi đến Server
    // Trong đó key: $_SERVER['SCRIPT_NAME']
    // Dùng để lưu trữ giá trị thông tin đường dẫn URL
    // Tùy theo đường dẫn URL, set giá trị Tên trang và Tiêu đề phù hợp

    $SHOP_NAME = "ANC";
    $PAGE_TITLE = "Quản trị " . $SHOP_NAME;

    switch ($_SERVER['SCRIPT_NAME']) {
        case "/php/eshop/backend/pages/manage/accounts.php":
            $CURRENT_PAGE = "backend.manage.accounts";
            $CONFIG_NAME = "Accounts";
            $CONFIG_NAME_VI = "Tài khoản";
            break;
        case "/php/eshop/backend/pages/manage/brands.php":
            $CURRENT_PAGE = "backend.manage.brands";
            $CONFIG_NAME = "Brands";
            $CONFIG_NAME_VI = "Thương hiệu";
            break;
        case "/php/eshop/backend/pages/manage/categories.php":
            $CURRENT_PAGE = "backend.manage.categories";
            $CONFIG_NAME = "Categories";
            $CONFIG_NAME_VI = "Danh mục con";
            break;
        case "/php/eshop/backend/pages/manage/comment_images.php":
            $CURRENT_PAGE = "backend.manage.comment_images";
            $CONFIG_NAME = "Comment Images";
            $CONFIG_NAME_VI = "Hình ảnh bình luận";
            break;
        case "/php/eshop/backend/pages/manage/comments.php":
            $CURRENT_PAGE = "backend.manage.comments";
            $CONFIG_NAME = "Comments";
            $CONFIG_NAME_VI = "Bình luận";
            break;
        case "/php/eshop/backend/pages/manage/customers.php":
            $CURRENT_PAGE = "backend.manage.customers";
            $CONFIG_NAME = "Customers";
            $CONFIG_NAME_VI = "Khách hàng";
            break;
        case "/php/eshop/backend/pages/manage/employees.php":
            $CURRENT_PAGE = "backend.manage.employees";
            $CONFIG_NAME = "Employees";
            $CONFIG_NAME_VI = "Nhân viên";
            break;
        case "/php/eshop/backend/pages/manage/images.php":
            $CURRENT_PAGE = "backend.manage.images";
            $CONFIG_NAME = "Images";
            $CONFIG_NAME_VI = "Hình ảnh";
            break;
        case "/php/eshop/backend/pages/manage/order_details.php":
            $CURRENT_PAGE = "backend.manage.order_details";
            $CONFIG_NAME = "Order Details";
            $CONFIG_NAME_VI = "Chi tiết đơn hàng";
            break;
        case "/php/eshop/backend/pages/manage/order_status.php":
            $CURRENT_PAGE = "backend.manage.order_status";
            $CONFIG_NAME = "Order Status";
            $CONFIG_NAME_VI = "Trạng thái đơn hàng";
            break;
        case "/php/eshop/backend/pages/manage/orders.php":
            $CURRENT_PAGE = "backend.manage.orders";
            $CONFIG_NAME = "Orders";
            $CONFIG_NAME_VI = "Đơn hàng";
            break;
        case "/php/eshop/backend/pages/manage/parent_categories.php":
            $CURRENT_PAGE = "backend.manage.parent_categories";
            $CONFIG_NAME = "Parent Categories";
            $CONFIG_NAME_VI = "Danh mục cha";
            break;
        case "/php/eshop/backend/pages/manage/payments.php":
            $CURRENT_PAGE = "backend.manage.payments";
            $CONFIG_NAME = "Payments";
            $CONFIG_NAME_VI = "Hình thức thanh toán";
            break;
        case "/php/eshop/backend/pages/manage/permissions.php":
            $CURRENT_PAGE = "backend.manage.permissions";
            $CONFIG_NAME = "Permissions";
            $CONFIG_NAME_VI = "Quyền người dùng";
            break;
        case "/php/eshop/backend/pages/manage/persons.php":
            $CURRENT_PAGE = "backend.manage.persons";
            $CONFIG_NAME = "Persons";
            $CONFIG_NAME_VI = "Người dùng";
            break;
        case "/php/eshop/backend/pages/manage/positions.php":
            $CURRENT_PAGE = "backend.manage.positions";
            $CONFIG_NAME = "Positions";
            $CONFIG_NAME_VI = "Chức vụ";
            break;
        case "/php/eshop/backend/pages/manage/product_images.php":
            $CURRENT_PAGE = "backend.manage.product_images";
            $CONFIG_NAME = "Product Images";
            $CONFIG_NAME_VI = "Hình ảnh sản phẩm";
            break;
        case "/php/eshop/backend/pages/manage/product_specifications.php":
            $CURRENT_PAGE = "backend.manage.product_specifications";
            $CONFIG_NAME = "Product Specifications";
            $CONFIG_NAME_VI = "Thông số sản phẩm";
            break;
        case "/php/eshop/backend/pages/manage/products.php":
            $CURRENT_PAGE = "backend.manage.products";
            $CONFIG_NAME = "Product";
            $CONFIG_NAME_VI = "Sản phẩm";
            break;
        case "/php/eshop/backend/pages/manage/shippers.php":
            $CURRENT_PAGE = "backend.manage.shippers";
            $CONFIG_NAME = "Shippers";
            $CONFIG_NAME_VI = "Nhân viên giao hàng";
            break;
        case "/php/eshop/backend/pages/manage/specifications.php":
            $CURRENT_PAGE = "backend.manage.specifications";
            $CONFIG_NAME = "Specifications";
            $CONFIG_NAME_VI = "Thông số kỹ thuật";
            break;
        case "/php/eshop/backend/pages/manage/suppliers.php":
            $CURRENT_PAGE = "backend.manage.suppliers";
            $CONFIG_NAME = "Suppliers";
            $CONFIG_NAME_VI = "Nhà cung cấp";
            break;
        case "/php/eshop/backend/pages/brands/AllBrands.php":
            $CURRENT_PAGE = "backend.brands.allbrands";
            $CONFIG_NAME = "Brands";
            $CONFIG_NAME_VI = "Thương hiệu";
            break;
        
        default:
            $CURRENT_PAGE = "backend.pages.index";
            $CONFIG_NAME = "Admin";
            break;
    }

    $PAGE_TITLE .= ' | ' . $CONFIG_NAME;
?>