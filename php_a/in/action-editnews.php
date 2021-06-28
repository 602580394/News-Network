<?php

			     $id = $_POST['id'];
					$yuan_id=$_POST['yuan_id'];
                 $title = $_POST['title'];
                 $keywords = $_POST['keywords'];
                 $autor = $_POST['autor'];
                  $addtime = $_POST['addtime'];
                 $content = $_POST['content'];
                 $conn=mysqli_connect("localhost","root","12345678","qikan");
                 $sql="update news info set id=".$id.", title='".$title."',keywords='".$keywords."',autor='".$autor."',addtime='".$addtime."',content='".$content."' where id=".$yuan_id."";
                          $mark =  mysqli_query($conn,$sql);                 
                          $url ="index.php";
                       if($mark!=0){
						   echo "<script>alert('cg');document.location='index.php';</script>";
					   }
                       else{
	                  echo "alert('$sql')</script>";
                        }
                 mysqli_close($conn)

?>

