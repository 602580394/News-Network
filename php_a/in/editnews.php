<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改新闻</title>
	<style type="text/css">
	body{
		
		background-color:rgba(125,225,221,1.00); 
	}
	#all{
		margin: 0 auto;
		width: 1250px;
	    border-radius: 30px;
	    background-color: rgba(127,216,248,1.00);
	    padding-bottom: 50px;
		padding-top: 50px;
		
	}
	h2{
		text-align: center;
	}
	#quit{
	float: right;
	margin-right: 20px;
	text-decoration: none;
	color: #fff;
	background-color:green;
	padding: 6px;
	border-radius: 5px;
}
#quit:hover{
	background-color:rgba(40,88,7,1.00);
	
}
td {
	text-align: center;
}
table{
		margin: 0 auto;
	text-align: center;
	}
	form{
		display: inline;
		margin: 0 auto;
	}
	#one{
		
		margin-bottom: 20px;
		text-align: center;
	}
	#two{
		text-align: center;
	}
		#ot label{
			margin-left: 20px;
		}
	
</style>
	
	
</head>
<body>
<?php
	include 'conn.php';
$id = $_GET['id'];
	$sql="select * from news WHERE id='$id'";
	$res=$conn->query($sql);
	$row=mysqli_fetch_assoc($res)
    //$sql_arr = mysql_fetch_assoc($sql); 
	
	
?>
<div id="all">
	<h2>信息修改页面</h2>
    <form action="action-editnews.php" method="post" id="ot">
		<div id="one">
    <label>新闻ID: </label><input type="text" name="id" value="<?php echo $row['id']?>">
    <input style="display: none;" type="text" name="yuan_id" value="<?php echo $row['id']?>">
    <label>标题：</label><input type="text" name="title" value="<?php echo $row['title']?>">
    <label>关键字：</label><input type="text" name="keywords" value="<?php echo $row['keywords']?>"></div>
		<div id="two">
    <label>作者：</label><input type="text" name="autor" value="<?php echo $row['autor']?>">
    <label>发布时间：</label><input type="date" name="addtime" value="<?php echo $row['addtime']?>">
    <label>内容：</label><input type="text" name="content" value="<?php echo $row['content']?>">
    <input type="submit" value="提交">
			</div>
</form>
	<h2>未改前的信息显示</h2>
	<table width="960" border="1">
			<tr>
				<th>ID</th>
				<th>标题</th>
				<th>关键字</th>
				<th>作者</th>
				<th>发布时间</th>
				<th>内容</th>
			</tr>

			<?php
                              include 'conn.php';
                              $sql="select * from news WHERE id='$id'";
                              $res=$conn->query($sql);
                              while($row=mysqli_fetch_array($res))
                              {
                                  ?>
                                   <div>
                                       <p id="ming"><?php echo "<tr>";?></p>
									   <p id="ri"><?php echo "<td>{$row['id']}</td>";?></p>  
									   <p id="ri"><?php echo "<td>{$row['title']}</td>";?></p> 
									   <p id="ri"><?php echo "<td>{$row['keywords']}</td>";?></p> 
									   <p id="ri"><?php echo "<td>{$row['autor']}</td>";?></p> 								
									   <p id="ri"><?php echo "<td>{$row['addtime']}</td>";?></p>
									   <p id="ri"><?php echo "<td>{$row['content']}</td>";?></p>
                                        <p id="ri"><?php echo "</tr>";?></p>
                                   </div>

                                   <?php
                              }
?>
			
			
			
		</table>
		<a id="quit" href="index.php">返回首页</a>
</div>
</body>
</html>