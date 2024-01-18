<div class="product-title border-bottom">
                <div class="row">
                    <div class="col-md-4">
                       <h3><strong class="bg-danger text-white badge">Giỏ hàng</strong></h3>
                    </div>
                </div>
</div>
<br>
<span class="text-success">
<?php
if(isset($_SESSION['dangky'])){
    echo 'Xin chào: '.$_SESSION['dangky'];
}
?>
</span>
<br>
<table class="table">
  <thead class="table-danger">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên sản phẩm</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Số lượng</th>
      <th scope="col">Giá</th>
      <th scope="col">Thành tiền</th>
      <th scope="col">Chỉnh sửa</th>
    </tr>
  </thead>
  <?php
  if(isset($_SESSION['cart'])){
    $i = 0;
    $tongtien = 0;
    foreach($_SESSION['cart'] as $cart_item){
        $thanhtien = $cart_item['soluong'] * $cart_item['giasp']; 
        $tongtien += $thanhtien;
        $i++;
  ?>
  <tbody class="table-light">
    <tr>
      <th><?php echo $i; ?></th>
      <td><?php echo $cart_item['tensanpham']; ?></td>
      <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
      <td>
        <a href="product/themgiohang.php?cong=<?php echo $cart_item['id']?>"><i class="fa-solid fa-plus"></i></a>
        <?php echo $cart_item['soluong']; ?>
        <a href="product/themgiohang.php?tru=<?php echo $cart_item['id']?>"><i class="fa-solid fa-minus"></i></a>
      </td>
      <td><?php echo number_format($cart_item['giasp'],0,',','.').' đ'; ?></td>
      <td><?php echo number_format($thanhtien,0,',','.').' đ'; ?></td>
      <td><a href="product/themgiohang.php?xoa=<?php echo $cart_item['id']?>">Xóa</a></td>
    </tr>
  </tbody>
  <?php
    }
  ?>
  <tr>
      <th colspan="7" class="text-end table-light">
       <p>Tổng tiền: <?php echo number_format($tongtien,0,',','.').' đ'; ?></p> 
       <p><a href="product/themgiohang.php?xoatatca=1">Xóa tất cả</a></p>
       <?php
            if(isset($_SESSION['dangky'])){
       ?>
              <a href="product/thanhtoan.php"><button type="button" class="btn btn-warning text-white">Đặt hàng</button></a>
       <?php  
            }else{
       ?>
              <a href="index.php?quanly=dangky"><p>Đăng ký đặt hàng</p></a>
       <?php
            }
       ?> 


     </th>
    </tr>
  <?php
  }else{
  ?>
    <tbody class="table-light">
    <tr>
      <th colspan="7" class="text-center">Chưa có sản phẩm trong giỏ hàng của bạn.</th>>
    </tr>
  </tbody>
  <?php
  }
  ?>
</table>