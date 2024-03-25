<?php
 if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
    extract($_SESSION['s_user']);
    $userinfo=get_user($id);
    $_SESSION['s_user']=$userinfo;
    extract($userinfo);
}
?>

<body>
    <div class="container">

    <h2 style="display: flex; justify-content: center;"><strong>THÔNG TIN ĐĂNG KÝ ĐÃ ĐƯỢC CẬP NHẬT</strong></h2>
<hr>
    <h5>
    <strong>Fullname:</strong> <?=$fullname?><br><br>

    <strong>Username:</strong> <?=$username?><br><br>

    <strong>Email:</strong> <?=$email?><br><br>

    <strong>Phone:</strong> <?=$phone?><br><br>

    <strong>Address:</strong> <?=$address?></h5>
    <hr>




