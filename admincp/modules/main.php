<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
    unset($_SESSION['dangnhap']);
    header("Location:login.php");
}
?>
<!-- Page Content -->
<div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Welcome to Admin</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><?php if(isset($_SESSION['dangnhap'])){echo $_SESSION['dangnhap'];}?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="admin.php?dangxuat=1">Đăng xuất</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!--php-->
            <?php
                 if(isset($_GET['action']) && $_GET['query']){
                     $tam = $_GET['action'];
                     $query = $_GET['query'];
                 }else
                 {
                     $tam = '';
                     $query = '';
                 }
                //quản lý danh mục sản phẩm
                 if($tam=='quanlydanhmucsanpham' && $query=='them'){
                    include("modules/quanlydanhmucsp/them.php");
                    include("modules/quanlydanhmucsp/lietke.php");
                 }elseif ($tam =='quanlydanhmucsanpham' && $query=='sua'){
                    include("modules/quanlydanhmucsp/sua.php");
                //quản lý sản phẩm
                 }elseif ($tam =='quanlysp' && $query=='them'){
                    include("modules/quanlysp/them.php");
                    include("modules/quanlysp/lietke.php");
                 }elseif($tam =='quanlysp' && $query=='sua'){
                    include("modules/quanlysp/sua.php");
                //quản lý đơn hàng
                 }elseif($tam =='quanlydonhang' && $query=='lietke'){
                    include("modules/quanlydonhang/lietke.php");
                 }elseif($tam =='donhang' && $query=='xemdonhang'){
                    include("modules/quanlydonhang/xemdonhang.php");
                //quản lý danh muc bài viết
                 }elseif($tam =='quanlydanhmucbaiviet' && $query=='them'){
                    include("modules/quanlydanhmucbaiviet/them.php");
                    include("modules/quanlydanhmucbaiviet/lietke.php");
                 }elseif($tam =='quanlydanhmucbaiviet' && $query=='sua'){
                    include("modules/quanlydanhmucbaiviet/sua.php");
                //quản lý bài viết
                 }elseif($tam =='quanlybaiviet' && $query=='them'){
                    include("modules/quanlybaiviet/them.php");
                    include("modules/quanlybaiviet/lietke.php");
                 }elseif($tam =='quanlybaiviet' && $query=='sua'){
                    include("modules/quanlybaiviet/sua.php");
                //về lại trang chủ admin
                 }else{
                    include("modules/dashboard.php");
                 }
            ?>
        </div>
           
</div>
<!-- /#page-content-wrapper -->