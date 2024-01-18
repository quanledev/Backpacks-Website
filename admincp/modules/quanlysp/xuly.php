<?php
include("../../config/config.php");

$tensanpham = $_POST['tensanpham'];
$masp = $_POST['masp'];
$giasp = $_POST['giasp'];
$soluong = $_POST['soluong'];
$chatlieu = $_POST['chatlieu'];
$kichthuoc= $_POST['kichthuoc'];
$trongluong = $_POST['trongluong'];
//xulyhinhanh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];
$tinhtrang = $_POST['tinhtrang'];
$danhmuc = $_POST['danhmuc'];



//them
if(isset($_POST['themsanpham'])){
    $sql_them = "INSERT INTO tbl_sanpham(tensanpham,masp,giasp,soluong,chatlieu,kichthuoc,trongluong,hinhanh,tomtat,noidung,tinhtrang,id_danhmucsp) VALUE('".$tensanpham."','".$masp."','".$giasp."','".$soluong."','".$chatlieu."','".$kichthuoc."','".$trongluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."','".$danhmuc."')";
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
    header('location:../../admin.php?action=quanlysp&query=them');
}elseif(isset($_POST['suasanpham'])){
//sua
    if($hinhanh!=''){
      move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
      
      $sql_update= "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',chatlieu='".$chatlieu."',kichthuoc='".$kichthuoc."',trongluong='".$trongluong."',hinhanh='".$hinhanh."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmucsp='".$danhmuc."' WHERE id_sanpham= '$_GET[idsanpham]'";
      //xoa hinh anh cu
      $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
      $query = mysqli_query($mysqli,$sql);
      while($row = mysqli_fetch_array($query)){
          unlink('uploads/'.$row['hinhanh']);
      }
    }else{
      $sql_update= "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',chatlieu='".$chatlieu."',kichthuoc='".$kichthuoc."',trongluong='".$trongluong."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmucsp='".$danhmuc."' WHERE id_sanpham= '$_GET[idsanpham]'";
    }
    mysqli_query($mysqli,$sql_update);
    header('location:../../admin.php?action=quanlysp&query=them');

}else{
    $id=$_GET['idsanpham'];
    $sql = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    while($row = mysqli_fetch_array($query)){
        unlink('uploads/'.$row['hinhanh']);
    }
    $sql_xoa = "DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."'";
    mysqli_query($mysqli,$sql_xoa);
    header('location:../../admin.php?action=quanlysp&query=them');
}
?>