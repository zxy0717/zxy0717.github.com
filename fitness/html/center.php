<?php
// error_reporting(0);
session_start();
header("content-type:text/html;charset=utf-8");//设置编码格式
$mysqli=new mysqli('localhost','root','','user');
// include_once("login.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>个人中心</title>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link href="" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../css/center.css">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
		<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
	</head>
	<body>
		
		<div class="container">
			<div class="name">
				<div class="col-xs-3" id="user">昵称：</div>
				<div class="col-xs-6">KUN</div>
				<div class="col-xs-3">
					<input class="btn" type="button" value="修改资料" style="border: 1px solid orange">
				</div>
			</div>
			<div class="information" id="information_data">
				<div class="col-xs-3" id="weight">
					<?php
					$username=$_SESSION['name'];
					$sql="select age from information where name = '".$username."'";
					$result=mysqli_query($mysqli,$sql);
					$userage=array();
					while ($row=mysqli_fetch_array($result,MYSQLI_NUM)) {
						array_push($userage,array("age"=>$row['age']));
					}
					echo $username;
					?>
				</div>
				<div class="col-xs-3" id="height"></div>
				<div class="col-xs-3" id="age"></div>
				<div class="col-xs-3" id="sex"></div>
			</div>
			<div class="information" id="information_text">
				<div class="col-xs-3">体重</div>
				<div class="col-xs-3">身高</div>
				<div class="col-xs-3">年龄</div>
				<div class="col-xs-3">性别</div>
			</div>
			<div class="advice">
				<div class="col-xs-12">
					<button class="smile"><i class="fa fa-smile"></i></button>
				</div>
			</div>
			<div class="text">
				<div class="col-xs-12">
					<button class="advices">建议吐槽</button>
				</div>
			</div>
			<div class="bottom">
				<div id="bottom_icon">
					<div class="col-xs-3">
						<button class="icon"><i class="fa fa-home"></i></button>
					</div>
					<div class="col-xs-3">
						<button class="icon"><i class="fa fa-suitcase" onclick="window.location.href='analyse.php'"></i></button>
					</div>
					<div class="col-xs-3">
						<button class="icon"><i class="fa fa-wrench"></i></button>
					</div>
					<div class="col-xs-3">
						<button class="icon" style="color: orange"><i class="fa fa-user"></i></button>
					</div>
				</div>
				<div id="bottom_text">
					<div class="col-xs-3">
						<button class="icon">首页</button>
					</div>
					<div class="col-xs-3">
						<button class="icon" onclick="window.location.href='analyse.php'">健康分析</button>
					</div>
					<div class="col-xs-3">
						<button class="icon">健康管理</button>
					</div>
					<div class="col-xs-3">
						<button class="icon" style="color: orange">个人中心</button>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="../js/center.js"></script>
</html>