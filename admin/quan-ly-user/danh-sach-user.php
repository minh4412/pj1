<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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
        margin-top: 20px;
      }
      #user-info h1{
        text-align: center;
      }
      </style>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost", "root", "", "pj1");
    $search="";
    if(isset($_GET['search'])){
      $search = $_GET['search'];
    }
    $sql = "SELECT * FROM `user` WHERE tenkh LIKE '%$search%'";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
    ?>
    <div id="user-info">
      <h1>Danh sách khách hàng</h1>
      <form action="" method="get">
              <input type="text" name="search" placeholder="Tìm kiếm">
              <input type="hidden" name="cat" value="8">
              <button>Tìm kiếm
      </button>


      </form>
      <table id="user-listing" border="1">
        <tr>
          <th>Id</th>
          <th>Username</th>
          <th>Email</th>
          <th>Tên Khách Hàng</th>
          <th>Phone</th>
        </tr>
        <?php
        while ($user = mysqli_fetch_array($result)) {
        ?>
        <tr>
          <td><?php echo $user["id"] ?></td> 
          <td><?php echo $user["username"] ?></td>
          <td><?php echo $user["email"] ?></td>
          <td><?php echo $user["tenkh"] ?></td>
          <td><?php echo $user["phone"] ?></td>
          <td><a href="index.php?cat=11&id=<?php echo $user["id"] ?>">Sửa</a></td>
          <td><a href="quan-ly-user/xoa-user.php?id=<?php echo $user["id"] ?>" onclick="return confirm('Bạn có chắc muốn xóa người dùng này khỏi danh sách không?')">Xóa</a></td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>
</body>

</html>