<?php
$sql_sua_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet = '$_GET[idbaiviet]' LIMIT 1";
$query_sua_danhmucbv = mysqli_query($mysqli,$sql_sua_danhmucbv);     
?>
<div class="container-fluid px-4">
                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Sửa danh mục bài viết</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm table-hover">
                            <form method="POST" action="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet']?>">
                            <?php
                                while($dong = mysqli_fetch_array($query_sua_danhmucbv)){
                            ?>
                             <tbody>
                                <tr>                                   
                                    <td>Tên danh mục bài viết</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" class="form-control" value="<?php echo $dong['tendanhmuc_baiviet']?>" aria-describedby="basic-addon1" name="tendanhmucbaiviet">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Thứ tự</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" class="form-control" value="<?php echo $dong['sothutubv']?>" aria-describedby="basic-addon1" name="sothutubv">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td><div class="d-grid gap-2 col-6 mx-auto"><button class="btn btn-success" type="submit" name="suadanhmucbaiviet">Bắt đầu sửa</button></div></td>
                                </tr>
                             </tbody>
                             <?php
                                }
                             ?>
                            </form>
                        </table>
                    </div>
                </div>

</div>