<?php
session_start();
if (isset($_SESSION["email"])) {
  header("Location: index.php");
} else {
  if (isset($_COOKIE["email"])) {
    $email = $_COOKIE["email"];
    $pass = $_COOKIE["passkh"];
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập</title>
  <link rel="shortcut icon" href="../img/icon.png">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <style type="text/css">
body{
  background-image: url('../img/0379.jpg_wh860.jpg');
  background-size: 100%;
  background-repeat: no-repeat;
  font-family: sans-serif;
}
.dangnhap{
  width: 400px;
  height: 470px;
  border: 1px solid grey;
  border-radius: 20px ;
  text-align: center;
  background-color: white;
  margin: 0 auto;
  margin-top: 100px; 
  margin-bottom: 100px;
}
h2{
  color: #868787;
  display: inline-block;
}
input{
  width: 300px;
  height: 50px;
  margin-bottom: 30px;
  border-radius: 10px ;
  padding-left: 30px;
}
button{
  width: 300px;
  height: 40px;
  margin-bottom: 30px;
  border: none;
  border-radius: 10px ;
  background-color: #202020;
  color: white;
}
.check input{
  width: 20px;
  height: 20px;
}
.check{
  float: left;
  padding-left: 50px;
}
.thongbao{
  float: left;
  padding-left: 50px;
  margin-bottom: 30px;  
}
.dangnhap a{
  text-decoration:none;
  color: white;
}
    </style>
  </head>

  <body>
    <div class="dangnhap">
    <h2>Trang Đăng Nhập</h2>
    <form action="dang-nhap-pro.php" method="post">
      <input type="text" placeholder="Email" name="email" value="<?php if (isset($_COOKIE["email"])) {
                                                        echo $email;
                                                      } ?>"> <br>
      <input type="password" placeholder="Password" name="passkh" value="<?php if (isset($_COOKIE["passkh"])) {
                                                        echo $passkh;
                                                      } ?>"> <br>
      <div class="check">
        <input type="checkbox" name="remember" <?php
                                                if (isset($_COOKIE["email"])) {
                                                  echo "checked";
                                                }
                                                ?>> Ghi nhớ mật khẩu <br>
      </div><br>     
      <div class="thongbao">                                  
        <?php
        if (isset($_GET["err"])) {
          echo "Sai tài khoản hoặc mật khẩu";
        }
        ?>
      </div>
      <br><button>Đăng nhập</button>
    </form>
    <button><a href="dang-ki.php">Đăng kí</a></button>
  </div>
      <div id="bottom">
        <?php 
        include "footer.php";
        ?>
      </div>
    </div>
  </body>

  </html>