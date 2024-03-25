<?php

function show_lichsu($lichsu){
   $html_lichsu_new='';
    foreach ($lichsu as $lichsu) {
      extract($lichsu);
      $link='index.php?act=thongtinchitiet&idpro='.$id;
      $html_lichsu_new.= '
      <p style="text-align: justify;">'.$noidung.'</p>
      <a href="'.$link.'" title="">
      <img src="layout/img/gioithieu/'.$hinh.'" 
      class="mx-auto d-block" 
      style="width:60%" 
      alt="gioithieu"></a>
      <i><center>'.$ghichu.'</center></i>
   <hr class="invis"> ';
    } return $html_lichsu_new;
}
function show_gioithieu($gthieu){
   $html_gioithieu_new='';
   foreach ($gthieu as $gt) {
     extract($gt);
     $link='index.php?act=thongtinchitiet&idpro='.$id;
     $html_gioithieu_new.= 
     ' 
     <h5><b>'.$tennd.'</b></h5>
     <span><p style="text-align: justify;">'.$noidung.'</p></span>
     <a href="'.$link.'" title="">
     <img src="layout/img/gioithieu/'.$hinh.'" 
     class="mx-auto d-block"
     style="width:60%" alt="gioithieu"></a>
     <i><center>'.$ghichu.'</center></i>
  <hr class="invis"> ';
   } return $html_gioithieu_new;
}
// function danhmuc_all() {
//    $sql = "SELECT * FROM id_tintuc ORDER BY stt DESC";
//    return pdo_query($sql);
// }
function get_gioithieu_new($limi)
{
    // $gthieu = "SELECT * FROM gioithieu WHERE trangthai=1";
    $sql = "SELECT * FROM gioithieu ORDER BY id DESC limit ".$limi;
    return pdo_query($sql);
}
 
 function get_lichsu_new()
 {
    $sql = "SELECT * FROM lichsu ORDER BY id DESC";
    return pdo_query($sql);
 }
 
 function get_dktn_new()
 {
    $sql = "SELECT * FROM dktn ORDER BY id DESC";
    return pdo_query($sql);
 }

 function get_tntn_new()
 {
    $sql = "SELECT * FROM tntn ORDER BY id DESC";
    return pdo_query($sql);
 }

 ?>