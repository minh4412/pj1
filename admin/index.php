<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang quản lý</title>
    <style>
      .web{
        width: 100%;
        height: auto;
      }
      #web-left{
        width: 30%;
        height: 100%;
      }
      #web-right{
        width: 70%;
        height: auto;
        float: right;
      }
    </style>
</head>

<body>
</body>
  <div class="web">
      <div id="web-left">
        <?php
            include("side-bar.php");
        ?>
      </div>
      <div id="web-right">  
        <?php    
            if (isset($_GET["cat"])) {
            $cat = $_GET["cat"];
            switch ($cat) {
              case 1:
                include("admin/index.php");
                break;
              case 2:
               include("admin/quanlyadmin/them-admin.php");
                break;
              case 3:
                include("nha-cung-cap/ds-ncc.php");
               break;
              case 4:
                include("nha-cung-cap/them-ncc.php");
                break;
              case 5:
                include("san-pham/danh-sach-sp.php");
                break;
              case 6:
                include("san-pham/them-san-pham.php");
                break;
              case 7:
                include("hoa-don/index.php");
                break;
              case 8:
                include("quan-ly-user/danh-sach-user.php"); 
                break;
              case 9:
                include("admin/quanlyadmin/sua-admin.php"); 
                break;
              case 10:
                include("san-pham/sua-san-pham.php"); 
                break; 
              case 11:
                include("quan-ly-user/sua-user.php"); 
                break;
              case 12:
                include("hoa-don/donhangchitiet.php"); 
                break;   
            }
        }
        ?>
      </div>
    </div>    
</html>