<?php

    session_start();
    ob_start();

    include_once "model/connect.php";
    include_once "model/user.php";
    include_once "model/trangchu.php";
    include_once "model/thongtin.php";
    include_once "model/tintuc.php";
    include_once "model/global.php";
    include_once "view/header.php";
 
    // TRANG DÀNH CHO TRANG CHỦ
    $trangchu=get_trangchu_new(2);
    $sukien = get_sukien_new();
    
    

    if(isset($_GET['act'])) {
        $act= $_GET['act'];
    switch ($act) {
        case 'dangky': 
            include_once "view/dangky.php";
            break;

        case 'adduser':
            //xác định gia trị input
            if (isset($_POST['dangky'])&&($_POST['dangky'])) {
                $username=$_POST["username"];
                $password=$_POST["password"];
                $email=$_POST["email"];
            //xử lý
            user_insert($username, $password, $email);
            }
            //
            include_once "view/dangnhap.php";
            break;

        case 'login':
            // input
            if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {
                $username=$_POST["username"];
                $password=$_POST["password"];

            // xử lý
            $kq=checkuser($username,$password);
            if(is_array($kq)&&(count($kq))){
                extract($kq);
                if($role==1) {
                    $_SESSION['s_user']=$kq;
                    header('location:admin/index.php');
                } elseif ($role==0){
                    $_SESSION['s_user']=$kq;
                    header('location:index.php');
                } elseif($_SESSION['trang']=="tintucchitiet"){ //click login tu cmt
                    header('location: index.php?act=tintucchitiet&idpro='.$_SESSION['idpro'].'#binhluan');
                } else { //mac dinh
                    header('location: index.php');
                }
            }else{
                $tb="Tài khoản không tồn tại hoặc thông tin đăng nhập sai!";
                $_SESSION['tb_dangnhap']=$tb;
                header('location:index.php?act=dangnhap');
            }
            //output
        }
            break;

        case 'dangnhap':
            include_once "view/dangnhap.php";
            break;  
            
        case 'logout':
            if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
                unset($_SESSION['s_user']);
            }
            header('location:index.php');
            break;

        case 'myaccount':
            if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
                include_once "view/myaccount.php";
            }
            break;

        case 'updateuser':
            //xác định gia trị input
            if (isset($_POST['capnhat'])&&($_POST['capnhat'])) {
                $username=$_POST["username"];
                $password=$_POST["password"];
                $email=$_POST["email"];
                $fullname=$_POST["fullname"];
                $address=$_POST["address"];
                $phone=$_POST["phone"];
                $id=$_POST["id"];
                $role=0;

            //xử lý
            user_update($username, $password, $email, $fullname, $address, $phone, $role, $id);
            include_once "view/myaccount_confirm.php";
            }
            //
            break;
    
        case 'gioithieu':
            $gthieu = get_gioithieu_new(3);
            include_once "view/thongtin/gioithieu.php";
            break;
        case 'bando':
            include_once "view/bando.php";
            break;
        case 'lichsu':
            $lichsu = get_lichsu_new();
            include_once "view/thongtin/lichsu.php";
            break;

        case 'dktn':
            $dktn = get_dktn_new();
            include_once "view/thongtin/dktn.php";
            break;

        case 'tntn':
            $tntn = get_tntn_new();
            include_once "view/thongtin/tntn.php";
            break;       

        case 'thongke':
            if (!empty($_GET['file'])) {
                $filename = basename($_GET['file']);
                $filepath = DOWNLOAD_PATH . $filename;
                if (!empty($filename) && file_exists($filepath)) {
                    header('Content-Description: File Transfer');
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename="' . $filename . '"');
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate');
                    header('Pragma: public');
                    header('Content-Length: ' . filesize($filepath));

                    // Output the file
                    readfile($filepath);
                    exit;
                } else {
                    echo "File not found.";
                }
            }
            include_once "view/thongke.php";
            break;

        case 'cacbando':
            include_once "view/cacbando.php";
            break;

        case 'lienhe':
            include_once "view/lienhe.php";
            break;      

        case 'tintuc':
            $dstt=danhmuc_all();

            if(!isset($_GET['idtt'])) {
                $idtt=0;
            }else{
                $idtt=$_GET['idtt'];
            }
            //kiểm tra có phải là form search không?
            if(isset($_POST["timkiem"])&&($_POST["timkiem"])){
                $kyw=$_POST["kyw"];
                $titlepage="Kết quả tìm kiếm".$kyw;
            }else{
                $kyw="";
                $titlepage="";
            }

            $dssp=get_dssp( $kyw, $idtt, 12);
            include_once "view/tintuc.php";
            break;

        case 'tintucchitiet':
            if(isset($_GET['idpro'])) {
                $id=$_GET['idpro'];
                $tintucchitiet=get_tintuc_by_id($id);
                $dstt=danhmuc_all();
                $idtt=$tintucchitiet['idtt'];
                $tintuclquan=get_tintuc_lienquan($idtt, $id, 4);
                include_once "view/tintucchitiet.php";
            } else{
                include_once "view/home.php";
            }
            break;        

            case 'duonghamdatset':
                include_once "view/duonghamdatset.php";
                break;

            case 'hientrangrung':
                include_once "view/hientrangrung.php";
                break; 
            
            case 'thongkebd':
                include_once "view/thongkebd.php";
                break;
                
            //trang web co bao nhieu trang se co bay nhieu case    
        default:
            include_once "view/home.php";
            break;
    }
 } 
else {
    include_once "view/home.php";
}
    include_once "view/footer.php";
?>