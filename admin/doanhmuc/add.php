<div class="row">
            <div class="row formtitle">
                <h1>THÊM MỚI LOẠI HÀNG HÓA</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=adddm" method="post">
                    <div class="row mb10">
                        <label for="">Mã loại</label><br>
                        <input type="text" name="maloai">
                    </div>
                    <div class="row mb10">
                        <label for="">Tên loại</label><br>
                        <input type="text" name="tenloai">
                    </div>
                    <div class="row mb10">
                        <input type="submit" value="THÊM MỚI" name="themmoi">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=lisdm"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao)) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>