            <div id="center">
<div id="one">				
              <img src="../images/ico5.gif">
              <p>图片新闻</p>
				<hr/>
<div id="e_c">
<div id="e">
<div id="e_a">
<a href="liuyan.php"><img id="lun" class="e_a_1" src="../images/20110716114749_22.jpg" width="300px" height="260px"></a>
<img class="e_a_1" src="../images/2011121352686433.jpg" width="300px" height="260px">
<img class="e_a_1" src="../images/20110716114749_22.jpg" width="300px" height="260px">
<img class="e_a_1" src="../images/2011121352686433.jpg" width="300px" height="260px">	
</div>
<div id="e_b">
<ul>
      <li class="e_a_2">1</li>
      <li class="e_a_2">2</li>
      <li class="e_a_2">3</li>
      <li class="e_a_2">4</li>
</ul>
</div>
</div>
	</div>
	</div>
				
		
			
			
			
              <div id="two">
              <img src="../images/ico5.gif">
              <p>实时新闻</p>
             <hr/>
              <ul>
				  <?php
                              include 'conn.php';
                              $sql="select * from news order by id limit 0,8";
                              $res=$conn->query($sql);
                              while($row=mysqli_fetch_array($res))
                              {
                                  ?>
                                   <div id="juli">
									   	<p id="ming"><?php 					echo "<td>
							            <a href='zx.php?id={$row['id']}'>查看详情</a>
						                </td>";?></p>
                                       <p id="ming"><?php echo $row["title"];?></p>
									   <p id="ri"><?php echo $row["addtime"];?></p>
                                   </div>
                                   <?php
                              }
?>
				  
              </ul>
              </div>
              <div id="three">
              <img src="../images/ico5.gif">
              <p>网站简介</p> 
              <hr/>
              <div id="i">
              <p >断耳兔新闻中心是人民接收新闻最重要的频道之一,24小时滚动报道国内、国际及社会新闻。每日编发新闻数以万计。</p></div>
             <div  id="t"><img src="../images/lg.png"> </div>
            </div>
            <div id="for">
            <div id="pian">
            <div id="k"><img src="../images/ico5.gif">
           <p>今日推荐书刊</p></div>
            <hr/>
            <img src="../images/vshop342204654-1440145162796-01731-s1.jpg" class="p">
            <img src="../images/vshop342204654-1440155150533-42125-s2.jpg" class="p">
            <img src="../images/SYKZ.jpg" class="p">
            <img src="../images/SCZG.jpg"  class="p">
            </div>
            <div id="lian">
            <div id="jl"><p><h4>站内</h4>搜索</p></div>
		   <form action="zx.php" method="post">		
            <label>关键字：</label><input type="text" name="keywords"> </br>   
	        <input type="submit" value="搜索" id="sub" name="sub">		
		    </form>
				
				
            </div>
           </div>
		
		
		
		
		
            </div>