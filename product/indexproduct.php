<?php
    if(isset($_GET['trang'])){
        $page = $_GET['trang'];
    }else{
        $page = '';
    }
    if($page == '' || $page == 1){
        $begin = 0;
    }else{
        $begin = ($page*12)-12;
    }
    $sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmucsp WHERE tbl_sanpham.id_danhmucsp = tbl_danhmucsp.id_danhmucsp  ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,12";
    $query_pro = mysqli_query($mysqli,$sql_pro);

?>
<!-- product -->
<div class="product-title border-bottom border-danger">
                <div class="row">
                    <div class="col-md-4">
                       <h3><strong class="bg-danger text-white badge">Sản phẩm mới nhất</strong></h3>
                    </div>
                    <!-- <div class="col-md-8 text-end">
                        Tình Cảm Isekai Học Đường Trinh Thám 
                    </div> -->
                </div>
            </div>
            <div class="product-list-s py-3">
                <div class="row">
                    <?php
                        while($row = mysqli_fetch_array($query_pro)){
                    ?>
                    <div class="card" style="width: 20rem; margin-left: 5px; margin-right: 5px; margin-top: 15px">
                         <img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>" class="card-img-top">
                         <div class="card-body">
                           <h5 class="card-title"><?php echo $row['tensanpham']?></h5>
                           <p class="card-text text-danger">Giá: <?php echo number_format($row['giasp'],0,',','.').' đ';?></p>
                           <p class="card-text"><?php echo $row['tendanhmuc']?></p>
                           <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham']?>" class="btn btn-danger">Xem chi tiết</a>
                         </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
                <br>
                <div class="row" style="clear:both;">
                <style type="text/css">
                    ul.list_trang{
                        padding: 0;
                        margin: 0;
                        list-style: none;
                    }
                    ul.list_trang li{
                        float: left;
                        padding: 5px 13px;
                        margin: 5px;
                        background: burlywood;
                        display: block;
                    }
                    ul.list_trang li a{
                        color: #000;
                        text-align: center;
                        text-decoration: none;
                    }
                </style>
                <?php
                $sql_trang = mysqli_query($mysqli, "SELECT * FROM tbl_sanpham");
                $row_count = mysqli_num_rows($sql_trang);
                $trang = ceil($row_count/12);
                ?>
                <ul class="list_trang">
                    <?php
                    for($i=1;$i<=$trang;$i++){
                    ?>
                    <li <?php if($i==$page){echo 'style="background: brown"';} else{echo '';}?>><a href="index.php?trang=<?php echo $i?>"><?php echo $i ?></a></li>
                    <?php
                    }
                    ?>
                </ul>
                </div>
            </div>