<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dự án mẫu</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/danhsach_loaihang.css">
</head>
<body>
    <div class="container">
        <div class="row mb menu">
           
            <nav>
                <div class="close_menu"><i class="fas fa-times" onclick="closeMenu()"></i></div>
                <ul>
                    <li><a href="" style="font-size:28px;font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;color:black;padding-right:60px;">BigShoes</a></li>
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="index.php?act=gioithieu">Sản phẩm</a></li>
                    <li><a href="index.php?act=lienhe">Tin tức</a></li>
                    <li><a href="index.php?act=goiy">Giới thiêu</a></li>
                    <li><a href="index.php?act=hoidap">Liên hệ</a></li>
    
                    <?php
                        if (!isset($_SESSION['user'])) {
                        ?>
                            <a class="login1" style="text-decoration: none; color: black;border: 1px solid rgb(122, 112, 112) ; border-radius: 25%; padding: 4px 12px;" href="tai-khoan/dang-nhap.php"><li><span>Đăng nhập</span></li> </a>
                        <?php } else { ?>
                            <a id="login" style="margin-left: 50px;text-decoration: none; color: black;border: 1px solid rgb(122, 112, 112) ; border-radius: 25%; padding: 4px 12px;" href="tai-khoan/thong-tin-tk.php"><span><?= $_SESSION['user']['ho_ten'] ?> </span></a>
                        
                    <?php } ?>
            
                    <div class="shopping_cart">
                        <a href="trang-chinh/danh-sach-gio-hang.php" style="text-decoration:none; float:left;">
                            <i class="fas fa-shopping-bag">
                                <?php
                                $sll = 0;
                                if (isset($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $item) {
                                        extract($item);
                                        $sll += $sl;
                                    }
                                }
                                ?></i>
                            <div><li>Cart <span><?= $sll ?></span></li></div>
                        </a>
                    </div>
                    <form action="tim-kiem-theo-ten.php" method="post">
                    <div class="search">
                        <div class="search_icon">
                            <i class="fas fa-search" onclick="openSearchPanel()"></i>
                        </div>
                    </div>
                    <div class="menu_nav">
                        <i class="fa fa-bars" aria-hidden="false" onclick="openMenu()"></i>
                    </div>
                    </form>
                                
                </ul>
            </nav>
        </div>