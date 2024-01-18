<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nhà sách trực tuyến - Trang Chủ</title>
    <!--meta-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--css-->
    <link rel="stylesheet" href="css/style.css">
    <!--bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!--owlcarousel-->
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/assets/owl.theme.default.min.css">
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/owlcarousel/owl.carousel.js"></script>
</head>
<body>
  <!-- Gọi Trang -->
    <?php
        session_start();
        include("admincp/config/config.php");
        include("page/header.php");
        include("page/menu.php");
        include("page/main.php");
        include("page/footer.php");
    ?>
<script src="js/bootstrap.bundle.min.js"></script>
<script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: false,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 4,
                  },
                  600: {
                    items: 6,
                  },
                  1000: {
                    items: 8,
                    loop: false,
                    margin: 20
                  }
                }
              })
            })
</script>
</body>
</html>