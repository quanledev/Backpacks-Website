<div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">720</h3>
                                <p class="fs-5">Products</p>
                            </div>
                            <i class="fas fa-gift fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">4920</h3>
                                <p class="fs-5">Sales</p>
                            </div>
                            <i
                                class="fas fa-hand-holding-usd fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">3899</h3>
                                <p class="fs-5">Delivery</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">%25</h3>
                                <p class="fs-5">Increase</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Thêm sản phẩm</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm table-hover">
                            <form method="POST" action="modules/quanlysp/xuly.php" enctype="multipart/form-data">
                             <tbody>
                                <tr>                                   
                                    <td>Mã sản phẩm</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" class="form-control" aria-describedby="basic-addon1" name="masp">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Tên sản phẩm</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" class="form-control" aria-describedby="basic-addon1" name="tensanpham">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Giá sản phẩm</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" class="form-control" aria-describedby="basic-addon1" name="giasp">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Số lượng</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" class="form-control" aria-describedby="basic-addon1" name="soluong">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Chất liệu</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" class="form-control" aria-describedby="basic-addon1" name="chatlieu">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Kích thước</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" class="form-control" aria-describedby="basic-addon1" name="kichthuoc">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Trọng lượng</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" class="form-control" aria-describedby="basic-addon1" name="trongluong">
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
                                    <td>Danh mục sản phẩm</td>
                                    <td>
                                    <select class="form-select" aria-label="Default select example" name="danhmuc">
                                            <?php
                                                $sql_danhmucsp = "SELECT * FROM tbl_danhmucsp ORDER BY id_danhmucsp DESC";
                                                $query_danhmuc = mysqli_query($mysqli,$sql_danhmucsp);
                                                while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                                            ?>
                                            <option value="<?php echo $row_danhmuc['id_danhmucsp']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
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
                                    <td><div class="d-grid gap-2 col-6 mx-auto"><button class="btn btn-success" type="submit" name="themsanpham">Thêm sản phẩm</button></div></td>
                                </tr>
                             </tbody>
                            </form>
                        </table>
                    </div>
                </div>

</div>