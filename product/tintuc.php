<div class="product-title border-bottom border-danger">
                <div class="row">
                    <div class="col-md-4">
                       <h3><strong class="bg-danger text-white badge">Tin tức mới</strong></h3>
                    </div>
                </div>
</div>
<?php
	$sql_bv = "SELECT * FROM tbl_baiviet WHERE tinhtrang=1 ORDER BY id DESC";
	$query_bv = mysqli_query($mysqli,$sql_bv);
?>
<div class="product-list-s py-3">
     <div class="row">
      <div class="row row-cols-1 row-cols-md-2 g-4">
<?php
	while($row_bv = mysqli_fetch_array($query_bv)){ 
?>
          <div class="col">
             <div class="card">
              <a href="index.php?quanly=baiviet&id=<?php echo $row_bv['id'] ?>" style="text-decoration: none;">
               <img src="admincp/modules/quanlybaiviet/uploads/<?php echo $row_bv['hinhanh'] ?>" class="card-img-top">
                  <div class="card-body">
                     <h5 class="card-title text-danger"><?php echo $row_bv['tenbaiviet']?></h5>
              </a>
                     <p class="card-text"><?php echo $row_bv['tomtat']?></p>
                  </div>
             </div>
          </div>
<?php
} 
?>
      </div>
    </div>
</div>