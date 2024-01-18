<div class="container-fluid px-4">
<div class="row my-5">
    <?php
          $sql_lietke_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY sothutubv DESC";
          $query_lietke_danhmucbv = mysqli_query($mysqli,$sql_lietke_danhmucbv);     
    ?>
                    <h3 class="fs-4 mb-3">Liệt kê danh mục bài viết</h3>
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
           while($row = mysqli_fetch_array($query_lietke_danhmucbv)){
           $i++;
    ?>
                                <tr>
                                    <td><?php echo $i?></td>
                                    <td><?php echo $row['tendanhmuc_baiviet']?></td>
                                    <td><?php echo $row['sothutubv']?></td>
                                    <td>
                                        <a href="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet']?>">Xóa</a> | 
                                        <a href="?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet']?>">Sửa</a>
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