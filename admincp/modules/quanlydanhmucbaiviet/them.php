<div class="container-fluid px-4">
                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Thêm danh mục bài viết</h3>
                    <div class="col">
                        <table class="table bg-white rounded shadow-sm table-hover">
                            <form method="POST" action="modules/quanlydanhmucbaiviet/xuly.php">
                             <tbody>
                                <tr>                                   
                                    <td>Tên danh mục bài viết</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" class="form-control" aria-describedby="basic-addon1" name="tendanhmucbaiviet">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td>Thứ tự</td>
                                    <td>
                                     <div class="input-group">
                                         <input type="text" class="form-control" aria-describedby="basic-addon1" name="sothutubv">
                                     </div>
                                    </td>
                                </tr>
                                <tr>                                   
                                    <td><div class="d-grid gap-2 col-6 mx-auto"><button class="btn btn-success" type="submit" name="themdanhmucbaiviet">Thêm danh mục bài viết</button></div></td>
                                </tr>
                             </tbody>
                            </form>
                        </table>
                    </div>
                </div>
</div>