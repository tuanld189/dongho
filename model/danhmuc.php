<?php
    function insert_danhmuc($tenloai){
        $sql="INSERT INTO `doanhmuc` (`name`) values('{$tenloai}')"; 
        pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql="DELETE FROM `doanhmuc` WHERE id=".$id;
        pdo_query($sql);
    }
    function loadall_danhmuc(){
        $sql="SELECT * FROM `doanhmuc` ORDER BY id desc";
        $listdanhmuc=pdo_query($sql);
        return $listdanhmuc;
    }
    function loadone_danhmuc($id){
        $sql="SELECT * FROM `doanhmuc` WHERE `id`=".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_danhmuc($id,$tenloai){
        $sql="UPDATE `doanhmuc` SET `name`='".$tenloai."' WHERE id=".$id; 
        pdo_execute($sql);
    }
?>