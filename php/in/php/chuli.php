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
                    $BT=$_POST['BT'];
                    $XM=$_POST['XM'];
                    $YX=$_POST['YX'];
                    $QQ=$_POST['QQ'];
                    $SJ=$_POST['SJ'];
                    $textarea=$_POST["LY"];
                    if($BT==""){
                        
                    echo "<script>alert('请输入标题');history.go(-1);</script>";
                        
                    }
			        else if($XM==""){
                        
                    echo "<script>alert('请输入姓名');history.go(-1);</script>";
                        
                    }
			        else if($QQ==""){
                        
                    echo "<script>alert('请输入qq');history.go(-1);</script>";
                        
                    }
			        else if($SJ==""){
                        
                    echo "<script>alert('请输入手机号');history.go(-1);</script>";
                        
                    }
			        else if($textarea==""){
                        
                    echo "<script>alert('请输入留言');history.go(-1);</script>";
                        
                    }
                    else
                    {
                        $SQL="INSERT INTO leavemessage values ('','$BT','$XM','$YX','$QQ','$SJ','$textarea')";
                        $result=$conn->query($SQL);
                       if($result)
                       {
                           echo"<script>alert('CG');document.location='bodyall.php';</script>";
                         }
                        else{
                            
                            echo"<script>alert('SB');history.go(-1);</script>";
                        }
                       }
                    }

        ?>
    </body>
</html>
