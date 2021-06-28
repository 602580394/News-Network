<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>注册</title>
	<link rel="stylesheet" href="../../css/register.css" type="text/css">
	<style type="text/css">
		#one{
			
			width:200px;
			height: 80px;
			border-radius: 30px;
					margin-top:200px;
		}
		#one #a{
			margin-top: 20px;
		}
		</style>
</head>
<body>
<div id="head">
<img src="../../img/logo.png" width="150px">
</div >
	
<h3>新闻网管理员注册</h3>
    <div id="one">
		<div id="a">
<?php
    header ( "Content-type:text/html;charset=utf-8" );
    $conn = mysqli_connect('localhost','root','12345678','qikan') or die('数据库连接失败');
    $conn->set_charset('utf8');

    $user = $_POST['user'];
    $pass = $_POST['pass'];
 	
    $sql = "INSERT INTO yonhu_b VALUES ('','$user' ,'$pass')";
    mysqli_query($conn,$sql) or die(mysqli_error($conn));
    echo("注册成功！！！<br/><a href='index_b.php'>点击登录</a>")  		
?>
			</div>
    </div>
</body>
</html>