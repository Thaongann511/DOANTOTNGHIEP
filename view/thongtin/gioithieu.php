<?php
    $html_gioithieu_new=show_gioithieu($gthieu);
    $html_sukien_new=get_show_sukien($sukien);
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
           <h3 style="display: flex; justify-content: center;"><strong>THÔNG TIN</strong></h3>
          
           
       <!-- <div class="col-md-4"> -->
       <?=$html_gioithieu_new?>
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