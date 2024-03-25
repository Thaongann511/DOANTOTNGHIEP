<?php
    $html_dktn_new='';
    foreach ($dktn as $dktn) {
      extract($dktn);
      $html_dktn_new.= '
      <h5><b>'.$tennd.'</b></h5>
      <p style="text-align: justify;">'.$noidung.'</p>
      <img src="layout/img/gioithieu/'.$hinh.'" 
      class="mx-auto d-block" 
      style="width:60%" 
      alt="gioithieu">
      <i><center>'.$ghichu.'</center></i>
   <hr class="invis"> ';
    }
   
    $html_sukien_new='';
    foreach ($sukien as $sukien) {
       extract($sukien);
       $html_sukien_new.= '
       <div class="w-70 justify-content-between">
       <img src="layout/img/sukien/'.$hinh.'" alt="" class="img-fluid"; height="300px";>
       <h6><a href="single.html" class="list-group-item list-group-item-action">'.$ten.'
       <p style="text-align: right;">'.$ngay.'</p>
       </a></h6>
       </div>
       '; 
    }
    ?>
    <!-- <div class="col-md-6" data-aos="fade-up" data-aos-delay="100"
    <i class="bx bx-cloud" ></i> > dán sau $html dòng 5-->
    <!-- ======= Hero Section ======= -->
   <section class="section">
       <!-- <div class="container"> -->
       <div class="container-sm">
           <div class="row">
           <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
           <div class="page-wrapper">
           <div class="blog-list clearfix">
           <h3 style="display: flex; justify-content: center;"><strong>ĐIỀU KIỆN TỰ NHIÊN, DÂN SỐ

</strong></h3>
        
       <!-- <div class="col-md-4"> -->
       <?=$html_dktn_new?>
   </div><!-- end blog-list -->
   </div>
   
   
   </div>
 
   <!-- <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12"> -->
   <div class="col-3">
       <div class="sidebar">
       <div class="widget">
   </div>
   
   <hr class="invis">
   <div class="widget">
       <h4 class="widget-title"><strong>Sự kiện gần đây </strong></h4>
       <div class="blog-list-widget">
       <div class="list-group">
       <?=$html_sukien_new?>
     </div>
   </section>