<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
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
	<div id="themsp" class="themsanpham">
   		<h1>Thêm admin</h1>
	<form action="admin/quanlyadmin/them-admin-process.php" method="get">
    <table border="0">
      <tr>
        <td class="cot">Tên:  </td>
        <td><input type="text" name="hoten" required></td>
      </tr>
      <tr>
        <td class="cot">Username:  </td>
        <td><input type="text" name="user" required></td>
      </tr>
      <tr>
        <td class="cot">Passworrd:  </td>
        <td><input type="text" name="pass" required></td>
      </tr>
      <tr>
        <td class="cot">Email:  </td>
        <td><input type="text" name="email" required></td>
      </tr>
      <tr>
        <td class="cot">Sđt:  </td>
        <td><input type="text" name="sdt" required></td>
      </tr>
      <tr>
        <td class="cot">Quyền:  </td>
        <td><input type="text" name="quyen" required></td>
      </tr>
      <tr>
        <td class="cot"></td>
        <td><button>Thêm</button></td>
      </tr>
  </table>
  </form>
</div>
</body>
</html>