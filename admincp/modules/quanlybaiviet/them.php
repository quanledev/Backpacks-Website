<div class="container-fluid px-4">
                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Thêm bài viết</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm table-hover">
                            <form method="POST" action="modules/quanlybaiviet/xuly.php" enctype="multipart/form-data">
                             <tbody>
                                <tr>                                   
                                    <td>Tên bài viết</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" class="form-control" aria-describedby="basic-addon1" name="tenbaiviet">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Tóm tắt</td>
                                    <td>
                                    <div class="form-floating">
                                       <textarea class="form-control" name="tomtat" id="floatingTextarea2" style="height: 100px"></textarea>
                                    </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Nội dung</td>
                                    <td>
                                    <div class="form-floating">
                                       <textarea class="form-control" name="noidung" id="floatingTextarea2" style="height: 100px"></textarea>
                                    </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Hình ảnh</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="file" class="form-control" aria-describedby="basic-addon1" name="hinhanh">
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
                                            ?>
                                            <option value="<?php echo $row_danhmuc['id_baiviet']?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']?></option>
                                            <?php
                                                }
                                            ?>
                                    </select>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Tình trạng</td>
                                    <td>
                                    <select class="form-select" aria-label="Default select example" name="tinhtrang">
                                            <option value="1">Kích hoạt</option>
                                            <option value="0">Ẩn</option>
                                    </select>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td><div class="d-grid gap-2 col-6 mx-auto"><button class="btn btn-success" type="submit" name="thembaiviet">Thêm bài viết</button></div></td>
                                </tr>
                             </tbody>
                            </form>
                        </table>
                    </div>
                </div>

</div>