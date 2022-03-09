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
  </style>
</head>
<body>
	<div id="themsp" class="themsanpham">
    <h1>Thêm Nhà Cung Cấp</h1>
	<form action="nha-cung-cap/them-ncc-process.php" method="get">
		Tên Nhà Cung Cấp :<input type="text" name="name-ncc"> <button>Thêm</button>
  </form>
</div>
</body>
</html>