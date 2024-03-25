<?php
function get_show_sukien($sukien){
    $html_sukien_new='';
    foreach ($sukien as $sk) {
       extract($sk);
       $html_sukien_new.= '
       <div class="w-100 justify-content-between">
       <a href="">
       <img src="layout/img/sukien/'.$hinh.'" alt="" class="img-fluid";></a>
       <h6><a href="index.php?act=tintuc" class="list-group-item list-group-item-action">'.$ten.'
       <p style="text-align: right;">'.$ngay.'</p>
       </a></h6>
       </div>
       '; 
    }return $html_sukien_new;
}

// function cau_hoi($cauhoi){
//     $html_cauhoi='';
//     foreach ($cauhoi as $as) {
//         extract($as);
//         $html_cauhoi='
//         <li>
//         <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">'.$cauhoi.'<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
//         <div id="faq1" class="collapse" data-bs-parent=".faq-list">
//           <p>'.$traloi.'</p>
//         </div>
//       </li>';
//     } return $html_cauhoi;
// }
function show_trangchu($trangchu){
    $html_trangchu_new='';
    foreach ($trangchu as $home) {
   extract($home);
   $link="index.php?act=gioithieuchitiet&idpro=".$id;
   $html_trangchu_new.= '   
   <div class="blog-box row">
   <div class="col-md-">
       <div class="post-media">
           <a href="'.$link.'">
               <img src="layout/img/trangchu/'.$hinh.'" alt="" class="img-fluid"></a>
               <div class="hovereffect"></div>
           </a>
       </div>
   </div>
   <div class="blog-meta big-meta col-md-6">
   <h5><strong>'.$tieude.'</strong></h5>
       <small><i>'.$ngay.'</i></small>
   </div>
</div>
<hr class="invis"> ';
 } return $html_trangchu_new;
}

function get_trangchu_new($limi)
{
    // $gthieu = "SELECT * FROM gioithieu WHERE trangthai=1";
    $sql = "SELECT * FROM trangchu ORDER BY id DESC limit ".$limi;
    return pdo_query($sql);
}

function get_sukien_new()
{
    $sql = "SELECT * FROM sukien ORDER BY id DESC";
    return pdo_query($sql);
}


 ?>

 