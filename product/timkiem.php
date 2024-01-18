<?php
    if(isset($_POST['timkiem'])){
        $tukhoa = $_POST['tukhoa'];
    }
    $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmucsp WHERE tbl_sanpham.id_danhmucsp = tbl_danhmucsp.id_danhmucsp AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
    $query_pro = mysqli_query($mysqli,$sql_pro);
?>
<!-- product -->
<div class="product-title border-bottom border-danger">
                <div class="row">
                    <div class="col-md-4">
                       <h3><strong class="bg-danger text-white badge">Từ Khóa Tim Kiếm: <?php echo $_POST['tukhoa']?></strong></h3>
                    </div>
                </div>
            </div>
            <div class="product-list-s py-3">
                <div class="row">
                    <?php
                        while($row = mysqli_fetch_array($query_pro)){
                    ?>
                    <div class="card" style="width: 20rem; margin-left: 5px; margin-right: 5px; margin-top: 15px">
                         <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" class="card-img-top">
                         <div class="card-body">
                           <h5 class="card-title"><?php echo $row['tensanpham']?></h5>
                           <p class="card-text text-danger">Giá: <?php echo number_format($row['giasp'],0,',','.').' đ';?></p>
                           <p class="card-text">Thể Loại: <?php echo $row['tendanhmuc']?></p>
                           <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>" class="btn btn-danger">Xem chi tiết</a>
                         </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>