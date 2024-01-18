 <!--Main-->
 <section class="content my-3">
        <div class="container">
            <div class="silder mb-3">
              <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/banner1.jpg" class="d-block w-100" alt="...">
                  </div>
                  <!-- <div class="carousel-item">
                    <img src="images/bannerbalo.jpg" class="d-block w-60" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="images/bannerbalo.jpg" class="d-block w-60" alt="...">
                  </div> -->
                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Next</span>
                </button> -->
              </div>
            </div>
            <!-- end silder -->
            <!-- cate-list -->
            <!-- <div class="silder mb-3">
                <div class="row">
                  <div class="large-12 columns">
                    <div class="owl-carousel owl-theme">
                      <div class="item">
                         <div class="category-icon">
                            <img src="images/Luyen_Thi.jpg" alt="">
                            <p>Tên chủ đề</p>
                         </div>
                      </div>
                      <div class="item">
                         <div class="category-icon">
                            <img src="images/Luyen_Thi.jpg" alt="">
                            <p>Tên chủ đề</p>
                         </div>
                      </div>
                      <div class="item">
                         <div class="category-icon">
                            <img src="images/Luyen_Thi.jpg" alt="">
                            <p>Tên chủ đề</p>
                         </div>
                      </div>
                      <div class="item">
                         <div class="category-icon">
                            <img src="images/Luyen_Thi.jpg" alt="">
                            <p>Tên chủ đề</p>
                         </div>
                      </div>
                      <div class="item">
                         <div class="category-icon">
                            <img src="images/Luyen_Thi.jpg" alt="">
                            <p>Tên chủ đề</p>
                         </div>
                      </div>
                      <div class="item">
                         <div class="category-icon">
                            <img src="images/Luyen_Thi.jpg" alt="">
                            <p>Tên chủ đề</p>
                         </div>
                      </div>
                      <div class="item">
                         <div class="category-icon">
                            <img src="images/Luyen_Thi.jpg" alt="">
                            <p>Tên chủ đề</p>
                         </div>
                      </div>
                      <div class="item">
                         <div class="category-icon">
                            <img src="images/Luyen_Thi.jpg" alt="">
                            <p>Tên chủ đề</p>
                         </div>
                      </div>
           
                    </div>
                  </div>
                </div>
           </div> -->
        <!-- cate-list -->
        <!-- product -->
        <div class="product-list-mb-3">
            <?php
                 if(isset($_GET['quanly'])){
                     $tam = $_GET['quanly'];
                 }else
                 {
                     $tam = '';
                 }
                 if($tam =='danhmucsanpham'){
                    include("product/danhmuc.php");
                 }else if($tam =='giohang'){
                  include("product/giohang.php");
                 }else if($tam =='tintuc'){
                  include("product/tintuc.php");
                 }else if($tam =='lienhe'){
                  include("product/lienhe.php");
                 }else if($tam =='sanpham'){
                  include("product/sanpham.php");
                 }else if($tam =='dangky'){
                  include("product/dangky.php");
                 }else if($tam =='dangnhap'){
                  include("product/dangnhap.php");
                 }else if($tam =='timkiem'){
                  include("product/timkiem.php");
                 }else if($tam =='tongket'){
                  include("product/tongket.php");
                 }else if($tam =='gioithieu'){
                  include("product/gioithieu.php");
                 }else if($tam =='baiviet'){
                  include("product/baiviet.php");
                 }else if($tam =='thanhtoan'){
                  include("product/thanhtoan.php");
                 }else if($tam =='tuyendung'){
                  include("product/tuyendung.php");
                 }else if($tam =='question'){
                  include("product/question.php");
                 }else if($tam =='tintuc'){
                  include("product/tintuc.php");
                 }else if($tam =='lienhe'){
                  include("product/lienhe.php");
                 }else{
                    include("product/indexproduct.php");
                 }
            ?>
        </div>
        <!-- end product -->
        </div>
    </section>