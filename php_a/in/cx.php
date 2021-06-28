<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
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
	form{
		text-align: center;
		margin: 20px;
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
	}
	form{
		display: inline;
	}
	#one{
		
		margin-bottom: 20px;
		text-align: center;
	}
	#two{
		text-align: center;
	}
	h3{
		
		margin-left: 80px;
		margin-bottom: 5px;
	}
	
</style>
</head>
<body>
	<div id="all">
		<h2>新闻查询修改页面</h2>
		
		<h3>查询方法：</h3>
<form action="cx.php" method="post">
	<div id="one">
        <label>新闻ID查询: </label><input type="text" name="id" value="">		
        <label>标题查询：</label><input type="text" name="title">		
        <label>关键字查询：</label><input type="text" name="keywords"> 
		<input type="submit" value="提交" >
	</div>
	<div id="two">
        <label>作者查询：</label><input type="text" name="autor">  	
        <label>发布时间查询：</label><input type="date" name="addtime">  
         <label>内容查询：</label><input type="text" name="content">
		<input type="submit" value="提交" >
	</div>
		</form>
		
	<h2>查询结果</h2>
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
                              $id = $_POST['id'];
	                          $title = $_POST['title'];
                              $keywords = $_POST['keywords'];
                              $autor = $_POST['autor'];
                              $addtime = $_POST['addtime'];
                              $content = $_POST['content'];
	                          $conn=mysqli_connect("localhost","root","12345678","qikan");
	                          if($id!=""){
                        
                              $sql="select * from news WHERE id='$id'";
                        
                              }
	                          else if($title!=""){
							  $sql="select * from news WHERE title='$title'";
                              }
			                  else if($keywords!=""){
                        
                             $sql="select * from news WHERE keywords='$keywords'";
                        
                              }
			                  else if($autor!=""){
                        
                             $sql="select * from news WHERE autor='$autor'";
                        
                             }
			                 else if($addtime!=""){
                        
                             $sql="select * from news WHERE addtime='$addtime'";
                        
                             }
			                 else if($content!=""){
                        
                             $sql="select * from news WHERE content='$content'";
                        
                             }
	
	
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
	
	<a id="quit" href="index.php">返回首页</a>
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