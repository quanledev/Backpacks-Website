<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
if(isset($_POST['dangky'])){
    $tenkhachhang = $_POST['hovaten'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $matkhau = $_POST['matkhau'];
    $dienthoai = $_POST['dienthoai'];
    $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_khachhang(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
    if($sql_dangky){
        echo '<p class="text-success">Bạn đã đăng ký thành công</p>';
        
        $_SESSION['dangky'] = $tenkhachhang;
        $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
    }
}
?>
<div class="product-title border-bottom">
                <div class="row">
                    <div class="col-md-4">
                       <h3><strong class="bg-danger text-white badge">Đăng Ký Thành Viên</strong></h3>
                    </div>
                </div>
</div>
<br>
<br>
<form class="row g-3 bg-danger text-white" action="" method="POST">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Họ và Tên</label>
    <input type="text" class="form-control" name="hovaten">
  </div>
  <div class="col-md-6">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="col-12">
    <label class="form-label">Mật Khẩu</label>
    <input type="password" class="form-control" name="matkhau">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Địa Chỉ</label>
    <input type="text" class="form-control" id="inputAddress" name="diachi">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Điện Thoại</label>
    <input type="text" class="form-control" name="dienthoai">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-warning" name="dangky">Đăng Ký</button>
  </div>
  <div class="col-12" style="margin-bottom: 15px">
    <button type="submit" class="btn btn-warning" name="dangky"><a href="index.php?quanly=dangnhap" style="text-decoration: none;" class="text-white">Đăng nhập nếu đã có tài khoàn</a></button>
  </div>
</form>