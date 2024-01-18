<?php
    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $matkhau =  md5($_POST['password']);
        $sql = "SELECT * FROM tbl_khachhang WHERE email = '".$email."' AND matkhau = '".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $row_data = mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['email'];
            $_SESSION['id_khachhang'] = $row_data['id_khachhang'];
            header("Location:index.php?quanly=giohang");
        }else{
            echo '<p class="text-danger">Mật khẩu hoặc Email bị sai</p>';
        }
    }
?>
<div class="product-title border-bottom">
                <div class="row">
                    <div class="col-md-4">
                       <h3><strong class="bg-danger text-white badge">Đăng Nhập</strong></h3>
                    </div>
                </div>
</div>
<br>
<br>
<form action="" autocomplete="off" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Mật Khẩu</label>
    <input type="password" class="form-control" name="password">
  </div>
  <button type="submit" name="dangnhap" class="btn btn-warning text-white">Đăng Nhập</button>
</form>