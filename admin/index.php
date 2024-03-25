<?php
//login trang admin
session_start();
ob_start();
if(isset($_SESSION['s_user'])&&(is_array($_SESSION['s_user']))&&(count($_SESSION['s_user'])>0)){
    $admin=$_SESSION['s_user'];

    include_once "../model/global.php";
    include_once "../model/connect.php";
    include_once "../model/tintuc.php";
    include_once "../model/tiemnang.php";
    include_once "view/header.php";
    if (isset($_GET['act'])) {
        $act=$_GET['act'];
        switch ($act) {

//quản lý tin tức
            case 'tintuclist':
                $tintuclist=get_dssp_new(100);
                include_once "view/tintuclist.php";
                break;
            
            case 'updatetintuc':
                //kiểm tra và lấy dữ liệu
                if(isset($_POST['updatetintuc'])){
                    $ten=$_POST['ten'];
                    $noidung=$_POST['noidung'];
                    $ngay=$_POST['ngay'];
                    $idtt=$_POST['idtt'];
                    $id=$_POST['id'];
                    
                    $hinh=$_FILES['hinh']['name'];
                    if($hinh!=""){
                     //upload tin tuc
                     $target_file=IMG_PATH_ADMIN.$hinh;
                     move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                    } else {
                      $hinh="";  
                    }
                    //update into
                    tintuc_update( $ten, $noidung, $hinh, $ngay, $idtt, $id);   
                }

                //show danh sách tin tức
                $tintuclist=get_dssp_new(100);
                include_once "view/tintuclist.php";
                break;
            
            case 'tintucupdate':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    $tt=get_tintucchitiet($id);

                }
                //trở về trang danh sách tin tức
                $danhmuclist=danhmuc_all();
                include_once "view/tintucupdate.php";
                break;    

            case 'deltintuc':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    $hinh=IMG_PATH_ADMIN.get_hinh($id);
                    if(is_file($hinh)){
                        unlink($hinh);
                    }
                    try {
                        tintuc_delete($id);
                    } catch (\Throwable $th) {
                        //throw $th;
                        echo "<h3 style='color: red; text-align:center'>Tin tức không được xóa!</h3>";
                    }
                }
                //trở về trang danh sách tin tức
                $danhmuclist=get_dssp_new(100);
                include_once "view/tintuclist.php";
                break;

            case 'tintucadd':
                $danhmuclist=danhmuc_all();
                include_once "view/tintucadd.php";
                break;
            
            case 'addtintuc':
                if(isset($_POST['addtintuc'])){
                    //lấy dữ liệu về
                    $ten=$_POST['ten'];
                    $noidung=$_POST['noidung'];
                    $ngay=$_POST['ngay'];
                    $idtt=$_POST['idtt'];
                    $hinh=$_FILES['hinh']['name'];

                    //insert into
                    tintuc_insert( $ten, $noidung, $hinh, $ngay, $idtt);
                     
                    //upload tin tuc
                    $target_file=IMG_PATH_ADMIN.$hinh;
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);

                    //trở về trang danh sách tin tức
                    $danhmuclist=get_dssp_new(100);
                    include_once "view/tintuclist.php";
                }else{
                $danhmuclist=danhmuc_all();
                include_once "view/tintucadd.php";
                }
                break;

            //quản lý tiềm năng
            case 'tiemnanglist':
                $tiemnanglist=get_dstn_new(100);
                include_once "view/tiemnanglist.php";
                break;

            case 'updatetiemnang':
                //kiểm tra và lấy dữ liệu
                if(isset($_POST['updatetiemnang'])){
                    $ten=$_POST['ten'];
                    $noidung=$_POST['noidung'];
                    $ngay=$_POST['ngay'];
                    $idtn=$_POST['idtn'];
                    $id=$_POST['id'];
                    
                    $hinh=$_FILES['hinh']['name'];
                    if($hinh!=""){
                    //upload tin tuc
                    $target_file=IMG_PATH_ADMIN.$hinh;
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                    } else {
                    $hinh="";  
                    }
                    //update into
                    tiemnang_update( $ten, $noidung, $hinh, $ngay, $idtn, $id);   
                }

                //show danh sách tiềm năng
                $tiemnanglist=get_dstn_new(100);
                include_once "view/tiemnanglist.php";
                break;

            case 'tiemnangupdate':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    $tn=get_tiemnangchitiet($id);

                }
                //trở về trang danh sách tin tức
                $tnlist=danhmuc_all1();
                include_once "view/tiemnangupdate.php";
                break;    

            case 'deltiemnang':
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $id=$_GET['id'];
                    $hinh=IMG_PATH_ADMIN.get_hinh1($id);
                    if(is_file($hinh)){
                        unlink($hinh);
                    }
                    try {
                        tiemnang_delete($id);
                    } catch (\Throwable $th) {
                        //throw $th;
                        echo "<h3 style='color: red; text-align:center'>Tiềm năng không được xóa!</h3>";
                    }
                }
                //trở về trang danh sách tin tức
                $tnlist=get_dstn_new(100);
                include_once "view/tiemnanglist.php";
                break;

            case 'tiemnangadd':
                $tnlist=danhmuc_all1();
                include_once "view/tiemnangadd.php";
                break;

            case 'addtiemnang':
                if(isset($_POST['addtiemnang'])){
                    //lấy dữ liệu về
                    $ten=$_POST['ten'];
                    $noidung=$_POST['noidung'];
                    $ngay=$_POST['ngay'];
                    $idtn=$_POST['idtn'];
                    $hinh=$_FILES['hinh']['name'];

                    //insert into
                    tiemnang_insert( $ten, $noidung, $hinh, $ngay, $idtn);
                    
                    //upload tiemnang
                    $target_file=IMG_PATH_ADMIN.$hinh;
                    move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);

                    //trở về trang danh sách tiemnang
                    $tnlist=get_dssp_new(100);
                    include_once "view/tiemnanglist.php";
                }else{
                    $tnlist=get_dstn_new(10);
                include_once "view/tiemnangadd.php";
                }
                break;            
                
                case 'thongke':
                    include_once "view/thongkebd.php";
                    break;

                default:
                include_once "view/home.php";
                break;
    }
    }else {
        include_once "view/home.php";
    }
}else {
    header('location: view/login.php');
}
    include_once "view/footer.php";


?>