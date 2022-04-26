<?php 
    // var_dump($_SERVER["SCRIPT_NAME"]); die;
    // Biến $_SERVER là biến hệ thống do PHP quản lý, dùng để lưu trữ các thông tin về Request gởi đến Server
    // Trong đó key: $_SERVER['SCRIPT_NAME']
    // Dùng để lưu trữ giá trị thông tin đường dẫn URL
    // Tùy theo đường dẫn URL, set giá trị Tên trang và Tiêu đề phù hợp

    $SHOP_NAME = "ANC";
    $PAGE_TITLE = "Quản trị " . $SHOP_NAME;

    switch (basename($_SERVER['SCRIPT_FILENAME'], ".php")) {
        case "accounts":
            $CURRENT_PAGE = "backend.manage.accounts";
            $CONFIG_NAME = "Accounts";
            $CONFIG_NAME_VI = "Tài khoản";
            break;
        case "brands":
            $CURRENT_PAGE = "backend.manage.brands";
            $CONFIG_NAME = "Brands";
            $CONFIG_NAME_VI = "Thương hiệu";
            break;
        case "categories":
            $CURRENT_PAGE = "backend.manage.categories";
            $CONFIG_NAME = "Categories";
            $CONFIG_NAME_VI = "Danh mục con";
            break;
        case "comment_images":
            $CURRENT_PAGE = "backend.manage.comment_images";
            $CONFIG_NAME = "Comment Images";
            $CONFIG_NAME_VI = "Hình ảnh bình luận";
            break;
        case "comments":
            $CURRENT_PAGE = "backend.manage.comments";
            $CONFIG_NAME = "Comments";
            $CONFIG_NAME_VI = "Bình luận";
            break;
        case "customers":
            $CURRENT_PAGE = "backend.manage.customers";
            $CONFIG_NAME = "Customers";
            $CONFIG_NAME_VI = "Khách hàng";
            break;
        case "employees":
            $CURRENT_PAGE = "backend.manage.employees";
            $CONFIG_NAME = "Employees";
            $CONFIG_NAME_VI = "Nhân viên";
            break;
        case "images":
            $CURRENT_PAGE = "backend.manage.images";
            $CONFIG_NAME = "Images";
            $CONFIG_NAME_VI = "Hình ảnh";
            break;
        case "order_details":
            $CURRENT_PAGE = "backend.manage.order_details";
            $CONFIG_NAME = "Order Details";
            $CONFIG_NAME_VI = "Chi tiết đơn hàng";
            break;
        case "order_status":
            $CURRENT_PAGE = "backend.manage.order_status";
            $CONFIG_NAME = "Order Status";
            $CONFIG_NAME_VI = "Trạng thái đơn hàng";
            break;
        case "orders":
            $CURRENT_PAGE = "backend.manage.orders";
            $CONFIG_NAME = "Orders";
            $CONFIG_NAME_VI = "Đơn hàng";
            break;
        case "parent_categories":
            $CURRENT_PAGE = "backend.manage.parent_categories";
            $CONFIG_NAME = "Parent Categories";
            $CONFIG_NAME_VI = "Danh mục cha";
            break;
        case "payments":
            $CURRENT_PAGE = "backend.manage.payments";
            $CONFIG_NAME = "Payments";
            $CONFIG_NAME_VI = "Hình thức thanh toán";
            break;
        case "permissions":
            $CURRENT_PAGE = "backend.manage.permissions";
            $CONFIG_NAME = "Permissions";
            $CONFIG_NAME_VI = "Quyền người dùng";
            break;
        case "persons":
            $CURRENT_PAGE = "backend.manage.persons";
            $CONFIG_NAME = "Persons";
            $CONFIG_NAME_VI = "Người dùng";
            break;
        case "positions":
            $CURRENT_PAGE = "backend.manage.positions";
            $CONFIG_NAME = "Positions";
            $CONFIG_NAME_VI = "Chức vụ";
            break;
        case "product_images":
            $CURRENT_PAGE = "backend.manage.product_images";
            $CONFIG_NAME = "Product Images";
            $CONFIG_NAME_VI = "Hình ảnh sản phẩm";
            break;
        case "product_specifications":
            $CURRENT_PAGE = "backend.manage.product_specifications";
            $CONFIG_NAME = "Product Specifications";
            $CONFIG_NAME_VI = "Thông số sản phẩm";
            break;
        case "products":
            $CURRENT_PAGE = "backend.manage.products";
            $CONFIG_NAME = "Product";
            $CONFIG_NAME_VI = "Sản phẩm";
            break;
        case "shippers":
            $CURRENT_PAGE = "backend.manage.shippers";
            $CONFIG_NAME = "Shippers";
            $CONFIG_NAME_VI = "Nhân viên giao hàng";
            break;
        case "specifications":
            $CURRENT_PAGE = "backend.manage.specifications";
            $CONFIG_NAME = "Specifications";
            $CONFIG_NAME_VI = "Thông số kỹ thuật";
            break;
        case "suppliers":
            $CURRENT_PAGE = "backend.manage.suppliers";
            $CONFIG_NAME = "Suppliers";
            $CONFIG_NAME_VI = "Nhà cung cấp";
            break;
        
        default:
            $CURRENT_PAGE = "backend.pages.index";
            $CONFIG_NAME = "Admin";
            break;
    }

    $PAGE_TITLE .= ' | ' . $CONFIG_NAME;
?>