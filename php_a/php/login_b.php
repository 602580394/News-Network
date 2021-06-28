<meta charset="utf-8">
<?php
    $conn = mysqli_connect('localhost','root','12345678','qikan') or die('数据库连接失败');
    $conn->query("SET NAMES 'UTF8'");
 
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $sql="SELECT * FROM yonhu_b where user='$user' and pass='$pass'"; 
 
    $result=$conn->query($sql);
    $row = mysqli_num_rows($result);
	//若表中存在输入的用户名和密码，row=1；若表中用户名不存在或密码错误，则row=0
 
    if($row==1){
        echo $row['user']."登陆成功!";
		echo"<script>document.location='../in/index.php';</script>";
    }
    else{
        echo"登录失败，请重新登录！";
    }	
?>	