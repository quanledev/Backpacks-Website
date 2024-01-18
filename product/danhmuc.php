<?php
    $sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmucsp = '$_GET[id]'  ORDER BY id_sanpham DESC";
    $query_pro = mysqli_query($mysqli,$sql_pro);
    //lấy tên danh mục
    $sql_cate = "SELECT * FROM tbl_danhmucsp WHERE tbl_danhmucsp.id_danhmucsp = '$_GET[id]' LIMIT 1";
    $query_cate = mysqli_query($mysqli,$sql_cate);
    $row_title = mysqli_fetch_array($query_cate);
?>
<!-- product -->
<div class="product-title border-bottom">
                <div class="row">
                    <div class="col-md-4">
                       <h3><strong class="bg-danger text-white badge"><?php echo $row_title['tendanhmuc']?></strong></h3>
                    </div>
                </div>
            </div>
            <div class="product-list-s py-3">
                <div class="row">
                    <?php
                        while($row_pro = mysqli_fetch_array($query_pro)){
                    ?>
                    <div class="card" style="width: 20rem; margin-left: 5px; margin-right: 5px; margin-top: 15px">
                         <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh']?>" class="card-img-top">
                         <div class="card-body">
                           <h5 class="card-title"><?php echo $row_pro['tensanpham']?></h5>
                           <p class="card-text text-danger">Giá: <?php echo number_format($row_pro['giasp'],0,',','.').' đ';?></p>
                           <p class="card-text"><?php echo $row_title['tendanhmuc']?></p>
                           <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham']?>" class="btn btn-danger">Xem chi tiết</a>
                         </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>