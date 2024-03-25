<?php
 if(isset($_SESSION['s_user'])&&(count($_SESSION['s_user'])>0)){
    extract($_SESSION['s_user']);
}
?>


<body>
<div class="container">
<form method="post" action="index.php?act=updateuser" class="form">

<h2 style="display: flex; justify-content: center;"><strong>THÔNG TIN CỦA TÔI</strong></h2>

<p style= "font-size:16px">
<strong>Fullname <input type="text" name="fullname" value="<?=$fullname?>" placeholder="Nhập tên đầy đủ..."/></strong><br>

<strong>Username <input type="text" name="username" value="<?=$username?>" placeholder="Nhập tên đăng ký..."></strong> <br>

<strong>Password <input type="password" name="password" value="<?=$password?>" placeholder="Nhập mật khẩu..."/></strong><br>

<strong>Email <input type="text" name="email" value="<?=$email?>" placeholder="Nhập email..."/></strong><br>

<strong>Phone <input type="text" name="phone" value="<?=$phone?>" placeholder="Nhập số điện thoại..."/></strong><br>

<strong>Address <input type="text" name="address" value="<?=$address?>" placeholder="Nhập địa chỉ..."/></strong><br>

<div class="row">
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="submit" name="capnhat" p style= "font-size:20px" value="Cập nhật"/>
</div>
</form>