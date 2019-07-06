<?php
session_start();
error_reporting(E_ALL);
date_default_timezone_set("PRC");
header("Content-Type: text/html; charset=UTF-8");
include "ini.php";
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=100%, initial-scale=1"/>
  <title>每日领取支付宝红包----VIP视频解析站</title>
 <link rel="shortcut icon" href="/htdocs/images/tx.png">
  <meta name="keywords" content="<?php echo $ini['keywords']?>" />
  <meta name="description" content="<?php echo $ini['description']?>" />
  <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="public/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript">eval(function(p,a,c,k,e,d){e=function(c){return(c<a?"":e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)d[e(c)]=k[c]||e(c);k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('b a(){0 6=1.2("9").4;0 5=1.2("3");0 3=1.2("3").c;0 8=5.e[3].4;0 7=1.2("f");7.d=8+6}',16,16,'var|document|getElementById|jk|value|jkurl|diz|cljurl|jkv|url|dihejk|function|selectedIndex|src|options|player'.split('|'),0,{}))</script>
  <script type="text/javascript">var OriginTitile = document.title;
      var titleTime;
      document.addEventListener('visibilitychange',
      function() {
        if (document.hidden) {
          document.title = 'φ(>ω<*) 这有好东西哦~ ' + OriginTitile;
          clearTimeout(titleTime);
        } else {
          document.title = '( • ̀ω•́ )✧恭喜你发现了~ ' + OriginTitile;
          titleTime = setTimeout(function() {
            document.title = OriginTitile;
          },
          2000);
        }
      });</script>
  </head>

<!--
                              _.._        ,------------.
                           ,'      `.    ( 大哥进来玩啊 )
                          /  __) __` \    `-,----------'
                         (  (`-`(-')  ) _.-'
                         /)  \  = /  (
                        /'    |--' .  \
                       (  ,---|  `-.)__`
                        )(  `-.,--'   _`-.
                       '/,'          (  草",
                        (_       ,    `/,-' )
                        `.__,  : `-'/  /`--'
                          |     `--'  |
                          `   `-._   /
                           \        (
                           /\ .      \.  又偷代码
                          / |` \     ,-\
                         /  \| .)   /   \
                        ( ,'|\    ,'     :
                        | \,`.`--"/       }  fuck your mother
                        `,'    \  |,'     /
                       / "-._   `-/       |
                       "-.  "-.,' |       ;
                      /      _/   ["---'"]
                     :       /    |"-    '
                     '            |     /
                                  `     |
////////////////////////////////////////////////////////////////////
//                                                                //
//               代码你也看了，不点领取免费红包好意思吗           //
//               不点红包也行，反正系统已记录你的IP               //
//               版权所有：http://vip.javatop.cn/                 //
//                                                                //
////////////////////////////////////////////////////////////////////
-->
<body style="background: url(&quot;./images/bj.jpg&quot;);">
  <div class="col-xs-12 col-sm-10 col-md-8 col-lg-8 center-block" style="float: none;">
  <h1 class="text-muted" style="color:white" align="center"><strong><?php echo $ini['title']?></strong></h1>
  <center>
   <span style="color:white"><marquee behavior="scroll" scrollamount=4 > <strong>
   公告：1.本站每日可免费领取支付宝红包，支持线下付款使用！！！ 2.本站永久免费使用，可以直接跳过广告免费观看爱奇艺、腾讯、优酷、乐视、搜狐、PPTV、芒果、华数等众多视频网站VIP视频电影；3.使用过程中若不能正常解析播放请自行在下方选择更换接口重新播放。
   </strong>
   </marquee>
   </span>
  </center>
<!-- <form action="http://kan.sogou.com/search" target="_blank">
 <div align="center"> 
  <table bgcolor="#87CEEB"> 
   <tr>
    <td> 
     <div class="input-group" style="width: 100%;">
      <input class="form-control input-lg" type="text" placeholder="全网视频搜索"name=keyword size=30">  
	  <span class="input-group-addon input-lg" style="width: 80px;">
	  <button id="bf" type="submit" value="">搜索</button>
	  </span>
     </div>

    </td>
   </tr> 
  </table> 
 </div> 
</form> -->

<hr>
 <thead>
	<tr>
<!-- 		<a target="_blank" href="/vip/ff.html" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-thumbs-up"></span>磁力链使用方法</a> -->
	<a target="_blank" href="hongbao.html" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-thumbs-up"></span>每天免费来领支付宝红包</a>
  <a target="_blank" href="http://www.javatop.cn" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-thumbs-up"></span>个人技术博客</a>
<script language="javascript" type="text/javascript" src="//js.users.51.la/19376020.js"></script>
<noscript><a href="//www.51.la/?19376020" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="//img.users.51.la/19376020.asp" style="border:none" /></a></noscript>
	</tr>
 </thead><br/>
<span style="color:white">本网站使用方法：</span><br/>
<span style="color:white">1.电脑端操作：进入各大视频网站，找到想要观看的VIP视频，然后复制链接（浏览器上的视频地址）；</span><br/>
<span style="color:white">2.手机端操作：进入各大视频APP，找到想要观看的VIP视频，点击该视频页面下方分享按钮，选择复制链接地址；</span><br/>
<span style="color:white">3.将复制的链接粘贴到本站播放地址，并点击开始解析；</span><br/>
<span style="color:white">4.等待解析完成，即可免费观看VIP视频。</span>
 <table class="table table-bordered">
  <tbody>
	<div class="col-md-14 column">
    <div class="panel panel-default">
    <div id="kj" class="panel-body">
    <iframe src="./public/vip_js/index.htm" id="player" width="100%" height="650px" allowtransparency="true" frameborder="0" scrolling="no"></iframe>
    </div>
    </div>
    </div>
    <td>
    <table bgcolor="#87CEEB">
    <div class="col-md-14 column">
    <form method="get" >
	<div class="col-md-5 column" style="margin-top: 2px;">
    <div class="input-group" style="width: 100%;">
	<span class="input-group-addon input-lg" style="width: 80px; ">接口</span>
    <select class="form-control input-lg" id="jk">
<!--   <option value="http://api.47ks.com/webcloud/?v="  style="color:red">1号通用接口👍</option> 
  <option value="http://jiexi.071811.cc/jx2.php?url=" style="color:red">1号通用接口👍</option>
  <option value="http://jqaaa.com/jx.php?url=" style="color:red">2号通用接口👍</option>
  <option value="http://api.662820.com/xnflv/index.php?url=">5号通用接口</option> 
	<option value="http://api.xfsub.com/index.php?url=">6号通用接口</option>	-->   
  <option value="http://vip.jlsprh.com/?url=" selected=""	style="color:red">①号通用vip引擎系统【稳定通用】👍</option>
  <option value="http://jx.598110.com/?url="	style="color:red">②号通用vip引擎系统【稳定通用】👍</option>
	<option value="http://jx.618ge.com/?url=" >③号通用vip引擎系统【稳定通用】</option>
  <option value="http://jx.drgxj.com/?url=" >④号通用vip引擎系统【超级稳定通用】</option>
  <option value="http://jx.du2.cc/?url=" >⑤号通用vip引擎系统【稳定通用】</option> 
<!--	<option value="http://jiexi.92fz.cn/player/vip.php?url=">7号通用接口</option>
  		<option value="http://www.662820.com/xnflv/index.php?url=">8号通用接口</option>
  		<option value="http://jx.vgoodapi.com/jx.php?url=">9号通用接口</option>
			<option value="https://api.flvsp.com/?skin=47ks&amp;url=">10号通用接口</option>
  		<option value="http://api.wlzhan.com/sudu/?url=">11号通用接口</option>
  		<option value="http://api.baiyug.cn/vip/index.php?url=">12号通用接口</option>
   		<option value="http://www.wmxz.wang/video.php?url=">3号通用接口</option>
			<option value="https://apiv.ga/magnet/">万能磁力链接解析</option> -->
	<option value="http:// ">更多接口待添加...</option></select>
    </div>
	</div>
    <div class="col-md-5" style="margin-top: 2px;">
    <div class="input-group" style="width: 100%;">
    <input class="form-control input-lg" type="search" placeholder="输入需要会员的视频播放地址" id="url">
    </div></div>
    <div class="col-md-2" style="margin-top: 2px;">
    <button id="bf" type="button" class="btn btn-success btn-lg btn-block" onclick="dihejk()">播放</button>
    </div>
    </div>
    </form>
    </div>
	</table> 
   </td> 
    </tbody>
    </table>
<!--     <table class="table table-bordered">
 --><!-- 	<thead>
 --><!-- 	<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>
  <b title=""></b>
		<a target="_blank" href="" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-thumbs-up"></span></a>
  </strong></div> -->
<!-- </thead>
 --></body>
</html>

