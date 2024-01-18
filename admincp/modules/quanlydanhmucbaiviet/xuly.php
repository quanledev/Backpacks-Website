<?php
include('../../config/config.php');

$tendanhmucbaiviet = $_POST['tendanhmucbaiviet'];
$thutu = $_POST['sothutubv'];

if(isset($_POST['themdanhmucbaiviet'])){
	//them
	$sql_them = "INSERT INTO tbl_danhmucbaiviet(tendanhmuc_baiviet,sothutubv) VALUE('".$tendanhmucbaiviet."','".$thutu."')";
	mysqli_query($mysqli,$sql_them);
	header('location:../../admin.php?action=quanlydanhmucbaiviet&query=them');

}
elseif(isset($_POST['suadanhmucbaiviet'])){
	//sua
	$sql_update = "UPDATE tbl_danhmucbaiviet SET tendanhmuc_baiviet='".$tendanhmucbaiviet."',sothutubv='".$thutu."' WHERE id_baiviet='$_GET[idbaiviet]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../admin.php?action=quanlydanhmucbaiviet&query=them');
}else{

	$id=$_GET['idbaiviet'];
	$sql_xoa = "DELETE FROM tbl_danhmucbaiviet WHERE id_baiviet='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../admin.php?action=quanlydanhmucbaiviet&query=them');
}

?>