<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>新闻后台管理系统</title>
	<link rel="stylesheet" href="css/index.css" type="text/css">
</head>
<body>
	<div id="all">
	<div class="wrapper">
		<h2>新闻后台管理</h2>
		<div class="add">
			<a href="addnews.php">增加新闻</a>
		</div>
		<div class="add">
			<a href="cx.php">查询新闻</a>
		</div>
		<table width="960" border="1">
			<tr>
				<th>ID</th>
				<th>标题</th>
				<th>关键字</th>
				<th>作者</th>
				<th>发布时间</th>
				<th>内容</th>
				<th>操作</th>
			</tr>

			<?php
                              include 'conn.php';
                              $sql="select * from news order by id asc";
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
									   <p id="ri"><?php 					echo "<td>
							<a href='javascript:del({$row['id']})'>删除</a>
							<a href='editnews.php?id={$row['id']}'>修改</a>
						  </td>";?></p>
                                        <p id="ri"><?php echo "</tr>";?></p>
                                   </div>

                                   <?php
                              }
?>
			
			
			
		</table>
	</div>
	<a id="quit" href="../php/index_b.php">返回登录界面</a>
	</div>
	<script type="text/javascript">
		function del (id) {
			if (confirm("确定删除这条新闻吗？")){
				window.location = "action_del.php?id="+id;
			}
		}
	</script>
		
</body>
</html>
