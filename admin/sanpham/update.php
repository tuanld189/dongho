<?php
    if(is_array($sanpham)){
        extract($sanpham);
    }
    $hinhpath="../upload/".$img;
    if(is_file($hinhpath)){
        $hinh="<img src='".$hinhpath."' height='80'>";
    }else{
        $hinh="no image";
    }
?>
<div class="row">
            <div class="row formtitle">
                <h1>CẬP NHẬT SẢN PHẨM</h1>
            </div>
            <div class="row formcontent">
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                    <div class="row mb10">
                    <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                         <?php 
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                if($iddm==$id)$s="selected"; else $s="";

                                    echo '<option value="'.$id.'" '.$s.'>'.$name.'</option>';
                            }
                        ?>
                    </select>
                    </div>
                    <div class="row mb10">
                        <label for="">Tên sản phẩm</label><br>
                        <input type="text" name="tensp" value="<?=$name ?>">
                    </div>
                    <div class="row mb10">
                        <label for="">Giá</label><br>
                        <input type="text" name="giasp" value="<?=$price ?>">
                    </div>
                    <div class="row mb10">
                        <label for="">Hình</label><br>
                        <input type="file" name="hinh">
                        <?=$hinh?>
                    </div>
                    <div class="row mb10">
                        <label for="">Mô tả</label><br>
                        <textarea name="mota" cols="30" rows="10"><?=$mota ?></textarea>
                    </div>
                    
                    <div class="row mb10">
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" value="CẬP NHẬT" name="capnhat">
                        <input type="reset" value="NHẬP LẠI">
                        <a href="index.php?act=lissp"><input type="button" value="DANH SÁCH"></a>
                    </div>
                    <?php
                        if(isset($thongbao)&&($thongbao)) echo $thongbao;
                    ?>
                </form>
            </div>
        </div>
    </div>