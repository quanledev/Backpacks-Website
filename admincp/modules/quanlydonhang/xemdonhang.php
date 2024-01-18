<div class="container-fluid px-4">
<div class="row my-5">
    <?php
          $code = $_GET['code'];
          $sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham = tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart = '".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
          $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);     
    ?>
                    <h3 class="fs-4 mb-3">Xem đơn hàng</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Mã đơn hàng</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Đơn giá</th>
                                    <th scope="col">Thành tiền</th>
                                    <th scope="col">Quản Lý</th>
                                </tr>
                            </thead>
                            <tbody>
    <?php
           $tongtien = 0;
           $i = 0;
           while($row = mysqli_fetch_array($query_lietke_dh)){
           $i++;
           $thanhtien = $row['giasp'] * $row['soluongmua'];
           $tongtien += $thanhtien;
    ?>
                                <tr>
                                    <td><?php echo $i?></td>
                                    <td><?php echo $row['code_cart']?></td>
                                    <td><?php echo $row['tensanpham']?></td>
                                    <td><?php echo $row['soluongmua']?></td>
                                    <td><?php echo number_format($row['giasp'],0,',','.').' đ'?></td>
                                    <td><?php echo number_format($thanhtien,0,',','.').' đ'?></td>
                                    <td>
                                        <!-- <a href="admin.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a> -->
                                    </td>
                                </tr>
    <?php
           }
    ?>
                                 <tr>
                                 <td>
                                    <p class="text-start">Tổng tiền: <?php echo number_format($tongtien,0,',','.').' đ'?></p>
                                </td>
                                 </tr>
                           </tbody>
                        </table>
                    </div>
                </div>
            </div>