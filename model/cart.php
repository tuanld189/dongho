<?php

    function viewcart($del){
        global $img_path;
        $tong=0;
        $i=0;
        if($del==1){
            $xoasp_th='<th>Thao tác</th> ';
            
            $xoasp_td2='<td></td>';
        }else{
            $xoasp_td='';
            
            $xoasp_td2='';
        }
        echo'<tr>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Thao tác</th>
                
            </tr>
        ';
        foreach ($_SESSION['mycart'] as $cart) {
            $hinh=$img_path.$cart[2];
            $ttien=$cart[3]*$cart[4];
            $tong+=$ttien;
            if($del==1){
                
                $xoasp_td='<td><a href="index.php?act=delcart&idcart='.$i.'"><input type="button" value="Xóa"></a></td>';
                
            }else{
                
                $xoasp_td='';
                
            }
            
            echo '
                    <tr>
                        <td><img src="'.$hinh.'" alt="" height="80px"></td>
                        <td>'.$cart[1].'</td>
                        <td>'.$cart[3].'</td>
                        <td>'.$cart[4].'</td>
                        <td>'.$ttien.'</td>
                        '.$xoasp_td.'
                    </tr> ';
                    $i+=1;
            }
            echo '<tr>
                        <td colspan="4">Tổng đơn hàng</td>
                        <td>'.$tong.'</td>
                    </tr> 
            ';
    }

    function bill_chi_tiet($listbill){
        global $img_path;
        $tong=0;
        $i=0; 
        echo'<tr>
                <th>Hình</th>
                <th>Sản phẩm</th>
                <th>Đơn giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </tr>
        ';
        foreach ($listbill as $cart) {
            $hinh=$img_path.$cart['img'];
            $tong+=$cart['thanhtien'];
              
            
            echo '
                    <tr>
                        <td><img src="'.$hinh.'" alt="" height="80px"></td>
                        <td>'.$cart['name'].'</td>
                        <td>'.$cart['price'].'</td>
                        <td>'.$cart['soluong'].'</td>
                        <td>'.$cart['thanhtien'].'</td>
                    </tr> ';
                    $i+=1;
            }
            echo '<tr>
                        <td colspan="4">Tổng đơn hàng</td>
                        <td>'.$tong.'</td>
                    </tr> 
            ';
    }
    function tongdonhang(){
        $tong=0;
        foreach ($_SESSION['mycart'] as $cart) {
            
            $ttien=$cart[3]*$cart[4];
            $tong+=$ttien;
        
            }
            return $tong;
    }
    
    function loadone_bill($id){
        $sql="SELECT * FROM bill WHERE id=".$id;
        $bill=pdo_query_one($sql);
        return pdo_execute($bill);
    }
    function loadone_cart($id){
        $sql="SELECT * FROM cart WHERE idbill=".$idbill;
        $bill=pdo_query_one($sql);
        return pdo_execute($bill);
    }
    function loadall_thongke(){
        $sql="select danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.id) as countsp, min(sanpham.price), max(sanpham.price) as maxprice, avg(sanpham.price) as avg";
        $sql.="from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
        $sql.="group by danhmuc.id order by danhmuc.id desc";
        $listtk=pdo_query($sql);
        return $listtk;
    }
?>