<div class="container-fluid px-4">
<div class="row my-5">
    <?php
          $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmucsp ORDER BY sothutusp DESC";
          $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);     
    ?>
                    <h3 class="fs-4 mb-3">Liệt kê danh mục sản phẩm</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm  table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Tên danh mục</th>
                                    <th scope="col">Thứ tự</th>
                                    <th scope="col">Quản Lý</th>
                                </tr>
                            </thead>
                            <tbody>
    <?php
           $i = 0;
           while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
           $i++;
    ?>
                                <tr>
                                    <td><?php echo $i?></td>
                                    <td><?php echo $row['tendanhmuc']?></td>
                                    <td><?php echo $row['sothutusp']?></td>
                                    <td>
                                        <a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmucsp']?>">Xóa</a> | 
                                        <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmucsp']?>">Sửa</a>
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