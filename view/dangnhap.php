<?php

?>

<link href="layout/css/style.css" rel="stylesheet">

<body>
<div class="container">
    <h2 style="color:red"> 
    <?php
        if(isset($_SESSION['tb_dangnhap'])&&($_SESSION['tb_dangnhap']!="")) {
         
            echo $_SESSION['tb_dangnhap'];
         
            unset($_SESSION['tb_dangnhap']);
        }

    ?>
    </h2>
<form method="post" action="index.php?act=login" class="form">

<h2 style="display: flex; justify-content: center;"><strong>ĐĂNG NHẬP</strong></h2>

<p style= "font-size:20px"><strong>Username <input type="text" name="username" value="" placeholder="Nhập tên đăng nhập..."></strong> <br>

<strong>Password <input type="password" name="password" value="" placeholder="Nhập mật khẩu..."/></strong><br>

<input type="submit" name="dangnhap" p style= "font-size:20px" value="Đăng Nhập" />

</form>

<p style= "font-size:20px"><b><a href = "index.php?act=dangky">Bạn chưa có tài khoản? Đăng ký!</a></b></p>
<br><br>