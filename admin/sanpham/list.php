<div class="row">
     <div class="row formtitle mb">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="kyw">
        <select name="iddm" id="">
            <option value="0" selected>Tất cả</option>
            <?php 
                foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    echo '<option value="'.$id.'">'.$name.'</option>';
                }
            ?>
        </select>
        <input type="submit" name="listok" value="GO">
    </form>
    <div class="row formcontent">

    <div class="row mb10 formloai">
        
        <table>
            <tr>
                <th></th>
                <th>MÃ SẢN PHẨM</th>
                <th>TÊN SẢN PHẨM</th>
                <th>HÌNH</th>
                <th>GIÁ</th>
                <th>LƯỢT XEM</th>
                <th></th>
            </tr>
            <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp="index.php?act=suasp&id=".$id;
                    $xoasp="index.php?act=xoasp&id=".$id;
                    $hinhpath="../upload/".$img;
                    if(is_file($hinhpath)){
                        $hinh="<img src='".$hinhpath."' height='80'>";
                    }else{
                        $hinh="no image";
                    }
                    echo '<tr>
                    <td><input type="checkbox" name=""></td>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                    <td>'.$hinh.'</td>
                    <td>'.$price.'</td>
                    <td>'.$luotxem.'</td>
                    <td> <a href="'.$suasp.'"><input type="button" value="Sửa"></a> 
                    <a href="'.$xoasp.'"><input type="button" value="Xóa"></a></td>
                </tr>';
                }
            ?>
        </table>
    </div>
    <div class="row mb10">

    </div>
    <div class="row mb10">
        <input type="button" value="CHỌN TẤT CẢ">
        <input type="button" value="BỎ CHỌN TẤT CẢ">
        <input type="button" value="XÓA CÁC MỤC ĐÃ CHỌN">
        <a href="index.php?act=addsp"><input type="button" value="NHẬP THÊM"></a>
    </div>

</div>