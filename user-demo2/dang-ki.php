<!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí</title>
    <link rel="shortcut icon" href="../img/icon.png">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <style>
    body{
      background-image: url('../img/0379.jpg_wh860.jpg');
      background-size: 100%;
      background-repeat: no-repeat;
      font-family: sans-serif;
    }
    .dangki{
      width: 400px;
      height: 600px;
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
    </style>
  </style>
  </head>
  <body>
    <div class="dangki">
    <h2>ĐĂNG KÍ</h2>
    <form action="dang-ki-pro.php" method="post">
      <table border="1px" width="500px" height="400px" style="margin:auto">        
        <input type="text" placeholder="Họ và tên" name="ten_kh" required>        
        <input type="email"placeholder="Địa chỉ Email" name="email_kh" required >
        <input type="text"placeholder="Số điện thoại di động" name="sdt" required>
        <input type="text"placeholder="Username" name="username" required>
        <input type="text"placeholder="Password" name="pass" required>
        <button>ĐĂNG KÍ</button>
      </table>
    </form>
    </div>
    <div id="bottom">
      <?php 
        include "footer.php";
       ?>
    </div>
  </body>

  </html>