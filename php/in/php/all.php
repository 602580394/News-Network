<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>页面布局</title>
            <link href="../css/ym.css" rel="stylesheet" type="text/css">
		    <link rel="stylesheet" href="../css/lunbo.css" type="text/css">
			<link rel="stylesheet" href="../css/foot.css" type="text/css">
    </head>
    <body>
        <div id="all">
			<?php include "head_all.php"?>
			
           <?php include "center_all.php"?> 
        </div>


            <?php include "foot.php"?>


    </body>
</html>
	<script type="text/javascript">
        var slid = document.getElementById("e_a");
        //var id = document.getElementById("bt");
        var imgwidth = document.getElementsByClassName("e_a_1");
        var oli=document.getElementsByTagName("li");
        //console.log(oli);
        //console.log(imgwidth );
        var i =0;
        auto();
        oli[0].style.cssText="background:#ff6700;color:#fff;";
        function auto(){

            
            time = setInterval(function(){
                i++;
            if(i <= 3) {
                slid.style.left = slid.offsetLeft - 300 + "px";
                oli[i].style.cssText="background:#ff6700;color:#fff;";
                oli[i-1].style.cssText="background:none;color:#000;";
            } else {
                slid.style.left ="0px";
                oli[2].style.cssText="background:none;color:#000;";
                oli[0].style.cssText="background:#ff6700;color:#fff;";
                i=0;
            }
            console.log(i);

            
        }, 3000)

            
        }

        
            for(var j=0;j<=3;j++){
                //console.log(imgwidth[j].index);
            imgwidth[j].index=j;
            oli[j].index=j;
            oli[j].onmouseover=function(){
                this.style.cssText="background:#ff6700;color:#fff;"    
                this.onmouseout=function(){
                    this.style.cssText="background:none;color:#000;"
                }
            }

            
            oli[j].onclick=function(){
                clearInterval(time);
                m=this.index;
                slid.style.left=-m*300+"px";    
                i=m;
                auto();
                console.log(i);
            }
            }    

            
    </script>



<script>
    var box = document.getElementById("al");
    var ul = box.children[0].children[0];
    var ol = box.children[0].children[1];
    var ulLiArr = ul.children;
    //2.补齐相互盒子
        //1.复制第一张图片所在的li，填入所在的ul中。
    var newLi = ulLiArr[0].cloneNode(true);
    ul.appendChild(newLi);
        //2.生成相关的ol中的li。
    for(var i=0;i<ulLiArr.length-1;i++){
        var newOlLi = document.createElement("li");
        newOlLi.innerHTML = i+1;
        ol.appendChild(newOlLi);
    }
        //3.点亮第一个ol中的li。
    var olLiArr = ol.children;
    ol.children[0].className = "current";
    //3.鼠标放到小方块儿上，轮播图片。
    for(var i=0;i<olLiArr.length;i++){
        olLiArr[i].index = i;
        olLiArr[i].onmouseover = function () {
            for(var j=0;j<olLiArr.length;j++){
                olLiArr[j].className = "";
            }
            olLiArr[this.index].className = "current";
            animate(ul,-this.index*ul.children[0].offsetWidth);
            key = square = this.index;
        }
    }
    //4.添加定时器。
    var timer = null;
    var key = 0;
    var square = 0;
    timer = setInterval(autoPlay,3000);
 
 
    function autoPlay(){
        key++;
        square++;
        if(key>olLiArr.length){
            key=1;
            ul.style.left = 0;
        }
        animate(ul,-key*ul.children[0].offsetWidth);
 
 
        square = square>olLiArr.length-1?0:square;
        for(var j=0;j<olLiArr.length;j++){
            olLiArr[j].className = "";
        }
        olLiArr[square].className = "current";
    }
    //5.鼠标移开开启定时器，鼠标放上去开启定时器。
    box.onmouseover = function () {
        clearInterval(timer);
    }
    box.onmouseout = function () {
        timer = setInterval(autoPlay,3000);
    }
    //6.左右切换的按钮。
    var btnArr = box.children[0].children[2].children;
    btnArr[0].onclick = function () {
        key--;
        square--;
        if(key<0){
            key=4;
            ul.style.left = -5*ul.children[0].offsetWidth + "px";
        }
        animate(ul,-key*ul.children[0].offsetWidth);
 
 
        square = square<0?olLiArr.length-1:square;
        for(var j=0;j<olLiArr.length;j++){
            olLiArr[j].className = "";
        }
        olLiArr[square].className = "current";
    }
    btnArr[1].onclick = function () {
        autoPlay();
    }
 
 
 
 
 
 
 
 
    //  基本封装
    function animate(obj,target) {
        clearInterval(obj.timer);
        var speed = obj.offsetLeft < target ? 15 : -15;
        obj.timer = setInterval(function() {
            var result = target - obj.offsetLeft;
            obj.style.left = obj.offsetLeft + speed  + "px";
            if(Math.abs(result) <= 15) {
                obj.style.left = target + "px";
                clearInterval(obj.timer);
            }
        },10);
    }
 
 
 
 
</script>
	