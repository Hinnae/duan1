<?php
//  function loadall_taikhoan(){
//     $sql="select * from taikhoan order by id desc";
//     $listtaikhoan=pdo_query($sql);
//     return $listtaikhoan;
// }
    function loadall_nguoidung(){
        $sql="select * from nguoidung order by id desc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }

    function insert_nguoidung($name,$sdt,$email,$pass){
    $sql="insert into nguoidung(name,sdt,email,pass) values('$name','$sdt','$email','$pass')";
    pdo_execute($sql);
    }

    function checkname($name,$pass){
        $sql="select *from nguoidung where name='".$name."' AND pass='".$pass."' ";
        $sp = pdo_query_one($sql);
        return $sp;
    }
    function checkemail($email){
        $sql="select *from nguoidung where email='".$email."'" ;
        $sp = pdo_query_one($sql);
        return $sp;
    }

   

?>  