<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../assets/css/sidebar.css">
  <style>
    .themsanpham{
      margin: 0 auto;
      width: 800px;
      border: 1px solid #000;
      padding: 20px;
    }
    #themsp form{
      width: 350px;
      margin: auto;
      padding-top: 20px;
      padding-bottom: 20px;
    }
    #themsp form input{
      margin: 5 px 0;
    }
    h1{
      text-align: center;
    }
    .cot{
      width: 100px;
    }
  </style>
</head>

<body>
  <?php
  $id = $_GET["id"];
  $con = mysqli_connect("localhost", "root", "", "pj1");
  $sql = "SELECT * FROM `user` WHERE id=$id";
  $result = mysqli_query($con, $sql);
  $user1 = mysqli_fetch_array($result);
  mysqli_close($con);
  ?>
  <div id="themsp" class="themsanpham">
    <h1>Sửa Thông Tin Khách Hàng</h1>
  <form action="quan-ly-user/sua-user-process.php" method="get">
    <input type="hidden" name="ma-user" value="<?php echo $id; ?>">
    <table border="0">
      <tr>
        <td class="cot">Username:</td>
        <td><input type="text" name="user-user" value='<?php echo $user1["username"]; ?>' required></td>
      </tr>
      <tr>
        <td class="cot">Email: </td>
        <td><input type="text" name="email-user" value='<?php echo $user1["email"]; ?>' required></td>
      </tr>
      <tr>
        <td class="cot">Phone:</td>
        <td><input type="text" name="sdt-user" value='<?php echo $user1["phone"]; ?> 'required></td>
      </tr>
      <tr>
        <td class="cot"></td>
        <td><button>Sửa</button></td>
      </tr>
    
  </table>
  </form>
</div>
</body>

</html>
