 <?php
session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title></title>
 	<link rel="stylesheet" href="">
 	<style>
 		* {
 			margin:  0;
 			padding: 0;
 		}
 		.header{
 			width: 100%;
 			height: 150px;
 			background-color: #FFD700;
 		}
 		.header ul{
 			list-style: none;
 		}
 		.menucontent{
 			height: 120px;
 			width: 100%;
 		}
 		.left{
 			width: 18%;
 			height: 120px;
 			float: left;
 		}

 		#logo{
 			float: left;
 		}
 		.right{
 			width: 82%;
 			height: 120px;
 			float: right;
 		}
 		.top1{
			width:100%;
			height:30px;
			background: #DFDADA;
		}
		#lefttop1{
			width: 70%;
			height: 100%;
			float: left;
		}
		#righttop1{
			width: 30%;
			height: 100%;
			float: left;
		}
		#righttop1 ul li{
			display:block;
			text-align: center;
			float: left;
			margin-left: 100px;
		}
		#righttop1 ul li a:hover{
			background:  yellow;
			transition: 0.4s;
		}
		.top2{
			width: 100%;
			height: 70px;
			margin-top: 0px;
		}
		.top2 ul li{
			display:block;
			float: right;
		}
		.top2 ul li a{
			text-decoration: none;
			font-size: 15px;
			font-weight: bold;
			color: black;
			display: block;
			line-height: 70px;
			padding: 0px 20px 0px 20px;
		}
		.top2 ul li a:hover{
			background:  yellow;
			transition: 0.4s;
		}
		.bot{
			width: 100%;
			height: 50px;
		}
		#search{
			height: 35px;
			width: 550px;
			background-color: white;
			float: right;
			border-radius: 5px;
			margin-right: 30px;
		}
		#search input{
			width: 485px;
			height: 25px;
			border-radius: 5px;
			border: 0px;
			padding-left: 20px;
		}
		#search button{
			border: 0px;
		}
		#search button img{
			width: 20px;
			height: auto;
			padding-top: 5px;
		}
		#search input button img{
			vertical-align: middle;
		}
 	</style>
 </head>
 <body>
 	<?php
	$con = mysqli_connect("localhost", "root", "", "pj1");
	if(isset($_SESSION["email"]) ){
		$email = $_SESSION["email"];
		$search = "";
		if (isset($_GET["search"])) {
			$search = $_GET["search"];
		}
		$sql = "SELECT * FROM user WHERE email = '$email' ";
		$result = mysqli_query($con, $sql);
		if($result != null){
			$user = mysqli_fetch_assoc($result);			
		}
	}
	mysqli_close($con);
	?>
 	<div class="header">
 		<div class="top1">
 			<div id="lefttop1">
 				<ul>
 					<li>Của hàng điện thoại| email: 123456@gmail.com</li>
 				</ul>
 			</div>
 			<div id="righttop1">
 				<ul>
				<?php if(!isset($_SESSION["email"])){ ?>
					<li><a href="dang-nhap.php">Đăng nhập</a></li>
					<li><a href="dang-ki.php">Đăng kí</a></li>
				<?php } else { ?> 
					<li>
						<a href="tai-khoan-kh.php?id=<?php echo $user['id']?>"><?=$user['tenkh'] ?></a>
					</li>
					<li>
						<a href="dang-xuat.php">Đăng xuất </a>
					</li>
				<?php } ?>
				</ul>
			</div>	
 		</div>
 		<div class="menucontent">		
	 		<div class="left">
 				<a href="trangchu.php" id="logo">
 					<img src="../img/logo.PNG" height="120px">
 				</a>	
 			</div>
 			<div class="right">
 				<div class="top2">
 					<ul>
 						<li>
 							<a href="xem-gio-hang.php">Giỏ hàng</a>
 						</li>	
 					</ul>
 					<ul>
 						<li>
 							<a href="sac-du-phong.php">Sạc dự phòng</a>
 						</li>	
 					</ul> 
 					<ul>
 						<li>
 							<a href="sac.php">Sạc điện thoại</a>
 						</li>
 					</ul>
 					<ul>
 						<li>
 							<a href="tai-nghe.php">Tai Nghe</a>
	 					</li>
 					</ul>
 					<ul>
 						<li>
 							<a href="dien-thoai.php">Điện thoại</a>
 						</li>
 					</ul>
 					<ul>
 						<li>
 							<a href="trangchu.php">Trang Chủ</a>
 						</li>
 					</ul>				
 				</div>
 				<div class="bot">
 					<div id="search">
 						<form action="search.php" method="get">
							<input type="text" name="search" placeholder="Tìm kiếm">
							<button>
								<img src="../img/images.png">
							</button>
						</form>		
 					</div>
 				</div>	
 			</div>
 		</div>
 	</div>	
 </body>
 </html>