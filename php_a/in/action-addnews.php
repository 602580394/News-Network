<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'conn.php';
         if(isset($_POST['submit'])){
                 $title = $_POST['title'];
                 $keywords = $_POST['keywords'];
                 $autor = $_POST['autor'];
                  $addtime = $_POST['addtime'];
                 $content = $_POST['content'];
			     if($title==""){
                        
                    echo "<script>alert('请输入标题');history.go(-1);</script>";
                        
                    }
			        else if($keywords==""){
                        
                    echo "<script>alert('请输入关键字');history.go(-1);</script>";
                        
                    }
			        else if( $autor==""){
                        
                    echo "<script>alert('请输入作者');history.go(-1);</script>";
                        
                    }
			        else if($addtime==""){
                        
                    echo "<script>alert('请输入发布时间');history.go(-1);</script>";
                        
                    }
			        else if($content==""){
                        
                    echo "<script>alert('请输入内容');history.go(-1);</script>";
                        
                    }
			        else{

                        $SQL="INSERT INTO news values ('','$title','$keywords','$autor','$addtime','$content')";
                        $result=$conn->query($SQL);
                       if($result)
                       {
                           echo"<script>alert('CG');document.location='addnews.php';</script>";
                         }
                        else{
                            
                            echo"<script>alert('SB');history.go(-1);</script>";
                        }
                       }
		 }
                    

        ?>
    </body>
</html>
