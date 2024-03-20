<?php
    function insert_binhluan($noidung,$iduser,$idpro,$ngaybinhluan){
        $sql="insert into binhluan(noidung,iduser,idpro,ngaybinhluan) values('$noidung','$iduser','$idpro','$ngaybinhluan')";
        pdo_execute($sql);
    }
    function loadall_binhluan($idpro){
        $sql="select * from binhluan where 1";
        if($idpro>0) $sql.=" AND idpro='".$idpro."'";  
        $sql.=" order by id desc";
        $listbl=pdo_query($sql);
        return $listbl;
    }
    
function danhsach_binhluan()
{
    $sql = "SELECT binhluan.id, binhluan.noidung, sanpham.name, nguoidung.name, binhluan.ngaybinhluan FROM binhluan JOIN sanpham on sanpham.id = binhluan.idpro join nguoidung on nguoidung.id = binhluan.iduser order by binhluan.ngaybinhluan desc";
    $result = pdo_query($sql);
    return $result;
}
    function load_binhluan($idpro)
    {
        $sql = "SELECT binhluan.*,
        sanpham.name AS ten_sp ,
        nguoidung.name AS user
           FROM binhluan 
             JOIN sanpham on sanpham.id = binhluan.idpro 
             join nguoidung on nguoidung.id = binhluan.iduser 
             where binhluan.idpro = '" . $idpro . "' order by binhluan.id desc";
    
        $result = pdo_query($sql);
        return $result;
    }
?>