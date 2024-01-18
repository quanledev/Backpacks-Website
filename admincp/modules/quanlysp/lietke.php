<div class="container-fluid px-4">
<div class="row my-5">
    <?php
          $sql_lietke_sp = "SELECT * FROM tbl_sanpham,tbl_danhmucsp WHERE tbl_sanpham.id_danhmucsp = tbl_danhmucsp.id_danhmucsp ORDER BY id_sanpham DESC";
          $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);     
    ?>
                    <h3 class="fs-4 mb-3">Liệt kê sản phẩm</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Trọng lượng</th>
                                    <th scope="col">Giá</th>
                                    <th scope="col">Kích thước</th>
                                    <th scope="col">Danh mục</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Quản lý</th>
                                </tr>
                            </thead>
                            <tbody>
    <?php
           $i = 0;
           while($row = mysqli_fetch_array($query_lietke_sp)){
           $i++;
    ?>
                                <tr>
                                    <td><?php echo $i?></td>
                                    <td><?php echo $row['tensanpham']?></td>
                                    <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width="150px"></td>
                                    <td><?php echo $row['trongluong']?></td>
                                    <td><?php echo $row['giasp']?></td>
                                    <td><?php echo $row['kichthuoc']?></td>
                                    <td><?php echo $row['tendanhmuc']?></td>
                                    <td><?php if($row['tinhtrang']==1){
                                        echo 'Kích hoạt';
                                    }else{
                                        echo 'Ẩn';
                                    }
                                    ?>
                                    
                                    </td>
                                    <td>
                                        <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham']?>">Xóa</a> | 
                                        <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham']?>">Sửa</a>
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