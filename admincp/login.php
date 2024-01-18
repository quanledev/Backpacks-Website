<?php
    session_start();
    include('config/config.php');
    if(isset($_POST['dangnhap'])){
        $taikhoan = $_POST['username'];
        $matkhau =  md5($_POST['password']);
        $sql = "SELECT * FROM tbl_admin WHERE username = '".$taikhoan."' AND password = '".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $_SESSION['dangnhap'] = $taikhoan;
            header("Location:admin.php");
        }else{
            echo '<script>alert("Tài khoản hoặc mật khẩu không đúng, vui lòng thử lại.");</script>';
            header("Location:login.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/login.css">
  <title>Đăng nhập - Admin</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" autocomplete="off" method="POST">
                    <h2>Đăng Nhập</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="mail" name="username" required>
                        <label for="">Tài khoản</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required>
                        <label for="">Mật khẩu</label>
                    </div>
                    <!-- <div class="forget">
                        <label for=""><input type="checkbox">Remember Me  <a href="#">Forget Password</a></label>
                      
                    </div> -->
                    <button type="submit" name="dangnhap">Log in</button>
                    <!-- <div class="register">
                        <p>Don't have a account <a href="#">Register</a></p>
                    </div> -->
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>