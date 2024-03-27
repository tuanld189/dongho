<div class="row mb">
    <div class="boxtrai mr">
        <div class="row mb">
            <div class="boxtitle">QUÊN MẬT KHẨU</div>
            <div class="row boxcontent ">
                <form action="index.php?act=quenmk" method="post" class="formtaikhoan">
                    <div class="row mb10">
                        <label for="">Email</label>
                        <input type="email" name="email" value="">
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="Gửi" name="guiemail">
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