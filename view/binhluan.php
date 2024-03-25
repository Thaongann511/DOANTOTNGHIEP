<?php
    session_start();
    include_once "../model/connect.php";
    include_once "../model/binhluan.php";
  
    if(isset($_GET['idpro'])){
        // echo $_GET['idpro'];
        $idpro=$_GET['idpro'];
    }
    if(isset($_POST['guibinhluan'])){
        $idpro=$_POST['idpro'];
        $noidung=$_POST['noidung'];
        $ngaybl=date('H:i:s Y/m/d');
        $iduser=$_SESSION['s_user']['id'];
        $username=$_SESSION['s_user']['username'];
        binhluan_insert ($iduser, $idpro, $username, $noidung, $ngaybl);
    }

    $dsbl=binhluan_select_all();
    $html_bl="";
    foreach ($dsbl as $bl) {
        extract($bl);
        $html_bl.=' 
        <h3><b>'.$username.'</b></h3>
        <span style="font-size: 18px">'.$noidung.' - ('.$ngaybl.')
    </span>';
    }
?>

<h1>Bình luận</h1>
<?php
    if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){ 
?>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
        <input type="hidden" name="idpro" value="idpro">
        <textarea name="noidung" id="" cols="100px" rows="5"></textarea><br><br>
        <button type="submit" name="guibinhluan">Gửi bình luận</button>
    </form>

<?php
    }
    else{
        $_SESSION['trang']="tintucchitiet";
        $_SESSION['idpro']= $_GET['idpro'];
        echo "<h2><a href='../index.php?act=dangnhap' target='_parent'> Bạn phải đăng nhập mới có thể bình luận!</a></h2><br>";
        }
?>

<div class="dsbl">
    <?=$html_bl;?>
</div>
