<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <div class="nav">
            <ul class="nav-list">
                <li class="nav-item">Giới thiệu</li>
                <li class="nav-item">Kết nối</li>
                <li class="nav-item">
                    <button class="btn btn-primary">Facebook</button>
                </li>
                <li class="nav-item">
                    <button class="btn btn-danger">Gmail</button>
                </li>
            </ul>
            <ul class="nav-list">
                <li class="nav-item">
                    <form action="/action_page.php">
                        <input type="search" id="search" name="search">
                        <input type="submit">
                    </form>
                </li>
            </ul>
            <ul class="nav-list">
                <li class="nav-item">Đăng ký</li>
                <li class="nav-item">Đăng nhập</li>
            </ul>
        </div>
    </div>




    <div class="content">

        <div class="wrap-layout">
            <div class="wrap-layout__item">Fashion</div>
            <div class="wrap-layout__item">Electron</div>
            <div class="wrap-layout__item">House</div>
            <div class="wrap-layout__item">Car</div>
            <div class="wrap-layout__item">Food</div>
        </div>

        <div class="column-layout">
            <div class="column-item sidebar-one">
                <h1>Category</h1>
            </div>
            <div class="column-item main-column">
                <h1>Content</h1>
            </div>
            <div class="column-item sidebar-two">
                <h1>Ads</h1>
            </div>
        </div>

        <div class="center-layout">
            <h3 class="center-layout__item">
                Center item
            </h3>
        </div>



    </div>
    <div class="footer-layout">
        <div class="footer-item">
            <h2>Footer 1</h2>
        </div>
        <div class="footer-item">
            <h2>Footer 2</h2>
        </div>
        <div class="footer-item">
            <h2>Footer 3</h2>
        </div>
    </div>
</body>

</html>