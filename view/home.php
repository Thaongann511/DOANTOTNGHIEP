<?php 
 //php dành cho trang chủ
  $html_trangchu_new=show_trangchu($trangchu);

  $html_sukien_new=get_show_sukien($sukien);

 ?>
 <!-- ======= Hero Section ======= -->
<!-- <section class="section"> -->
  <div class="container">
    <div class= "row">
    <div class="col-3">
  <div class="widget">
    <h4 class="widget-title"><strong>Sự kiện gần đây </strong></h4>
    <div class="blog-list-widget">
    <div class="list-group">
    <?=$html_sukien_new;?>
  </div>
</div>
</div>
    </div>

    <div class="col-lg-9">
    <a href=""><img src="layout/img/banner/130nam.png" width="105%", height="150px"></a>
    <hr>
    <img src="layout/img/banner/huongdan.png" width="105%", height="150px"> 
    <br><br>
    
    <div class="row">
     <div class="col-4">
        <div class="card" style="width: 280px;">
        <img src="layout/img/logo/hinhchidan.png" style="width:280px; height:200px">
        <div class="card-body">
        <a href="index.php?act=gioithieu">Đầy đủ thông tin</a>
    </div>
        </div>
  </div>   
 
  <div class="col-4">
        <div class="card" style="width: 280px;">
        <img src="layout/img/logo/hinhchidan.png" style="width:280px; height:200px">
        <div class="card-body">
        <a href="index.php?act=tintuc">Tin tức - sự kiện nổi bật</a>
        </div>
    </div>
  </div>   

  <div class="col-4">
        <div class="card" style="width: 280px;">
        <img src="layout/img/logo/hinhchidan.png" style="width:280px; height:200px">
        <div class="card-body">
        <a href="index.php?act=hientrangrung">Báo cáo chi tiết</a>
    </div>
  </div>
  </div>
    </div>

    <br>
  
    <div class="row">
     <div class="col-4">
        <div class="card" style="width: 280px;">
        <img src="layout/img/logo/hinhchidan.png" style="width:280px; height:200px">
        <div class="card-body">
        <a href="index.php?act=thongke">Thống kê chính xác</a>
    </div>
        </div>
  </div>   
    </div>
    </div>


<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <!-- <div class="container" data-aos="fade-up"> -->

    <div class="section-title">
      <h2>TIỀM NĂNG</h2>
      <p>KHÁM PHÁ NHỮNG ĐIỀU THÚ VỊ TẠI ĐÀ LẠT</p>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Tất cả</li>
          <li data-filter=".filter-app">Du lịch</li>
          <li data-filter=".filter-card">Văn hóa</li>
          <li data-filter=".filter-web">Ẩm thực</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="layout/img/tiemnang/dulich/4.png" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="index.php?act=duonghamdatset" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>Đường Hầm Điêu Khắc Đà Lạt</h4>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="layout/img/tiemnang/amthuc/1.png" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="https://vinpearl.com/vi/banh-trang-nuong-da-lat" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>Bánh Tráng Nướng + Sữa Đậu Nành Nóng</h4>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="layout/img/tiemnang/dulich/2.png" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="https://www.traveloka.com/vi-vn/explore/destination/ho-xuan-huong-da-lat-acc/209218" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>Hồ Xuân Hương</h4>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="layout/img/tiemnang/vanhoa/1.png" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="https://hoanhap.vn/chi-tiet/le-hoi-cong-chieng-da-lat-net-van-hoa-dac-sac-cua-dong-bao-dan-toc-lach1607586590.html" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>Lễ Hội Cồng Chiêng</h4>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="layout/img/tiemnang/amthuc/2.png" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="https://mia.vn/cam-nang-du-lich/banh-can-da-lat-top-nhung-quan-ngon-nhat-tai-thanh-pho-suong-mu-1343" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>Bánh Căn</h4>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="layout/img/tiemnang/dulich/3.png" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="https://mia.vn/cam-nang-du-lich/doi-robin-ngam-nhin-toan-canh-da-lat-tho-mong-tu-tren-cao-1375" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>Đồi Robin Đà Lạt</h4>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="layout/img/tiemnang/vanhoa/3.png" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="https://mia.vn/cam-nang-du-lich/le-hoi-tra-da-lat-hoa-minh-vao-tuan-le-van-hoa-tra-dac-sac-1624" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>Lễ Hội Trà</h4>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="layout/img/tiemnang/vanhoa/5.png" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="https://mia.vn/cam-nang-du-lich/festival-hoa-da-lat-tat-tan-tat-ve-le-hoi-hoa-lon-nhat-tai-da-lat-1623" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>Festival Hoa Đà Lạt</h4>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="layout/img/tiemnang/amthuc/3.png" class="img-fluid" alt="">
          <div class="portfolio-links">
            <a href="https://vinpearl.com/vi/lau-ga-la-e-da-lat" title="More Details"><i class="bi bi-link"></i></a>
          </div>
          <div class="portfolio-info">
            <h4>Lẩu Gà Lá É</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
</section>
<!-- End Portfolio Section -->

<!-- ======= F.A.Q Section ======= -->
<section id="faq" class="faq section-bg">
<div class="section-title">
      <h2>CÁC CÂU HỎI THƯỜNG GẶP</h2>
</div>

<div class="container" data-aos="fade-up">
    <ul class="faq-list" data-aos="fade-up" data-aos-delay="80">
      <li>
      <div data-bs-toggle="collapse" class="collapsed question" href="#faq1"><span style="font-size: 20px">Sài Gòn đi Đà Lạt bao nhiêu tiếng?</span><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
        <span style="font-size: 20px"><p style="text-align: justify;">
          Quãng đường từ Sài Gòn đi Đà Lạt dài khoảng hơn 300km. Thông thường, thời gian di chuyển trung bình sẽ mất từ 6 đến 8 tiếng. Đây chỉ là thời gian di chuyển dự kiến. Tuỳ vào phương tiện bạn lựa chọn di chuyển và tình hình giao thông ở từng thời điểm mà thời gian này có thể ngắn hoặc dài hơn.
          </p></span>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question"><span style="font-size: 20px">Những hãng xe nào đi lên Đà Lạt</span><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
        <span style="font-size: 20px">
            Tùy vào sự lựa chọn của bạn có các hãng xe sau: <br>
            Đối với xe ghế ngồi:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;1. Điền Linh Limousine<br>
            &nbsp;&nbsp;&nbsp;&nbsp;2. Nhà xe Long Vân Limousine<br>
            &nbsp;&nbsp;&nbsp;&nbsp;3. Nhà xe An Anh Limousine<br>
            Đối với xe giường nằm:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;1. Long Vân Limousine<br>
            &nbsp;&nbsp;&nbsp;&nbsp;2. Nhà xe Phương Trang<br>
            &nbsp;&nbsp;&nbsp;&nbsp;3. Nhà xe Thành Bưởi</span>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question"><span style="font-size: 20px">Thời gian nào đi Đà Lạt phù hợp nhất?</span><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
        <span style="font-size: 20px"><p>
          Thời điểm tuyệt nhất để đi Đà Lạt là khoảng thời gian đầu tháng 11 tới tháng 3, cuối thu chớm đông và mùa xuân bắt đầu. Cuối tháng 10, đầu tháng 11 là mùa hoa dã quỳ nở. Mùa xuân có hoa mai anh đào nở và nhiều loài hoa khác nở rộ, đây cũng là mùa đẹp nhất trong năm.
        </p></span>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question"><span style="font-size: 20px">Các món ăn nhất định phải thử khi đến Đà Lạt?</span><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
        <span style="font-size: 20px"><p>
            Đối với những bạn lần đầu đi lên Đà Lạt sẽ có nhiều sự bỡ ngỡ không biết nên thử các món nào khi đặ chân tới. Dưới đây là một số món ngon Đà Lạt trứ danh nhất định phải thử một lần<br>
            &nbsp;&nbsp;&nbsp;&nbsp;Bánh ướt lòng gà<br>
            &nbsp;&nbsp;&nbsp;&nbsp;Bánh căn<br> 
            &nbsp;&nbsp;&nbsp;&nbsp;Bánh bèo. <br>
            &nbsp;&nbsp;&nbsp;&nbsp;Bánh tráng nướng.<br>
            &nbsp;&nbsp;&nbsp;&nbsp;Sữa đậu nành. <br> 
            &nbsp;&nbsp;&nbsp;&nbsp;Khoai, bắp nướng.<br>
            &nbsp;&nbsp;&nbsp;&nbsp;Nem nướng Đà Lạt.<br>
            &nbsp;&nbsp;&nbsp;&nbsp;Bánh mì xíu mại.
          </p></span>
        </div>
      </li>

      <li>
        <div data-bs-toggle="collapse" href="#faq5" class="collapsed question"><span style="font-size: 20px">Những nơi nên đi khi đến Đà Lạt?</span><i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
        <div id="faq5" class="collapse" data-bs-parent=".faq-list">
        <span style="font-size: 20px"> <p>Những nơi nổi tiếng nhất định bạn phải tới khi đặt chân đến Đà Lạt<br>
            &nbsp;&nbsp;&nbsp;&nbsp;Hồ Xuân Hương.<br>
            &nbsp;&nbsp;&nbsp;&nbsp;Đồi Mộng Mơ Đồi<br> 
            &nbsp;&nbsp;&nbsp;&nbsp;Thung lũng tình yêu<br>
            &nbsp;&nbsp;&nbsp;&nbsp;Thác Datanla.<br>
            &nbsp;&nbsp;&nbsp;&nbsp;Quảng trường Lâm Viên<br> 
          </p></span>
        </div>
      </li>
    </ul>
  </div>
</section><!-- End F.A.Q Section -->
</main>