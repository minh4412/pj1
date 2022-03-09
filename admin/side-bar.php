<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/sidebar.css">
  <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins');

*{
  margin: 0;
  padding: 0;
  text-decoration: none;
  user-select:none;
  font-family: 'Poppins' , sans-serif;
}

.content .left{
  width: 350px;
  height: 100%;
  display: flex ;
}
.sidebar{
  position: fixed;
  width: 330px;
  height: 100%;
  left: 0;
  background: #1b1b1b;
}

.sidebar .text{
  color: white;
  font-size: 25px;
  font-weight: 600;
  line-height: 65px;
  text-align: center;
  background: #1e1e1e;
  letter-spacing: 1px;
  user-select: none;
  color: white;
}

nav ul {
  background-color: #1b1b1b;
  list-style: none;
  height:100%;
  width:100%;
}

nav ul li{
  line-height:60px;
  border-bottom : 1px solid rgba(255,255,255,0.1);
}

nav ul li a{
  color:white;
  position: relative;
  text-decoration:none;
  font-size:18px;
  padding-left:40px;
  font-weight:500;
  display:block;
  width:100%;
  border-left:5px solid transparent;
}
nav ul li a:hover{
  color:cyan;
  background-color:#1b1b1b;
  border-left-color:cyan;
}
nav ul ul{
  position: static;
  display:none;
}
nav ul .showsub1.show1{
  display: block;
}
nav ul .showsub2.show2{
  display: block;
}
nav ul .showsub3.show3{
  display: block;
}
nav ul ul li{
  line-height:42px;
  border-bottom:none;
}

nav ul ul li a{
  font-size:17px;
  color:white;
  padding-left:80px;
}
nav ul li a span{
  position: absolute;
  top:50%;
  right:20px;
  transform: translateY(-50%);
  font-size:22px;
  transition:0.4s;
}
nav ul li a span.rotate{
  transform: translateY(-50%) rotate(-180deg);
} 
  </style>
</head>

<body>
  <nav class="sidebar">
    <div class="text">Trang quản lý</div>
      <ul>
        <?php 
          if(isset($_SESSION["role"])){
            $role = $_SESSION["role"];
            if($role == 1){
              ?>
               <li><a class="sub1"><span class="fas fa-caret-down first"></span>Quản lý Admin</a>
                <ul  class="showsub1"> 
                  <li><a href="?cat=1">Danh sách Admin</a></li>
                  <li><a href="?cat=2">Thêm Admin</a></li>
                </ul>
              </li>
              <?php
            }
          }
        ?>
        <li><a class="sub3"><span class="fas fa-caret-down third"></span>Quản lý nhà cung cấp</a>
          <ul  class="showsub3">
            <li><a href="?cat=3">Danh sách nhà cung cấp</a></li>
            <li><a href="?cat=4">Thêm nhà cung cấp</a></li>
          </ul>
        </li>
        <li><a class="sub2"><span class="fas fa-caret-down second"></span>Quản lý sản phẩm</a>
          <ul class="showsub2">
            <li><a href="?cat=5">Danh sách sản phẩm</a></li>
            <li><a href="?cat=6">Thêm sản phẩm</a></li>
          </ul>
        </li>
        <li><a href="?cat=7" class="sub4"></span>Danh sách hóa đơn</a>
        </li>
        <li><a href="?cat=8" class="sub4"></span>Quản lý User</a>
        </li>
        <li><a href="dang-xuat.php" class="sub4"></span>Đăng xuất</a></li>
      </ul>
    </nav>
    <script>
        $('.sub1').click(function(){
            $('nav ul .showsub1').toggleClass("show1");
            $('nav ul .first').toggleClass("rotate");
        });
        $('.sub2').click(function(){
            $('nav ul .showsub2').toggleClass("show2");
            $('nav ul .second').toggleClass("rotate");
        });
      $('.sub3').click(function(){
        $('nav ul .showsub3').toggleClass("show3");
        $('nav ul .third').toggleClass("rotate");
      });
    </script>   
</body>

</html>