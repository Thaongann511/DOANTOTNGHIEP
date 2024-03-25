<?php
if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
  extract($_SESSION['s_user']);
  $html_account='<li class="dropdown"><a href="index.php?act=user"><span>Người dùng</span> <i class="bi bi-chevron-down"></i></a>
  <ul>
    <li><a href="index.php?act=myaccount">'.$username.'</a></li>
    <li><a href="index.php?act=logout">Thoát</a></li>
  </ul>
';

}else{
  $html_account='<a href="index.php?act=dangnhap"><span>Đăng nhập</span></a>
';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ĐỒ ÁN TỐT NGHIỆP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="layout/img/logo/logoweb.png" rel="icon">
  <link href="layout/img/logo/logoweb.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="layout/vendor/aos/aos.css" rel="stylesheet">
  <link href="layout/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="layout/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="layout/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="layout/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="layout/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- map -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
  <link rel="stylesheet" href="bando/resource/line-measure.css">
  <link rel="stylesheet" href="bando/styles.css">
  <link rel="stylesheet" href="bando/jquery-ui-1.12.1/jquery-ui.css">
  <link rel="stylesheet" href="bando/geocoder.css">
  

  
    
  <!-- Template Main CSS File -->
  <link href="layout/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
        <!-- chèn logo -->
        <div class="logo">
       <h5> <a href="index.php"><img src="layout/img/logo/logoweb.png" alt="" class="img-fluid"><strong>THÀNH PHỐ ĐÀ LẠT</strong></h5></a>
        </div>

        <!-- thanh dropdown menu -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Trang chủ</a></li>
          
          <!-- <li><a class="nav-link scrollto" href="#">Thông tin</a></li> -->
          <li class="dropdown"><a href="index.php?act=thongtin"><span>Thông tin</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index.php?act=gioithieu">Giới thiệu</a></li>
              <li><a href="index.php?act=lichsu">Lịch sử hình thành</a></li>
              <li><a href="index.php?act=dktn">Điều kiện tự nhiên - Dân số</a></li>
              <li><a href="index.php?act=tntn">Tài nguyên thiên nhiên</a></li>
              <li><a href="index.php?act=tintuc">Tin tức</a></li>
            </ul>

            <li><a href="index.php?act=hientrangrung">Hiện trạng rừng</a></li>
          
            <li class="dropdown"><a href="index.php?act=dulieu"><span>Dữ liệu</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index.php?act=thongke">Thống kê</a></li>
              <li><a href="index.php?act=cacbando">Các bản đồ</a></li>
            </ul>

            <li><a href="view/bando.php">Bản đồ</a></li>

            <li><a href="index.php?act=lienhe">Liên hệ</a></li>
          
          <?=$html_account;?>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
    </header>
    <div class="containerful">
    <img src="layout/img/banner/2.png" alt="" class="img-fluid">
    <!-- </div> -->

    <div class="containerful" style="margin-top:6px"></div>
    <marquee><h5><b>DEMO WEBSITE THỂ HIỆN THÔNG TIN BIẾN ĐỘNG RỪNG TẠI THÀNH PHỐ ĐÀ LẠT</b></h5> </marquee>

    <div class="container">
    <div class="row">
    <div class="col-md-8"><h4>
      <div class="w-80 justify-content-between">
      <?php
   date_default_timezone_set("Asia/Ho_Chi_Minh");
   echo date ("d-m-Y"); echo " - " . date ("H:i:s");


      ?>
      </h4></div>
       <div class="col-md-4">
    <form action="index.php?act=tintuc" method="post" class="form-inline">
      <input class="form-control" type="text" name="kyw" id="" placeholder="Nhập từ khóa">
      <input type="submit" name="timkiem" class="btn btn-primary" value=" Tìm kiếm">
    </form>
  </div>
 
       </div>
      </div>
</div>
</div>
</div>

<!-- End Header -->