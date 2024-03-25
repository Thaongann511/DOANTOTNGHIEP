<?php
    session_start();
    include "../../model/connect.php";
    include "../../model/user.php";
    if(isset($_POST["login"])){
        $username=$_POST["username"];
        $password=$_POST["password"];
        $user=checkuser($username, $password);
        if(isset($user)&&(is_array($user))&&(count($user)>0)){
            extract($user);
            if($role==1){
                $_SESSION['s_user']=$user;
                header('location: ../index.php');
            }else{
                $tb="Tài khoản này không có quyền đăng nhập trang quản trị";
            }
        }else{
            $tb="Tài khoản này không tồn tại. Hoặc đã nhầm!";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

.boxcenter{
    width: 500px;
    margin: 0 auto;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<div class="boxcenter" style="margin-top:50px">
<!-- <h2 style="text-align:center">ĐĂNG NHẬP ADMIN</h2> -->

<form action="login.php" method="post">
<h2 style="text-align:center">ĐĂNG NHẬP ADMIN</h2>

  <div class="imgcontainer">
    <img src="https://upload.wikimedia.org/wikipedia/vi/thumb/1/17/Logo_th%C3%A0nh_ph%E1%BB%91_%C4%90%C3%A0_L%E1%BA%A1t.svg/995px-Logo_th%C3%A0nh_ph%E1%BB%91_%C4%90%C3%A0_L%E1%BA%A1t.svg.png?20230530071258" alt="Avatar" class="avatar" height="100px" width="50px">
  </div>

  <div class="container">
    <label for="uname"><b>Tên đăng nhập</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Mật khẩu</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <?php
        if(isset($tb)&&($tb!="")){
            echo "<h3 style='color:red'>".$tb."</h3>";
        }
    ?>
    <button type="submit" name="login">ĐĂNG NHẬP</button>
    
</div>
</form>
</div>
</body>
</html>
