<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
            <div class="row formtitle">
                <h1>CẬP NHẬT LOẠI HÀNG</h1>
            </div>
            <div class="row formcontent">
                <form action="index.php?act=updatedm" method="post">
                    <div class="row mb10">
                        <label for="">Mã loại</label><br>
                        <input type="text" name="maloai">
                    </div>
                    <div class="row mb10">
                        <label for="">Tên loại</label><br>
                        <input type="text" name="tenloai" value="<?php if(isset($name)&&($name!="")) echo $name; ?>">
                    </div>
                    <div class="row mb10">
                    <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id; ?>">
                        <input type="submit" value="CẬP NHẬT" name="capnhat">
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