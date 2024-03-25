<?php

function tiemnang_insert( $ten, $noidung, $hinh, $ngay, $idtn)
{
    $sql = "INSERT INTO tiemnang(ten, noidung, hinh, ngay, idtn) VALUES ( ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ten, $noidung, $hinh, $ngay, $idtn);
}

function tiemnang_update($ten, $noidung, $hinh, $ngay, $idtn, $id){
    if($hinh!="")
    {
    $sql= " UPDATE tiemnang SET ten=?, noidung=?, hinh=?, ngay=?, idtt=? WHERE id=? ";
    pdo_execute( $sql, $ten, $noidung, $hinh, $ngay, $idtn, $id );
    }
    else
    {
    $sql= "UPDATE tiemnang SET ten=?, noidung=?, ngay=?, idtn=? WHERE id=? ";
    pdo_execute( $sql, $ten, $noidung, $ngay, $idtn, $id );
}
}

function tiemnang_delete($id){
    $sql="DELETE FROM tiemnang WHERE id=?";
        pdo_execute($sql, $id);
    }
// }

function get_hinh1($id){
    $sql= "SELECT hinh FROM tiemnang WHERE id=?";
    $gethinh= pdo_query_one($sql, $id);
    return $gethinh['hinh'];
}

function danhmuc_all1() 
{
    $sql = "SELECT * FROM id_tiemnang ORDER BY stt DESC";
    return pdo_query($sql);
}

function get_dstn( $kyw, $idtn,$limi)
{
    // $gthieu = "SELECT * FROM gioithieu WHERE trangthai=1";
    $sql = "SELECT * FROM tiemnang WHERE 1";
    if($idtn>0){
        $sql.= " AND idtn=".$idtn;
    }
    if( $kyw!=""){
        $sql.= " AND ten like '%".$kyw."%'";
    }
    $sql .= " ORDER BY id DESC limit ".$limi;
    return pdo_query($sql);
}

function get_tiemnangchitiet($id){
    $sql= "SELECT * FROM tiemnang WHERE id=?";
    return pdo_query_one($sql, $id);
}

function get_tiemnang_by_id($id){
    $sql = "SELECT * FROM tiemnang WHERE id=?";
    return pdo_query_one($sql, $id);
}

function showtn($dstn){
    $html_tn='';
    foreach ($dstn as $tn) {
        extract($tn);
        $link='index.php?act=tiemnang&idtn='.$id;
        $html_tn.='
        <ul class="nav ">
        <li class="nav-item">
             <h5><a class="nav-link active" href="'.$link.'">'.$loaitiemnang.'</a></h5>
             </li>
            </ul>';
    } 
    return $html_tn;
}

function get_dstn_new($limi){
    $sql= "SELECT * FROM tiemnang ORDER BY id DESC limit ".$limi;
    return pdo_query($sql);
}

function get_tiemnang_lienquan($idtn, $id, $limi){
    $sql= "SELECT * FROM tiemnang WHERE idtn=? AND id<>? ORDER BY idtn DESC limit ".$limi;
    return pdo_query($sql, $idtn, $id );
}

function showtn_admin1($tiemnanglist){
    $html_tn='';
          $i=1;
    foreach ($tiemnanglist as $tn) {
      extract($tn);
      $html_tn.= 
      ' <tr>
             <td>'.$i.'</td>
             <td>'.$ten.'</td>
             <td>'.$noidung.'</td>
             <td><img src="'.IMG_PATH_ADMIN.$hinh.'" alt="'.$ten.'" width="80px" /></td>
             <td>'.$ngay.'</td>
             <td>
                <a href="index.php?act=tiemnangupdate&id_tiemnang='.$id.'" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                <a href="index.php?act=deltiemnang&id_tiemnang='.$id.'" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
             </td>
          </tr>
          ';
          $i++;}
          return $html_tn;
       }

function show_dstn($dstn){
    $html_dstn='';
    foreach ($dstn as $tn){
        extract($tn);
        $link='index.php?act=tiemnangchitiet&idpro='.$id;
        $html_dstn.=' 
        <div class="blog-box row">
        <div class="col-md-4">
            <div class="post-media">
            <a href="'.$link.'">
                    <img src="layout/img/tiemnang/'.$hinh.'" alt=""  height="200px"; width="270px";></a>
                    <div class="hovereffect"></div>
                 </div>
        </div>
        <div class="blog-meta big-meta col-md-7">
        <h5><strong>'.$ten.'</strong></h5>
            <small><i>'.$ngay.'</i></small>
        </div>
     </div>
     <hr>
';
    } return $html_dstn;
}

 function showtn_admin($dstn, $idtn){
    $html_dstn='';
    foreach ($dstn as $tn) {
        extract($tn);
        if($id==$idtn){
            $s="selected";
         }else{ 
            $s="";
         }
       
        $html_dstn.='
       <option value="'.$id.'" '.$s.' >'.$loaitiemnang.'</option>
        ';
    } 
    return $html_dstn;
}

function showtn_adminadd1($dstn){
    $html_dstn='';
    foreach ($dstn as $tn) {
        extract($tn);
        $html_dstn.='
       <option value="'.$id.'" >'.$loaitiemnang.'</option>
        ';
    } 
    return $html_dstn;
}

?>