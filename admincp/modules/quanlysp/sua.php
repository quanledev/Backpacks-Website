<?php
$sql_sua_sp = "SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);     
?>
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
                    <h3 class="fs-4 mb-3">Sửa sản phẩm</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm table-hover">
                        <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $_GET['idsanpham']?>" enctype="multipart/form-data">
                            <?php
                                while($row = mysqli_fetch_array($query_sua_sp)){
                            ?>
                             <tbody>
                                <tr>                                   
                                    <td>Mã sản phẩm</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" value="<?php echo $row['masp']?>" class="form-control" aria-describedby="basic-addon1" name="masp">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Tên sản phẩm</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" value="<?php echo $row['tensanpham']?>" class="form-control" aria-describedby="basic-addon1" name="tensanpham">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Giá sản phẩm</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" value="<?php echo $row['giasp']?>" class="form-control" aria-describedby="basic-addon1" name="giasp">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Số lượng</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" value="<?php echo $row['soluong']?>" class="form-control" aria-describedby="basic-addon1" name="soluong">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Chất liệu</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" value="<?php echo $row['chatlieu']?>" class="form-control" aria-describedby="basic-addon1" name="chatlieu">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Kích thước</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" value="<?php echo $row['kichthuoc']?>" class="form-control" aria-describedby="basic-addon1" name="kichthuoc">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Trọng lượng</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" value="<?php echo $row['trongluong']?>" class="form-control" aria-describedby="basic-addon1" name="trongluong">
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
                                         <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" width="150px">
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
                                                    if($row_danhmuc['id_danhmucsp']==$row['id_danhmucsp']){
                                            ?>
                                            <option selected value="<?php echo $row_danhmuc['id_danhmucsp']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                                            <?php
                                                    }else{
                                            ?>
                                            <option value="<?php echo $row_danhmuc['id_danhmucsp']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
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
                                    <td><div class="d-grid gap-2 col-6 mx-auto"><button class="btn btn-success" type="submit" name="suasanpham">Sửa sản phẩm</button></div></td>
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