<?php
	$sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE id='$_GET[idbaiviet]' LIMIT 1";
	$query_sua_bv = mysqli_query($mysqli,$sql_sua_bv);
?>
<div class="container-fluid px-4">
                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Sửa bài viết</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm table-hover">
                        <?php
                                while($row = mysqli_fetch_array($query_sua_bv)){
                        ?>
                        <form method="POST" action="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>" enctype="multipart/form-data">
                           
                             <tbody>
                                <tr>                                   
                                    <td>Tên bài viết</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" value="<?php echo $row['tenbaiviet']?>" class="form-control" aria-describedby="basic-addon1" name="tenbaiviet">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Tóm tắt</td>
                                    <td>
                                    <div class="form-floating">
                                       <textarea class="form-control" name="tomtat" id="floatingTextarea2" style="height: 100px"><?php echo $row['tomtat']?></textarea>
                                    </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Nội dung</td>
                                    <td>
                                    <div class="form-floating">
                                       <textarea class="form-control"  name="noidung" id="floatingTextarea2" style="height: 100px"><?php echo $row['noidung']?></textarea>
                                    </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Hình ảnh</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="file" class="form-control" aria-describedby="basic-addon1" name="hinhanh">
                                         <img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh']?>" width="150px">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Danh mục bài viết</td>
                                    <td>
                                    <select class="form-select" aria-label="Default select example" name="danhmuc">
                                            <?php
                                                $sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
                                                $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                                                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                                                    if($row_danhmuc['id_baiviet']==$row['id_danhmuc']){
                                            ?>
                                            <option selected value="<?php echo $row_danhmuc['id_baiviet']?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']?></option>
                                            <?php
                                                    }else{
                                            ?>
                                            <option value="<?php echo $row_danhmuc['id_baiviet']?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']?></option>
                                            <?php            
                                                    }
                                                }
                                            ?>
                                    </select>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Tình trạng</td>
                                    <td>
                                    <select class="form-select" aria-label="Default select example" name="tinhtrang">
                                            <?php
                                                if($row['tinhtrang']==1){
                                            ?>
                                            <option value="1" selected>Kích hoạt</option>
                                            <option value="0">Ẩn</option>
                                            <?php
                                                }else{
                                                    ?>
                                            <option value="1">Kích hoạt</option>
                                            <option value="0" selected>Ẩn</option>
                                            <?php
                                                }
                                            ?>
                                    </select>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td><div class="d-grid gap-2 col-6 mx-auto"><button class="btn btn-success" type="submit" name="suabaiviet">Sửa bài viết</button></div></td>
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