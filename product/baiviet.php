<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tbl_baiviet.id='$_GET[id]' LIMIT 1";
	$query_bv = mysqli_query($mysqli,$sql_bv);
	$query_bv_all = mysqli_query($mysqli,$sql_bv);
	$row_bv_title = mysqli_fetch_array($query_bv);
?>
<div class="product-title border-bottom border-danger">
                <div class="row">
                    <div class="col-md-4">
                       <h3><strong class="bg-danger text-white badge">Chi tiết tin tức</strong></h3>
                    </div>
                </div>
</div>
<br>
<?php
	while($row_bv = mysqli_fetch_array($query_bv_all)){ 
?>
<div class="card mb-3">
  <br>
  <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>" class="card-img-top rounded mx-auto d-block"  style="max-width: 1000px;">
  <br>
  <div class="card-body">
    <h5 class="card-title"><?php echo $row_bv['tenbaiviet'] ?></h5>
    <p class="card-text"><?php echo $row_bv['noidung'] ?></p>
  </div>
  <a href="index.php?quanly=tintuc"><button type="button" class="btn btn-warning" style="margin-left: 15px">Quay về trang tin tức</button></a>
  <br>
</div>
<?php
	} 
?>