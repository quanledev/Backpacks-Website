<div class="product-title border-bottom border-danger">
                <div class="row">
                    <div class="col-md-4">
                       <h3><strong class="bg-danger text-white badge">Chi tiết sản phẩm</strong></h3>
                    </div>
                </div>
</div>
<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmucsp WHERE tbl_sanpham.id_danhmucsp = tbl_danhmucsp.id_danhmucsp AND tbl_sanpham.id_sanpham = '$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<form method="POST" action="product/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham']?>">
<div class="card mb-3" style="max-width: 1400px; margin-top: 15px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h3 class="card-title"><?php echo $row_chitiet['tensanpham']?></h3>
        <p class="card-text text-danger">Giá: <?php echo number_format($row_chitiet['giasp'],0,',','.').' đ';?></p>
        <p class="card-text">Trọng lượng: <strong><?php echo $row_chitiet['trongluong']?></strong></p>
        <p class="card-text">Kích thước: <?php echo $row_chitiet['kichthuoc']?></p>
        <p class="card-text">Chất liệu: <?php echo $row_chitiet['chatlieu']?></p>
        <p class="card-text">Số lượng: <?php echo $row_chitiet['soluong']?></p>
        <p class="card-text"><?php echo $row_chitiet['tendanhmuc']?></p>
        <p class="card-text"><?php echo $row_chitiet['noidung']?></p>
        <button type="submit" class="btn btn-outline-danger" name="themgiohang"><i class="fa-solid fa-cart-shopping"></i>  Thêm vào giỏ hàng</button>
      </div>
    </div>
  </div>
</div>
</form>
<?php
}
?>