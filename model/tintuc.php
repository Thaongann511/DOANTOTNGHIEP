<?php

function tintuc_insert( $ten, $noidung, $hinh, $ngay, $idtt)
{
    $sql = "INSERT INTO tintuc(ten, noidung, hinh, ngay, idtt) VALUES ( ?, ?, ?, ?, ?)";
    pdo_execute($sql, $ten, $noidung, $hinh, $ngay, $idtt);
}

function tintuc_update($ten, $noidung, $hinh, $ngay, $idtt, $id){
    if($hinh!="")
    {
    $sql= " UPDATE tintuc SET ten=?, noidung=?, hinh=?, ngay=?, idtt=? WHERE id=? ";
    pdo_execute( $sql, $ten, $noidung, $hinh, $ngay, $idtt, $id );
    }
    else
    {
    $sql= "UPDATE tintuc SET ten=?, noidung=?, ngay=?, idtt=? WHERE id=? ";
    pdo_execute( $sql, $ten, $noidung, $ngay, $idtt, $id );
}
}

function tintuc_delete($id){
    $sql="DELETE FROM tintuc WHERE id=?";
        pdo_execute($sql, $id);
    }
// }

function get_hinh($id){
    $sql= "SELECT hinh FROM tintuc WHERE id=?";
    $gethinh= pdo_query_one($sql, $id);
    return $gethinh['hinh'];
}

function danhmuc_all() 
{
    $sql = "SELECT * FROM id_tintuc ORDER BY stt DESC";
    return pdo_query($sql);
}

function get_dssp( $kyw, $idtt,$limi)
{
    // $gthieu = "SELECT * FROM gioithieu WHERE trangthai=1";
    $sql = "SELECT * FROM tintuc WHERE 1";
    if($idtt>0){
        $sql.= " AND idtt=".$idtt;
    }
    if( $kyw!=""){
        $sql.= " AND ten like '%".$kyw."%'";
    }
    $sql .= " ORDER BY id DESC limit ".$limi;
    return pdo_query($sql);
}

function get_tintucchitiet($id){
    $sql= "SELECT * FROM tintuc WHERE id=?";
    return pdo_query_one($sql, $id);
}

function get_tintuc_by_id($id){
    $sql = "SELECT * FROM tintuc WHERE id=?";
    return pdo_query_one($sql, $id);
}

function showdm($dstt){
    $html_tt='';
    foreach ($dstt as $tt) {
        extract($tt);
        $link='index.php?act=tintuc&idtt='.$id;
        $html_tt.='
        <ul class="nav ">
        <li class="nav-item">
             <h5><a class="nav-link active" href="'.$link.'">'.$loaitintuc.'</a></h5>
             </li>
            </ul>';
    } 
    return $html_tt;
}

function get_dssp_new($limi){
    $sql= "SELECT * FROM tintuc ORDER BY id DESC limit ".$limi;
    return pdo_query($sql);
}

function get_tintuc_lienquan($idtt, $id, $limi){
    $sql= "SELECT * FROM tintuc WHERE idtt=? AND id<>? ORDER BY idtt DESC limit ".$limi;
    return pdo_query($sql, $idtt, $id );
}

function showgt_admin($tintuclist){
    $html_tt='';
          $i=1;
    foreach ($tintuclist as $tt) {
      extract($tt);
      $html_tt.= 
      ' <tr>
             <td>'.$i.'</td>
             <td>'.$ten.'</td>
             <td>'.$noidung.'</td>
             <td><img src="'.IMG_PATH_ADMIN.$hinh.'" alt="'.$ten.'" width="80px" /></td>
             <td>'.$ngay.'</td>
             <td>
                <a href="index.php?act=tintucupdate&id='.$id.'" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i> Sửa</a>
                <a href="index.php?act=deltintuc&id='.$id.'" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Xóa</a>
             </td>
          </tr>
          ';
          $i++;}
          return $html_tt;
       }

function show_dstt($dssp){
    $html_dssp='';
    foreach ($dssp as $sp){
        extract($sp);
        $link='index.php?act=tintucchitiet&idpro='.$id;
        $html_dssp.=' 
        <div class="blog-box row">
        <div class="col-md-4">
            <div class="post-media">
            <a href="'.$link.'">
                    <img src="layout/img/tintuc/'.$hinh.'" alt=""  height="200px"; width="270px";></a>
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
    } return $html_dssp;
}

function show_dsttlq($lq){
    $html_dsttlq='';
    foreach ($lq as $lq){
        extract($lq);
        $link='index.php?act=tintucchitiet&idpro='.$id;
        $html_dsttlq.=' 
        <div class="col-md-4">
        <div class="card" style="width: 350px;">
        <img src="layout/img/tintuc/'.$hinh.'" style="width:347px; height:200px">
        <div class="card-body">
        <a href="'.$link.'">'.$ten.'</a>
      </div>
        <p style="text-align:right">'.$ngay.'</p>
      </div>
      </div>    
';
    } return $html_dsttlq;
}

 function showdm_admin($dssp, $idtt){
    $html_dssp='';
    foreach ($dssp as $sp) {
        extract($sp);
        if($id==$idtt){
            $s="selected";
         }else{ 
            $s="";
         }
        $link='index.php?act=tintucchitiet&id='.$idtt;
        $html_dssp.='
       <option value="'.$id.'" '.$s.' >'.$loaitintuc.'</option>
        ';
    } 
    return $html_dssp;
}

function showdm_adminadd($dssp){
    $html_dssp='';
    foreach ($dssp as $sp) {
        extract($sp);
        $html_dssp.='
       <option value="'.$id.'" >'.$loaitintuc.'</option>
        ';
    } 
    return $html_dssp;
}

?>