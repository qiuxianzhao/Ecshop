<?php exit;?>a:3:{s:8:"template";a:13:{i:0;s:46:"D:/wamp/shop/themes/ecmoban_shunfeng/index.dwt";i:1;s:60:"D:/wamp/shop/themes/ecmoban_shunfeng/library/page_header.lbi";i:2;s:57:"D:/wamp/shop/themes/ecmoban_shunfeng/library/index_ad.lbi";i:3;s:68:"D:/wamp/shop/themes/ecmoban_shunfeng/library/category_tree_index.lbi";i:4;s:61:"D:/wamp/shop/themes/ecmoban_shunfeng/library/new_articles.lbi";i:5;s:56:"D:/wamp/shop/themes/ecmoban_shunfeng/library/ur_here.lbi";i:6;s:68:"D:/wamp/shop/themes/ecmoban_shunfeng/library/recommend_promotion.lbi";i:7;s:62:"D:/wamp/shop/themes/ecmoban_shunfeng/library/category_tree.lbi";i:8;s:62:"D:/wamp/shop/themes/ecmoban_shunfeng/library/recommend_new.lbi";i:9;s:62:"D:/wamp/shop/themes/ecmoban_shunfeng/library/recommend_hot.lbi";i:10;s:63:"D:/wamp/shop/themes/ecmoban_shunfeng/library/recommend_best.lbi";i:11;s:53:"D:/wamp/shop/themes/ecmoban_shunfeng/library/help.lbi";i:12;s:60:"D:/wamp/shop/themes/ecmoban_shunfeng/library/page_footer.lbi";}s:7:"expires";i:1481805954;s:8:"maketime";i:1481802354;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v3.0.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="飞飞商城  飞飞杂货铺 飞飞品牌" />
<meta name="Description" content="飞飞商城" />
<title>飞飞商城</title>
<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="themes/ecmoban_shunfeng/style.css" rel="stylesheet" type="text/css" />
<link rel="alternate" type="application/rss+xml" title="RSS|飞飞商城" href="feed.xml" />
<script type="text/javascript" src="js/common.js"></script><script type="text/javascript" src="js/index.js"></script></head>
<body class="index_page" style="min-width:1200px;">
 <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script><script type="text/javascript" src="js/jquery.json.js"></script><script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
<script type="text/javascript">
//设为首页 www.ecmoban.com
function SetHome(obj,url){
    try{
        obj.style.behavior='url(#default#homepage)';
       obj.setHomePage(url);
   }catch(e){
       if(window.netscape){
          try{
              netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
         }catch(e){
              alert("抱歉，此操作被浏览器拒绝！\n\n请在浏览器地址栏输入“about:config”并回车然后将[signed.applets.codebase_principal_support]设置为'true'");
          }
       }else{
        alert("抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将【"+url+"】设置为首页。");
       }
  }
}
 
//收藏本站 bbs.ecmoban.com
function AddFavorite(title, url) {
  try {
      window.external.addFavorite(url, title);
  }
catch (e) {
     try {
       window.sidebar.addPanel(title, url, "");
    }
     catch (e) {
         alert("抱歉，您所使用的浏览器无法完成此操作。\n\n加入收藏失败，请使用Ctrl+D进行添加");
     }
  }
}
</script>
<div id="Top">
    <div class=" block header_bg">
        
        <div class="top_nav">
            <script type="text/javascript">
                //初始化主菜单
                function sw_nav(obj,tag){
                    var DisSub = document.getElementById("DisSub_"+obj);
                    var HandleLI= document.getElementById("HandleLI_"+obj);
                    if(tag==1){
                        DisSub.style.display = "block";
                    }else{
                        DisSub.style.display = "none";
                    }
                }
            </script>
            <div class="block">     
            	
                <ul class="top_bav_l">
                	<li class="top_sc">&nbsp;|&nbsp;<a href="javascript:void(0);" onclick="AddFavorite('我的网站',location.href)">收藏本站</a></li>
                    <li>&nbsp;|&nbsp;&nbsp;关注我们：</li>
                    <li style="border:none" class="menuPopup"  onMouseOver="sw_nav(1,1);" onMouseOut="sw_nav(1,0);">
                    	<a id="HandleLI_1" href="javascript:;" title="微博" class="attention"></a>
                        <div id=DisSub_1 class="top_nav_box  top_weibo">
                        	<a href="http://e.weibo.com/ECMBT" target="_blank" title="新浪微博" class="top_weibo"></a>
                            <a href="http://e.t.qq.com/ecmoban_com" target="_blank" title="QQ微博" class="top_qq"></a> 
                        </div> 
                    </li> 
                    <li class="menuPopup" onMouseOver="sw_nav(2,1);" onMouseOut="sw_nav(2,0);">
                    	<a id="HandleLI_2" href="javascript:;" title="微信" class="top_weixin"></a> 
                        <div id="DisSub_2" class="weixinBox" style="display: none;"><img src="themes/ecmoban_shunfeng/images/weixin.png" style="width:150px; height:190px;  background:#0000CC" width="150" height="190"> </div> 
                    </li>
                </ul>
            	
                <div class="header_r">
                
                <script type="text/javascript" src="js/transport_jquery.js"></script><script type="text/javascript" src="js/utils.js"></script>                <font id="ECS_MEMBERZONE" >45ea207d7a2b68c49582d2d22adf953amember_info|a:1:{s:4:"name";s:11:"member_info";}45ea207d7a2b68c49582d2d22adf953a </font>
             
                                  
                </div>
            </div>
        </div>
        
        <div class="clearfix"></div>
        <div class="header_top logo_wrap clearfix">
            <a class="logo_new" href="index.php"><img src="themes/ecmoban_shunfeng/images/logo.gif" /></a>
            <div class="ser_n">
                <form id="searchForm" class="searchBox" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
                    <input name="keywords" type="text" id="keyword" value="" class="searchKey" />
                    <input type="submit"  name="imageField" class="fm_hd_btm_shbx_bttn" value=" ">
                </form>
                <div class="search_hot">
            	            	</div>
                <div class="clearfix"></div>
            </div>
            
            
            
            <div class="cart_info" id="ECS_CARTINFO">
            	<s class="setCart"></s>
                <a href="flow.php" class="shopborder">我的购物车</a>
                <span class="carts_num">45ea207d7a2b68c49582d2d22adf953acart_info|a:1:{s:4:"name";s:9:"cart_info";}45ea207d7a2b68c49582d2d22adf953a</span>                
            </div>
        </div>
    </div>
</div>
<div style="clear:both"></div>
 
<div class="menu_box clearfix"> 
<div class="block"> 
<div class="menu">
  <a href="index.php" class="cur">首页</a>
  </div> 
</div>
</div>
 
 
 
 
<style type="text/css"> 
.container, .container *{margin:0; padding:0;}
.container{width:100%;  height:413px;overflow:hidden;position:relative;}
.slider{position:absolute; width:100%;  height:413px;}
.slider li , .slider li a{list-style:none; float:left;width:100%;  height:413px;}
.slider img{width:100%; height:400px; display:block;}
.slider2{width:2000px;}
.slider2 li{float:left;}
.num{position:absolute; left:50%; bottom:5px; width:auto; margin:0 auto;}
.num li{
	float: left;
	color: #669900;
	text-align: center;
	line-height: 16px;
	width: 16px;
	height: 16px;
	font-family: Arial;
	font-size: 12px;
	cursor: pointer;
	overflow: hidden;
	margin: 3px 1px;
	border: 1px solid #669900;
	background-color: #fff;
}
.num li.on{
	color: #fff;
	line-height: 21px;
	width: 21px;
	height: 21px;
	font-size: 16px;
	margin: 0 1px;
	border: 0;
	background-color: #669900;
	font-weight: bold;
}
</style>
<div class="container" id="idTransformView">
  <ul class="slider" id="idSlider">
        <li style="background:url(data/afficheimg/20160128exxdnz.jpg) center 0 no-repeat; position:relative;"><a href="http://" target="_blank"></a></li>
            <li style="background:url(data/afficheimg/20160129prsrpo.png) center 0 no-repeat; position:relative;"><a href="http://mb.ecmoban.com/kuajingtong/" target="_blank"></a></li>
            <li style="background:url(data/afficheimg/20160129vfrgku.jpg) center 0 no-repeat; position:relative;"><a href="http://dsc.ecmoban.com/" target="_blank"></a></li>
            <li style="background:url(data/afficheimg/20160129bcmitn.jpg) center 0 no-repeat; position:relative;"><a href="http://www.ecjia.com/" target="_blank"></a></li>
            <li style="background:url(data/afficheimg/20150608boezpt.png) center 0 no-repeat; position:relative;"><a href="http://www.ectouch.cn/" target="_blank"></a></li>
            <li style="background:url(data/afficheimg/20160129pcigev.png) center 0 no-repeat; position:relative;"><a href="http://www.ecmoban.com/topic/wfx/index.html" target="_blank"></a></li>
      
  </ul>
  <ul class="num" id="idNum">
 
    
          <li>
    1    </li> 
         <li>
    2    </li> 
         <li>
    3    </li> 
         <li>
    4    </li> 
         <li>
    5    </li> 
         <li>
    6    </li> 
        
  </ul>
</div>
<script type="text/javascript">
var $s = function (id) {
	return "string" == typeof id ? document.getElementById(id) : id;
};
var Class = {
  create: function() {
	return function() {
	  this.initialize.apply(this, arguments);
	}
  }
}
Object.extend = function(destination, source) {
	for (var property in source) {
		destination[property] = source[property];
	}
	return destination;
}
var TransformView = Class.create();
TransformView.prototype = {
  //容器对象,滑动对象,切换参数,切换数量
  initialize: function(container, slider, parameter, count, options) {
	if(parameter <= 0 || count <= 0) return;
	var oContainer = $s(container), oSlider = $s(slider), oThis = this;
	this.Index = 0;//当前索引
	
	this._timer = null;//定时器
	this._slider = oSlider;//滑动对象
	this._parameter = parameter;//切换参数
	this._count = count || 0;//切换数量
	this._target = 0;//目标参数
	
	this.SetOptions(options);
	
	this.Up = !!this.options.Up;
	this.Step = Math.abs(this.options.Step);
	this.Time = Math.abs(this.options.Time);
	this.Auto = !!this.options.Auto;
	this.Pause = Math.abs(this.options.Pause);
	this.onStart = this.options.onStart;
	this.onFinish = this.options.onFinish;
	
	oContainer.style.overflow = "hidden";
	oContainer.style.position = "relative";
	
	oSlider.style.position = "absolute";
	oSlider.style.top = oSlider.style.left = 0;
  },
  //设置默认属性
  SetOptions: function(options) {
	this.options = {//默认值
		Up:			true,//是否向上(否则向左)
		Step:		5,//滑动变化率
		Time:		10,//滑动延时
		Auto:		true,//是否自动转换
		Pause:		2000,//停顿时间(Auto为true时有效)
		onStart:	function(){},//开始转换时执行
		onFinish:	function(){}//完成转换时执行
	};
	Object.extend(this.options, options || {});
  },
  //开始切换设置
  Start: function() {
	if(this.Index < 0){
		this.Index = this._count - 1;
	} else if (this.Index >= this._count){this.Index = 0;}
	
	this._target = -1 * this._parameter * this.Index;
	this.onStart();
	this.Move();
  },
  //移动
  Move: function() {
	clearTimeout(this._timer);
	var oThis = this, style = this.Up ? "top" : "left", iNow = parseInt(this._slider.style[style]) || 0, iStep = this.GetStep(this._target, iNow);
	
	if (iStep != 0) {
		this._slider.style[style] = (iNow + iStep) + "px";
		this._timer = setTimeout(function(){oThis.Move();}, this.Time);
	} else {
		this._slider.style[style] = this._target + "px";
		this.onFinish();
		if (this.Auto) { this._timer = setTimeout(function(){oThis.Index++; oThis.Start();}, this.Pause); }
	}
  },
  //获取步长
  GetStep: function(iTarget, iNow) {
	var iStep = (iTarget - iNow) / this.Step;
	if (iStep == 0) return 0;
	if (Math.abs(iStep) < 1) return (iStep > 0 ? 1 : -1);
	return iStep;
  },
  //停止
  Stop: function(iTarget, iNow) {
	clearTimeout(this._timer);
	this._slider.style[this.Up ? "top" : "left"] = this._target + "px";
  }
};
window.onload=function(){
	function Each(list, fun){
		for (var i = 0, len = list.length; i < len; i++) {fun(list[i], i);}
	};
	
	var objs = $s("idNum").getElementsByTagName("li");
	var obj_len=objs.length;
	var tv = new TransformView("idTransformView", "idSlider", 413, obj_len, {
		onStart : function(){ Each(objs, function(o, i){o.className = tv.Index == i ? "on" : "";}) }//按钮样式
	});
	
	tv.Start();
	
	Each(objs, function(o, i){
		o.onmouseover = function(){
			o.className = "on";
			tv.Auto = false;
			tv.Index = i;
			tv.Start();
		}
		o.onmouseout = function(){
			o.className = "";
			tv.Auto = true;
			tv.Start();
		}
	})
	
	////////////////////////test2
//	
//	var objs2 = $("idNum2").getElementsByTagName("li");
//	
//	var tv2 = new TransformView("idTransformView2", "idSlider2",1200, 3, {
//		onStart: function(){ Each(objs2, function(o, i){o.className = tv2.Index == i ? "on" : "";}) },//按钮样式
//		Up: false
//	});
//	
//	tv2.Start();
//	
//	Each(objs2, function(o, i){
//		o.onmouseover = function(){
//			o.className = "on";
//			tv2.Auto = false;
//			tv2.Index = i;
//			tv2.Start();
//		}
//		o.onmouseout = function(){
//			o.className = "";
//			tv2.Auto = true;
//			tv2.Start();
//		}
//	})
//	
//	$("idStop").onclick = function(){tv2.Auto = false; tv2.Stop();}
//	$("idStart").onclick = function(){tv2.Auto = true; tv2.Start();}
//	$("idNext").onclick = function(){tv2.Index++; tv2.Start();}
//	$("idPre").onclick = function(){tv2.Index--;tv2.Start();}
//	$("idFast").onclick = function(){ if(--tv2.Step <= 0){tv2.Step = 1;} }
//	$("idSlow").onclick = function(){ if(++tv2.Step >= 10){tv2.Step = 10;} }
//	$("idReduce").onclick = function(){ tv2.Pause-=1000; if(tv2.Pause <= 0){tv2.Pause = 0;} }
//	$("idAdd").onclick = function(){ tv2.Pause+=1000; if(tv2.Pause >= 5000){tv2.Pause = 5000;} }
//	
//	$("idReset").onclick = function(){
//		tv2.Step = Math.abs(tv2.options.Step);
//		tv2.Time = Math.abs(tv2.options.Time);
//		tv2.Auto = !!tv2.options.Auto;
//		tv2.Pause = Math.abs(tv2.options.Pause);
//	}
	
}
</script><div class="blank" style="height:30px;"></div>
<div class="block clearfix Main">
<script type="text/javascript">
          //初始化主菜单
            function sw_nav2(obj,tag)
            {
            var DisSub2 = document.getElementById("DisSub2_"+obj);
            var HandleLI2= document.getElementById("HandleLI2_"+obj);
                if(tag==1)
                {
                    DisSub2.style.display = "block";
					HandleLI2.className="current i-master";
                }
                else
                {
                    DisSub2.style.display = "none";
					HandleLI2.className="i-master";
                }
            }
</script>
 
    
    
<div id="category_tree">
	<dl class="clearfix">
		<div class="mainCategory">
    		<h2><a href="search.php" target="_blank">所有商品分类</a></h2>
    	</div>
    	<div class="allSort">
        	<div id="booksort">
    		            </div>
    	</div> 
	</dl>
</div>
<div class="AreaL">
 
<div id="mallNews"    class="  box_1">
    <h3><span>站内快讯</span></h3>
    <div class="NewsList tc  " style="border-top:none">
        <ul>
                <li>
      <a href="article-33.html" title="三星SGHU308说明书下载">三星SGHU308说明书下载</a>
        </li>
                <li>
      <a href="article-32.html" title="手机游戏下载">手机游戏下载</a>
        </li>
                <li>
      <a href="article-34.html" title="3G知识普及">3G知识普及</a>
        </li>
                <li>
      <a href="article-31.html" title="诺基亚6681手机广告欣赏">诺基亚6681手机广告欣赏</a>
        </li>
                <li>
      <a href="article-8.html" title="诺基亚牵手移动 5款热门TD手机机型推荐">诺基亚牵手移动 5款热门TD手机...</a>
        </li>
                </ul>
    </div>
</div>
<div  class="blank"></div><div class="block box">
<div class="blank"></div>
 <div id="ur_here">
当前位置: <a href=".">首页</a> 
</div>
</div>
<div class="blank"></div>  
</div>
<div class="Arear">
 
</div> 
  <div class="goodsBox_1">
  
  <div id="category_tree">
  <div class="tit">所有商品分类</div>
  <dl class="clearfix" style=" overflow:hidden;" >
   <div class="box1 cate" id="cate">
	 
</div>
<div style="clear:both"></div>  
</div>  
 
<div class="blank"></div>
<script type="text/javascript">
obj_h4 = document.getElementById("cate").getElementsByTagName("h4")
obj_ul = document.getElementById("cate").getElementsByTagName("ul")
obj_img = document.getElementById("cate").getElementsByTagName("img")
function tab(id)
{ 
		if(obj_ul.item(id).style.display == "block")
		{
			obj_ul.item(id).style.display = "none"
			obj_img.item(id).src = "themes/ecmoban_shunfeng/images/btn_fold.gif"
			return false;
		}
		else(obj_ul.item(id).style.display == "none")
		{
			obj_ul.item(id).style.display = "block"
			obj_img.item(id).src = "themes/ecmoban_shunfeng/images/btn_unfold.gif"
		}
}
</script>
  
  
  </div> 
  
    </div>
  
<a href="http://www.ecmoban.com" class="ecmoban">ecshop模板堂</a>
<div class="footer">
	<div class="footer_zd">
		<ul>
    		<li class="quanqiu">
				<a target="_blank" href="#"></a>
			</li>
        	<li class="chandi">
				<a target="_blank" href="#"></a>
			</li>
        	<li class="qcll">
				<a target="_blank" href="#"></a>
			</li>
        	<li class="sfzd">
				<a target="_blank" href="#"></a>
			</li>
    	</ul>
	</div>
	 
	<div class="footerHelp">
    	<div class="footerBox">
        	<div class="footerCon">
                 
                                <ul>
                    <li class="lititle">新手上路 </li>
                                        <li><a target="_blank" href="article-9.html" title="售后流程" >售后流程</a></li>
                                        <li><a target="_blank" href="article-10.html" title="购物流程" >购物流程</a></li>
                                        <li><a target="_blank" href="article-11.html" title="订购方式" >订购方式</a></li>
                                    </ul>
                                 
                                <ul>
                    <li class="lititle">手机常识 </li>
                                        <li><a target="_blank" href="article-12.html" title="如何分辨原装电池" >如何分辨原装电池</a></li>
                                        <li><a target="_blank" href="article-14.html" title="如何享受全国联保" >如何享受全国联保</a></li>
                                    </ul>
                                 
                                <ul>
                    <li class="lititle">配送与支付 </li>
                                        <li><a target="_blank" href="article-15.html" title="货到付款区域" >货到付款区域</a></li>
                                        <li><a target="_blank" href="article-16.html" title="配送支付智能查询 " >配送支付智能查询</a></li>
                                        <li><a target="_blank" href="article-17.html" title="支付方式说明" >支付方式说明</a></li>
                                    </ul>
                                 
                                <ul>
                    <li class="lititle">会员中心</li>
                                        <li><a target="_blank" href="article-18.html" title="资金管理" >资金管理</a></li>
                                        <li><a target="_blank" href="article-19.html" title="我的收藏" >我的收藏</a></li>
                                        <li><a target="_blank" href="article-20.html" title="我的订单" >我的订单</a></li>
                                    </ul>
                                 
                                <ul>
                    <li class="lititle">服务保证 </li>
                                        <li><a target="_blank" href="article-21.html" title="退换货原则" >退换货原则</a></li>
                                        <li><a target="_blank" href="article-22.html" title="售后服务保证 " >售后服务保证</a></li>
                                        <li><a target="_blank" href="article-23.html" title="产品质量保证 " >产品质量保证</a></li>
                                    </ul>
                                 
                                <ul>
                    <li class="lititle">联系我们 </li>
                                        <li><a target="_blank" href="article-24.html" title="网站故障报告" >网站故障报告</a></li>
                                        <li><a target="_blank" href="article-25.html" title="选机咨询 " >选机咨询</a></li>
                                        <li><a target="_blank" href="article-26.html" title="投诉与建议 " >投诉与建议</a></li>
                                    </ul>
                                 
            </div>
        </div>
    </div>
        <div class="foot_con">
    	<div class="blank"></div>
        
        <div class="blank"></div>
        <div id="bottomNav" class="rolling" >
                    </div>
        
        
        
        <div class="text" style="height:1px ; width:1px; overflow:hidden;">
        	北京市朝阳区一脸萌比群众社区520栋1314号右转二巷口正对面大门        	            Tel: 010-100868001                                    E-mail: sasa@yopmail.com<br />
                                                <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=12345678&amp;Site=飞飞商城&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:12345678:4" height="16" border="0" alt="QQ" /> 12345678</a>
             
                                                <a href="http://amos1.taobao.com/msg.ww?v=2&uid=87654321&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=87654321&s=2" width="16" height="16" border="0" alt="淘宝旺旺" />87654321</a>
             
             
             
             
            <a href="http://edit.yahoo.com/config/send_webmesg?.target=000-0000-9999n&.src=pg" target="_blank"><img src="themes/ecmoban_shunfeng/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> 000-0000-9999</a> 
             
             
             
             
            <img src="themes/ecmoban_shunfeng/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=5201314">5201314</a> 
             
             
             
             
            <img src="http://mystatus.skype.com/smallclassic/QQ123456" alt="Skype" /><a href="skype:QQ123456?call">QQ123456</a> 
             
            <br />
        </div>
        
        <div class="record"> &copy; 2005-2016 飞飞商城 版权所有，并保留所有权利。 常年法律顾问：上海华宏律师事务所
        <p style="color:#999;">上海市普陀区中山北路2911号中关村科技大厦2402        Tel: 4000 021 758 </p>
        </div>
      
  </div>
  <div class="blank"></div>
  <div align="center"><a href=" http://www.ecmoban.com" target="_blank"><img src="themes/ecmoban_shunfeng/images/ecmoban.gif" alt="ECShop模板" /></a></div>
  
	
	    <div class="footerBox">
        <div class="blank"></div>
        <div class="blank"></div>
            <div >
            <dl class="sncompany box_1" style="text-align:left; border-left:none; border-right:none; background:none;">
                <dd class="">
                    <span>友情链接：</span>
                   
                                                            <a href="http://www.maifou.net/" target="_blank" title="买否网">买否网</a> <span>|</span>                                        <a href="http://www.wdwd.com/" target="_blank" title="免费开独立网店">免费开独立网店</a>                                                         </dd>
            </dl>
        </div>
    </div>
        
</div>
  
<link href="ecmoban_qq/images/qq.css" rel="stylesheet" type="text/css" />
<div class="QQbox" id="divQQbox" style="width: 170px; ">
<div class="Qlist" id="divOnline" onmouseout="hideMsgBox(event);" style="display: none; " onmouseover="OnlineOver();">
    <div class="t"></div>
    <div class="infobox">我们营业的时间<br>9:00-18:00</div>
    <div class="con">
        <ul>
 
  
  
  
  
  
                <li><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=12345678&amp;Site=飞飞商城&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:12345678:4" height="16" border="0" alt="QQ" /> 12345678</a> </li>
                              <li><a href="http://amos1.taobao.com/msg.ww?v=2&uid=87654321&s=2" target="_blank"><img src="http://amos1.taobao.com/online.ww?v=2&uid=87654321&s=2" width="16" height="16" border="0" alt="淘宝旺旺" />87654321</a></li>
                              <li><a href="http://edit.yahoo.com/config/send_webmesg?.target=000-0000-9999n&.src=pg" target="_blank"><img src="themes/ecmoban_shunfeng/images/yahoo.gif" width="18" height="17" border="0" alt="Yahoo Messenger" /> 000-0000-9999</a></li>
                              <li><img src="themes/ecmoban_shunfeng/images/msn.gif" width="18" height="17" border="0" alt="MSN" /> <a href="msnim:chat?contact=5201314">5201314</a></li>
                              <li><img src="http://mystatus.skype.com/smallclassic/QQ123456" alt="Skype" /><a href="skype:QQ123456?call">QQ123456</a></li>
       
    
  
  
  
  
  
  
  
  
  
  
	      <li> 服务热线: 010-100868001</li>
         </ul>
    </div>
    <div class="b"></div>
</div>
<div id="divMenu" onmouseover="OnlineOver();" style="display: block; "><img src="ecmoban_qq/images/qq_1.gif" class="press" alt="在线咨询"></div>
</div>
<script type="text/javascript">
//<![CDATA[
var tips; var theTop = 120/*这是默认高度,越大越往下*/; var old = theTop;
function initFloatTips() {
tips = document.getElementById('divQQbox');
moveTips();
};
function moveTips() {
var tt=50;
if (window.innerHeight) {
pos = window.pageYOffset
}
else if (document.documentElement && document.documentElement.scrollTop) {
pos = document.documentElement.scrollTop
}
else if (document.body) {
pos = document.body.scrollTop;
}
pos=pos-tips.offsetTop+theTop;
pos=tips.offsetTop+pos/10;
if (pos < theTop) pos = theTop;
if (pos != old) {
tips.style.top = pos+"px";
tt=10;
//alert(tips.style.top);
}
old = pos;
setTimeout(moveTips,tt);
}
//!]]>
initFloatTips();
function OnlineOver(){
document.getElementById("divMenu").style.display = "none";
document.getElementById("divOnline").style.display = "block";
document.getElementById("divQQbox").style.width = "170px";
}
function OnlineOut(){
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
if(typeof(HTMLElement)!="undefined")    //给firefox定义contains()方法，ie下不起作用
{   
      HTMLElement.prototype.contains=function(obj)   
      {   
          while(obj!=null&&typeof(obj.tagName)!="undefind"){ //通过循环对比来判断是不是obj的父元素
   　　　　if(obj==this) return true;   
   　　　　obj=obj.parentNode;
   　　}   
          return false;   
      };   
}  
function hideMsgBox(theEvent){ //theEvent用来传入事件，Firefox的方式
　 if (theEvent){
　 var browser=navigator.userAgent; //取得浏览器属性
　 if (browser.indexOf("Firefox")>0){ //如果是Firefox
　　 if (document.getElementById('divOnline').contains(theEvent.relatedTarget)) { //如果是子元素
　　 return; //结束函式
} 
} 
if (browser.indexOf("MSIE")>0){ //如果是IE
if (document.getElementById('divOnline').contains(event.toElement)) { //如果是子元素
return; //结束函式
}
}
}
/*要执行的操作*/
document.getElementById("divMenu").style.display = "block";
document.getElementById("divOnline").style.display = "none";
}
</script>
 
</body>
</html>
