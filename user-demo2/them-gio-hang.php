<?php     
      if (isset($_SESSION["email"])) {
        if(isset($_GET['maSanPham'])){
          $ma_sp = $_GET['maSanPham'];
        if (isset($_SESSION["gio_hang"][$ma_sp])) {
          $_SESSION["gio_hang"][$ma_sp]++;
        } else {
          $_SESSION["gio_hang"][$ma_sp] = 1;
        }
      }} else {
        header("Location: dang-nhap.php");
      }
?>      