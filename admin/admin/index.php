
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="">
</head>

<body>
      
      <style>
      table, tr, td{
        border: 1px solid black;
      }
      #user-info{
        border: 1px solid #000;
        margin: auto;
        padding: 25px;
      }
      #user-info table {
        margin: 10 auto 0 auto;
        text-align: center;
      }
      #user-info h1{
        text-align: center;
      }
      </style>
      <div id="user-info">
      <h1>Danh sách admin</h1>
      <form action="" method="get">
              <input type="text" name="search" placeholder="Tìm kiếm">
              <input type="hidden" name="cat" value="1">
              <button>Tìm kiếm
      </button>

      </form>
      <?php
      $con = mysqli_connect("localhost", "root", "", "pj1");
      $search="";
      if(isset($_GET['search'])){
        $search=$_GET['search'];
      }
      $sql = "SELECT * FROM `admin` WHERE name LIKE '%$search%'";
      // echo $sql;
      $result = mysqli_query($con, $sql);
      ?>
      <table id="user-listing" border="1">
        <tr>
          <th>Mã</th>
          <th>Họ tên</th>
          <th>Email</th>
          <th>Sđt</th>
          <th>Quyền</th>
        </tr>
        <?php
        while ($admin = mysqli_fetch_array($result)) {
        ?>
          <tr>
            <td><?php echo $admin["id"]; ?></td> 
            <td><?php echo $admin["name"]; ?></td>
            <td><?php echo $admin["email"]; ?></td>
            <td><?php echo $admin["phone"]; ?></td>
            <td><?php echo $admin["role"]; ?></td>
            <td><a href="index.php?cat=9&id=<?php echo $admin["id"] ?>">Sửa</a></td>
            <?php
                if($admin["role"] == 0){
              ?>
            <td><a href="admin/quanlyadmin/xoa-admin.php?id=<?php echo $admin["id"] ?>" onclick="return confirm('Bạn có chắc muốn xóa người ngày khỏi danh sách không?')">Xóa</a></td>
          <?php }  ?>
          </tr>
        <?php
        }
        ?><br>

      </table>
    </div>
</body>
<?php
  mysqli_close($con);
?>
</html>