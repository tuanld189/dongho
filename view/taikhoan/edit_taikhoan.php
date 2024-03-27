<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">CẬP NHẬT THÀNH VIÊN</div>
            <div class="row boxcontent formtaikhoan">
                <?php
                    if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                        extract($_SESSION['user']);
                    }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="row mb10">
                        <label for="">Email</label>
                        <input type="email" name="email" value=<?="$email"?>>
                    </div>
                    <div class="row mb10">
                        <label for="">Tên đăng nhập</label>
                        <input type="text" name="user" value=<?="$user"?>>
                    </div>
                    <div class="row mb10">
                        <label for="">Mật khẩu</label>
                        <input type="password" name="pass" value=<?="$pass"?>>
                    </div>
                    <div class="row mb10">
                        <label for="">Địa chỉ</label>
                        <input type="text" name="address" value=<?="$addres"?>>
                    </div>
                    <div class="row mb10">
                        <label for="">Điện thoại</label>
                        <input type="text" name="tel" value=<?="$tel"?>>
                    </div>
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" value="Nhập lại">
                    </div>
                    
                </form>
                <h2 class="thongbao">
                <?php
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                ?>
                </h2>
            </div>
        </div>
        
    </div>
    <div class="boxphai">
        <?php
            include "view/boxright.php";
        ?>
    </div>
</div>