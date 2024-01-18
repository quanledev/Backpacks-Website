<?php
include("../../config/config.php");

$tenloaisp = $_POST['tendanhmuc'];
$thutu = $_POST['sothutusp'];
//them
if(isset($_POST['themdanhmuc'])){
    $sql_them = "INSERT INTO tbl_danhmucsp(tendanhmuc, sothutusp) VALUE('".$tenloaisp."','".$thutu."')";
    mysqli_query($mysqli,$sql_them);
    header('location:../../admin.php?action=quanlydanhmucsanpham&query=them');
}elseif(isset($_POST['suadanhmuc'])){
//sua
    $sql_update= "UPDATE tbl_danhmucsp SET tendanhmuc='".$tenloaisp."',sothutusp='".$thutu."' WHERE id_danhmucsp= '$_GET[iddanhmuc]'";
    mysqli_query($mysqli,$sql_update);
    header('location:../../admin.php?action=quanlydanhmucsanpham&query=them');

}else{
    $id=$_GET['iddanhmuc'];
    $sql_xoa = "DELETE FROM tbl_danhmucsp WHERE id_danhmucsp='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('location:../../admin.php?action=quanlydanhmucsanpham&query=them');
}
?>