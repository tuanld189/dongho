<?php
    function loadall_taikhoan(){
        $sql="SELECT * FROM `taikhoan` ORDER BY `id` desc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }
    function insert_taikhoan($email,$user,$pass){
        $sql="INSERT INTO `taikhoan` (`email`,`user`,`pass`) values('{$email}','{$user}','{$pass}')"; 
        pdo_execute($sql);
    }
    function checkuser($user,$pass){
        $sql="select * from `taikhoan` where user='".$user."' AND pass='".$pass."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function checkemail($email){
        $sql="SELECT * FROM `taikhoan` WHERE `email`='".$email."'";
        $sp=pdo_query_one($sql);
        return $sp;
    }
    function update_taikhoan($id,$user,$email,$pass,$address,$tel){
        
            $sql="UPDATE `taikhoan` SET `user`='".$user."',`pass`='".$pass."', `email`='".$email."', `addresS`='".$address."', `tel`='".$tel."' WHERE id=".$id;
        
        
        pdo_execute($sql);
    }

?>