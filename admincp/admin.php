<?php
session_start();
if(!isset($_SESSION['dangnhap'])){
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--css-->
    <link rel="stylesheet" href="css/admin.css" />
    <!--fontawesome-->
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <!---->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <!--title-->
    <title>Giao diện ADMIN - nhà sách</title>
</head>

<body>
 <div class="d-flex" id="wrapper">
        <!-- Gọi Trang -->
    <?php
        include("config/config.php");
        include("modules/sidebar.php");
        include("modules/main.php");
    ?>     
 </div>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
 <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
 </script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
 <!--cdn js-->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'tomtat' );
        CKEDITOR.replace( 'noidung' );
    </script>
 <script type="text/javascript">
        new Morris.Line({
        // ID of the element in which to draw the chart.
        element: 'chart',
        // Chart data records -- each entry in this array corresponds to a point on
         // the chart.
     data: [
     { year: '2008', value: 20 },
     { year: '2009', value: 10 },
     { year: '2010', value: 5 },
     { year: '2011', value: 5 },
     { year: '2012', value: 20 }
            ],
        // The name of the data record attribute that contains x-values.
        xkey: 'year',
        // A list of names of data record attributes that contain y-values.
        ykeys: ['value'],
        // Labels for the ykeys -- will be displayed when you hover over the
        // chart.
         labels: ['Value']
    });
 </script>
</body>

</html>