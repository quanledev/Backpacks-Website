<?php
$sql_sua_danhmucsp = "SELECT * FROM tbl_danhmucsp WHERE id_danhmucsp = '$_GET[iddanhmuc]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);     
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
                    <h3 class="fs-4 mb-3">Sửa danh mục sản phẩm</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm table-hover">
                            <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
                            <?php
                                while($dong = mysqli_fetch_array($query_sua_danhmucsp)){
                            ?>
                             <tbody>
                                <tr>                                   
                                    <td>Tên danh mục</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" class="form-control" value="<?php echo $dong['tendanhmuc']?>" aria-describedby="basic-addon1" name="tendanhmuc">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Thứ tự</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" class="form-control" value="<?php echo $dong['sothutusp']?>" aria-describedby="basic-addon1" name="sothutusp">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td><div class="d-grid gap-2 col-6 mx-auto"><button class="btn btn-success" type="submit" name="suadanhmuc">Bắt đầu sửa</button></div></td>
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