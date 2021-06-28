<!DOCTYPE html>  
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <title>添加新闻</title>  
</head>
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
		
	}
	h2{
		text-align: center;
		padding-top: 50px;
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
	
</style>
<body>
	<div id="all">
		<h2>新闻添加页面</h2>
<form action="action-addnews.php" method="post">  
    <label>标题：</label><input type="text" name="title">  
    <label>关键字：</label><input type="text" name="keywords">  
    <label>作者：</label><input type="text" name="autor">  
    <label>发布时间：</label><input type="date" name="addtime">  
    <label>内容：</label><input type="text" name="content">  
    <input type="submit" value="提交" name="submit">  
</form> 
		
		
		
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
                                        <p id="ri"><?php echo "</tr>";?></p>
                                   </div>

                                   <?php
                              }
?>
			
			
			
		</table>
		
		
		
		<form action="" method="post" enctype="multipart/form-data">
		 <label>上传对应ID的新闻内容文件：</label>
        <input type="file" name="file"/>
        <input type="submit" name="submit">
        </form>
        <table>
            <?php
            if(isset($_POST['submit']))
               {
            ?>
            <tr>
                <td>文件名称：</td>
                <td><?php echo $_FILES['file']['name'];?></td>
            </tr>
             <tr>
                <td>文件类型：</td>
                <td><?php echo $_FILES['file']['type'];?></td>
            </tr>
           <tr>
                <td>文件大小：</td>
                <td><?php echo $_FILES['file']['size'];?></td>
            </tr>
             <tr>
                <td>上传代码：</td>
                <td><?php echo $_FILES['file']['error'];?></td>
            </tr>
            <?php
            $filename=$_FILES['file']['name'];
            $temp=$_FILES['file']['tmp_name'];
            $result=move_uploaded_file($temp,'../../php/in/php/download/'.$filename);
            ?>
            <td>
                <?php echo $result?"上传成功":"上传失败";?>
            </td>
            <?php
            }
            ?>
        </table>
		
		
		
		
	<a id="quit" href="index.php">返回首页</a>
		</div>
</body>  
</html>