<div class="container-fluid px-4">
<div class="row my-5">
    <?php
          $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_khachhang WHERE tbl_cart.id_khachhang=tbl_khachhang.id_khachhang ORDER BY tbl_cart.id_cart DESC";
          $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);     
    ?>
                    <h3 class="fs-4 mb-3">Liệt kê đơn hàng</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Mã đơn hàng</th>
                                    <th scope="col">Tên khách hàng</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">SĐT</th>
                                    <th scope="col">Địa chỉ</th>
                                    <th scope="col">Tình Trạng</th>
                                    <th scope="col">Quản Lý</th>
                                </tr>
                            </thead>
                            <tbody>
    <?php
           $i = 0;
           while($row = mysqli_fetch_array($query_lietke_dh)){
           $i++;
    ?>
                                <tr>
                                    <td><?php echo $i?></td>
                                    <td><?php echo $row['code_cart']?></td>
                                    <td><?php echo $row['tenkhachhang']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['dienthoai']?></td>
                                    <td><?php echo $row['diachi']?></td>
                                    <td><?php
                                            if($row['cart_status']==1){
                                                echo '<a href="modules/quanlydonhang/xuly.php?cart_status=0&code='.$row['code_cart'].'">Đơn hàng mới</a>';
                                            }else{
                                                echo 'Đã xem';
                                            }

                                        ?>
                                    </td>
                                    <td>
                                        <a href="admin.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart']?>">Xem đơn hàng</a>
                                    </td>
                                </tr>
    <?php
           }
    ?>
                           </tbody>
                        </table>
                    </div>
                </div>
            </div>