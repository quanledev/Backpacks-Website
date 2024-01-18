<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
    unset($_SESSION['dangky']);
}
?>
<!--header-->
<section class="header">
        <div class="container py-3">
            <div class="row">
                <!--Logo-->
                <div class="col-md-3">
                    <img src="images/logo.png" class="img-fluid" alt="Logo">
                </div>
                <!--Search-->
                
                <div class="col-md-4">
                <form action="index.php?quanly=timkiem" method="POST">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Sách bạn muốn tìm..." aria-label="Sách bạn muốn tìm.." aria-describedby="basic-addon2" name="tukhoa">
                    <input type="submit" name="timkiem" class="input-group-text" value="Tìm Kiếm">
                  </div>
                  </form>
                </div>
                
                <!--Liên hệ và Login-->
                <div class="col-md-3">
                    <div class="row">
                        <!--Liên hệ-->
                        <div class="col">
                            <a href="index.php?quanly=giohang" style="text-decoration: none;">
                            <div class="row">
                                <div class="col-3">
                                    <div class="fs-3 text-danger">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                </div>
                                <div class="col-9">
                                    <span class="text-dark">Giỏ Hàng</span> <br>
                                    <strong class="text-danger">Của Bạn</strong>
                                </div>
                            </div>
                            </a>
                        </div>
                        <?php
                        if(isset($_SESSION['dangky'])){
                        ?>
                        <div class="col">
                            <div class="row">
                                <div class="col-3">
                                    <div class="fs-3 text-danger">
                                      <i class="fa-regular fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-9">
                                    Welcome!<br>
                                    <a href="index.php?dangxuat=1" style="text-decoration: none;"><strong class="text-danger">Đăng xuất</strong></a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }else{
                        ?>
                        <div class="col">
                            <div class="row">
                                <div class="col-3">
                                    <div class="fs-3 text-danger">
                                      <i class="fa-regular fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-9">
                                    Xin chào!<br>
                                    <a href="index.php?quanly=dangky" style="text-decoration: none;"><strong class="text-danger">Đăng ký</strong></a>
                                </div>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                        <!--Login-->
                    </div>
                </div>
            </div>
        </div>
    </section>