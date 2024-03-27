<div class="row mb">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <?php
                            if(isset($_SESSION['user'])){
                                extract($_SESSION['user']);
                        ?>
                        <div class="row mb10">
                                <label for="">Xin chào</label>
                                <?=$user?>
                            </div>
                            <div class="row mb10">
                                <li>
                                    <a href="index.php?act=quenmk">Quên mật khẩu</a>
                                </li>
                                <li>
                                    <a href="index.php?act=edit_taikhoan">Cập nhật tài khoản</a>
                                </li>
                                <?php
                                    if($role==1){
                                ?>
                                    

                                <li>
                                    <a href="admin/index.php">Đăng nhập Admin</a>
                                </li>
                                <?php
                                        }
                                    ?>
                                <li>
                                    <a href="index.php?act=thoat">Thoát</a>
                                </li>
                            </div>
                        <?php
                            }else{

                            
                        ?>
                        <form action="index.php?act=dangnhap" method="post">
                            <div class="row mb10">
                                <label for="">Tên đăng nhập</label>
                                <input type="text" name="user"><br>
                            </div>
                            <div class="row mb10">
                                <label for="">Mật khẩu</label><br>
                                <input type="password" name="pass"><br>
                            </div>
                            <div class="row mb10">
                                <input type="checkbox">
                                <label for="">Ghi nhớ tài khoản</label>
                                
                            </div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập" name="dangnhap">
                            </div>
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="index.php?act=dangky">Đăng ký thành viên</a>
                        </li>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">DOANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <?php
                                foreach ($dsdm as $dm ) {
                                    extract($dm);
                                    $linkdm="index.php?act=sanpham&iddm=".$id;
                                    echo '<li>
                                            <a href="'.$linkdm.'">'.$name.'</a>
                                        </li>';
                                }
                            ?>
                            <!-- <li><a href="#">Đồng hồ</a></li>
                            <li><a href="#">Laptop</a></li>
                            <li><a href="#">Điện thoại</a></li>
                            <li><a href="#">Balo</a></li>
                            <li><a href="#">Đồng hồ</a></li>
                            <li><a href="#">Laptop</a></li>
                            <li><a href="#">Điện thoại</a></li>
                            <li><a href="#">Balo</a></li> -->
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form action="index.php?act=sanpham" method="post">
                            <input type="text" name="kyw">
                            <input type="submit" name="timkiem" value="Tìm kiếm">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent">
                        <?php
                            foreach ($dstop10 as $sp ) {
                                extract($sp);
                                $linksp="index.php?act=sanphamct&idsp=".$id;
                                $img=$img_path.$img;
                                echo '<div class="row mb10 top10">
                                        <a href="'.$linksp.'"><img src="'.$img.'" alt=""></a>
                                            <a href="'.$linksp.'">'.$name.'</a>
                                        </div>';
                            }
                        ?>
                        <!-- <div class="row mb10 top10">
                            <img src="view/img/casio.jpg" alt="">
                            <a href="#">Casio AE-1200WHD</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/casio01.jpg" alt="">
                            <a href="#">Casio Nam</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/casio02.jpg" alt="">
                            <a href="#">Casio Nam AE</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/casio03.jpg" alt="">
                            <a href="#">Casio 1AVDF</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/casio04.jpg" alt="">
                            <a href="#">Casio Quartz</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/casio05.jpg" alt="">
                            <a href="#">Casio 1000MD</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/casio06.jpg" alt="">
                            <a href="#">Casio</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="view/img/casio07.jpg" alt="">
                            <a href="#">Casio 1200WHD</a>
                        </div> -->
                    </div>
                </div>