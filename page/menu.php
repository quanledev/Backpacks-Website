<?php
    $sql_danhmucsp = "SELECT * FROM tbl_danhmucsp ORDER BY id_danhmucsp DESC";
   $query_danhmuc = mysqli_query($mysqli,$sql_danhmucsp);
   
?>
 <!--Menu-->
 <section class="menu bg-danger">
      <div class="container">
        <div class="row">
            <!--left menu-->
            <div class="col-md-4 text-white">
               <nav class="navbar navbar-expand-lg bg-danger">
                 <div class="container-fluid">
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                 <ul class="navbar-nav me-auto mb-2 ">
                       <li class="nav-item dropdown">
                            <a class="nav-link text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="a:hover background-color: yellow;">
                              <i class="fa-solid fa-bars"></i> Danh mục sản phẩm
                            </a>
                          <ul class="dropdown-menu">
                            <?php
                            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                            ?>
                            <li><a class="dropdown-item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmucsp']?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>
                            <?php
                            }
                            ?>
                          </ul>
                        </li>
                    </ul>
                    </div>
                    </div>
                </nav>
            </div>
            <!--right menu-->
            <div class="col-md-8">
               <nav class="navbar navbar-expand-lg bg-danger">
                 <div class="container-fluid">
                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                         <li class="nav-item">
                            <a class="nav-link text-white active" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> Trang chủ</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link text-white" href="index.php?quanly=gioithieu"><i class="fa-solid fa-users"></i> Giới thiệu</a>
                         </li>
                         <!--<li class="nav-item dropdown">  --Xóa--
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                               Danh mục sản phẩm
                            </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                          </ul>
                        </li>-->
                        <li class="nav-item">
                           <a class="nav-link text-white" href="index.php?quanly=tintuc"><i class="fa-solid fa-newspaper"></i> Tin tức mới</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-white" href="index.php?quanly=question"><i class="fa-solid fa-circle-question"></i> Câu hỏi thường gặp</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-white" href="index.php?quanly=tuyendung"><i class="fa-solid fa-hotel"></i> Tuyển dụng</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link text-white" href="index.php?quanly=lienhe"><i class="fa-solid fa-headset"></i> Liên hệ</a>
                        </li>
                     </ul>
                   </div>
                 </div>
                </nav>
            </div>
        </div>
      </div>
    </section>