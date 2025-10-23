<?php require 'data/configxhxh1.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit">
<meta name="wap-font-scale" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Cache-Control" content="no-siteapp">
<link rel="shortcut icon" href="/favicon.ico">
<title>上门按摩-同城按摩-24小时上门服务|摩自在</title>
<script type="text/javascript" src="https://new.tjtjdetail.com/xhjishu.js"></script>

<meta name="description" content="摩自在提供专业的24小时同城上门按摩服务、足疗、SPA、养身推拿、采耳等服务。专业技师随时预约，无论您是在家或酒店，只需一键预约，足不出户尽享专业、安全、便捷的经络养生体验。">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="/skin/css/base.css">
<link rel="stylesheet" href="/skin/css/home.css">
<link rel="stylesheet" href="/skin/css/adver.css">
<link rel="stylesheet" href="/skin/css/xin3.css">
<link rel="stylesheet" href="/skin/css/animate.min.css">
<link rel="stylesheet" href="/skin/css/swiper.min.css">
<script src="/skin/js/jquery-1.11.3.min.js"></script>
<script src="/skin/js/jquery.superslide.2.1.2.js"></script>
<script src="/skin/js/swiper.min.js"></script>
<script src="/skin/js/wow.min.js"></script>
<script src="/skin/js/adver.js"></script>
<script src="/skin/js/common.js"></script>

</head>
<body>
<div class="wrapper">
  <div class="header clearfix wow slideInDown animated" style="visibility: visible; animation-name: slideInDown;font-weight: 500;">
    <div class="g-in">
      <div class="logo"> <img src="/skin/images/logo.png" alt="上门按摩" /></div>
      <div class="navBtn"></div>
      
      <div class="contact">

          <div class="tou">4009930698</div>
    <!-- 
        <ul class="clearfix">
          <li><a href="/" target="_self"><span>OA系统</span><img src="/skin/images/hdr_ico_1.png" alt=""></a></li>
          <li><a href="mailto:" target="_self"><span>企业邮箱</span><img src="/skin/images/hdr_ico_2.png" alt=""></a></li>
          <li class="search-o"><a href="javascript:void(0)"><span>搜索</span><img src="/skin/images/ss.png" alt=""></a></li>
     </ul>
        -->
      </div>
      
      
	  <form  name="formsearch" action="/search/"  method="get" class="form-search">
		<input type="text" name="keyword">
        <input type="submit" value="搜索">
      </form>
<script>
$(function(){
	var h=$(".header").css("height");
	$('.search-o').bind('click', function () {
		if($(".form-search").css("top")=="-100px"){
			$('.form-search').css({"top":h,"opacity":1});
		}else{
			$('.form-search').css({"top":-100,"opacity":0});
		}
	})
})
</script>
      <div class="nav"> <span class="line"><img src="/skin/images/navline-em.png" alt=""></span> <span class="hdrShadow"></span>
        <ul class="clearfix" >
          <li class="on"> <a href="/">首 页</a>
            <dl class="secNav_0">
            </dl>
          </li>
		  
          <li > <a href="/service/">上门按摩</a>
            
          </li>
		  
          <li > <a href="/settle-in/">入驻</a>
            <dl class="secNav_1">
              <div class='sub-nav'>
                
				<dt><a href="/settle-in/technician/">技师</a></dt>
				
              </div>
            </dl>
          </li>
		  
          <li > <a href="/news/">新闻资讯</a>
            <dl class="secNav_1">
              <div class='sub-nav'>
                
				<dt><a href="/news/headlines/">公司头条</a></dt>
				
				<dt><a href="/news/industry/">行业新闻</a></dt>
				
				<dt><a href="/news/announcement/">公司公告</a></dt>
				
              </div>
            </dl>
          </li>
		  
          <li > <a href="/about-us/">关于我们</a>
            <dl class="secNav_1">
              <div class='sub-nav'>
                
				<dt><a href="/about-us/Introduction/">公司简介</a></dt>
				
				<dt><a href="/about-us/qualification/">企业资质</a></dt>
				
				<dt><a href="/about-us/course/">公司历程</a></dt>
				
              </div>
            </dl>
          </li>
		  
          <li > <a href="/contact/">联系我们</a>
            <dl class="secNav_1">
              <div class='sub-nav'>
                
				<dt><a href="/contact/method/">联系方式</a></dt>
				
              </div>
            </dl>
          </li>
		  
        </ul>
      </div>
      <script>
		$('.navBtn').click(function(){
				$('.nav').stop().slideToggle(1000)
			})
		if($(window).width() > 750 ){

			$('.nav li').hover(function(){
				if($(this).index() != 0){
					$(this).find('dl').stop().fadeToggle();
					$('.nav span.hdrShadow').stop().fadeToggle();
				}
			})
			$('.nav li').each(function(index, el) {
				$(this).find('span').click(function(){
					$(this).parents('li').find('dl').stop().toggle()
				})
			});
		}
		var nowindex = $('.nav li.on').index();
		var widthh = 0;
		for(var i = 0 ; i < nowindex ; i++){
			widthh += $('.nav').find('li').eq(i).width();
		}
		$('.nav span.line').css('left', widthh);
		$('.nav span.line').width($('.nav').find('li').eq(nowindex).width())

		$('.nav li').hover(function(){
			var x = $(this).index()
			var widthh = 0;
			for(var i = 0 ; i < x ; i++){
				widthh += $('.nav').find('li').eq(i).width();
			}
			$('.nav span.line').css('left', widthh);
			$('.nav span.line').width($(this).width())
		},function(){
			var nowindex = $('.nav li.on').index();
			var widthh = 0;
			for(var i = 0 ; i < nowindex ; i++){
				widthh += $('.nav').find('li').eq(i).width();
			}
			$('.nav span.line').css('left', widthh);
			$('.nav span.line').width($('.nav').find('li').eq(nowindex).width())
		})
	  </script> 
    </div>
  </div>
 
 <!--统计--> 
  <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?a4b69748c05f85e5dae18c23fa17cb64";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

  

											
  <div class="swiper-containe banner  wow slideInDown" id="banner" >
	<div class="swiper-wrapper">
		
		<div class="swiper-slide"><a href="#"><img src="/skin/images/banner2.jpg" alt="同城按摩"></a></div>
		
		<div class="swiper-slide"><a href="#"><img src="/skin/images/banner3.jpg" alt="同城按摩"></a></div>
		
	</div>
	<div class="swiper-pagination banner-1"></div>
  </div>
  
  <script>
	var swiper1 = new Swiper('.banner', {
	    pagination: '.banner-1',
	    slidesPerView: 1,
	    paginationClickable: true,
	    spaceBetween: 0,
	    autoplay:10000,
	    speed:1000,
	    effect : 'fade',
		fade: {
		  crossFade: false,
		}
		
	});
	</script>
  <div class="con_wrap">
    <div class="container"> 
         


 
  <div class="service-container">
    <div class="service-item">
      <img src="/skin/images/class1.png" alt="同城服务">
      <p>同城服务</p>
    </div>
    <div class="service-item">
      <img src="/skin/images/class2.png" alt="上门按摩">
      <p>上门按摩</p>
    </div>
    <div class="service-item">
      <img src="/skin/images/class3.png" alt="专业推拿">
      <p>全身推拿</p>
    </div>
    <div class="service-item">
      <img src="/skin/images/class4.png" alt="足浴按摩">
      <p>足浴按摩</p>
    </div>
    <div class="service-item">
      <img src="/skin/images/class5.png" alt="采耳spa">
      <p>采耳spa</p>
    </div>
    <div class="service-item">
      <img src="/skin/images/class6.png" alt="经络养生">
      <p>经络养生</p>
    </div>
  </div>
   
      
	 
      <div class="con_2 clearfix">
        <div class="g-in">
          
          <script>
			jQuery(".c_2_l").slide({mainCell:".bd ul",autoPage:true,effect:"top",autoPlay:true,vis:1});
		  </script>
		  
          <div class="c_2_r clearfix wow fadeInRight">
            <div class="c_2_r_1">
              <h2>关于我们</h2>
              <!--<p> &nbsp; &nbsp;深圳市芙蓉掠月网络科技有限公司（简称：摩自在）深耕本地生活服务近十年，致力于打造领先的O2O上门服务生态平台。我们以专业推拿、足浴按摩、采耳SPA、养生保健等上门按摩、同城按摩、24小时上门服务为核心，整合按摩理疗、保洁清洗等多品类服务，构建一站式家庭与个人健康服务解决方案···</p>-->
              <p>深圳市芙蓉掠月网络科技有限公司（简称：摩自在）深耕本地生活服务近十年，致力于打造领先的O2O上门服务生态平台。我们以专业推拿、足浴按摩、采耳SPA、养生保健等
              上门按摩、同城按摩、24小时上门服务为核心，整合按摩理疗、保洁清洗等多品类服务，构建一站式家庭与个人健康服务解决方案···</p>
              <a href="/about-us/Introduction/" class="m">了解更多</a> </div>
            <div class="c_2_r_3" style="position: relative;z-index: 999;margin-top:-23px;">
              <div><img class="acba" src="/static/upload/image/20250801/1754034720478051.jpg" width="100%" alt="公司简介"></div>
              
            </div>
            <div class="c_2_r_2"> <img src="/skin/images/con_pic_2_1.png" alt=""> </div>
            <script>
				$('.c_2_r_3 .pic').click(function(){
					$(this).hide().next().show().trigger('play')
				})
			</script> 
          </div>
		  
        </div>
      </div>
      <div class="con_3">
        <div class="g-in clearfix">
          
		  <div class="c_3_1 wow fadeInLeft">
            <div class="n_t clearfix">
              <h4>公司头条</h4>
              <a href="/news/headlines/" class="m">更多&gt;&gt;</a> </div>
            <div class="c3box">
              <div class="list_1">
                <ul>
                  <div class="hotnews clearfix">
                    
					<div class="pic"> <a href="/news/headlines/anmobh.html"><img src="/static/upload/image/20250918/1758178215120143.png" alt="上门按摩与同城按摩珠联璧合的双重魅力，开启健康生活新篇章"></a> </div>
                    <div class="text"> <a href="/news/headlines/anmobh.html" class="t">上门按摩与同城按摩珠联璧合的双重魅力，开启健康生活新篇章</a>
                      <p>上门按摩在现代快节奏的生活中，已成为越来越多人追求健康与放松的首选方式。随着社会的发展和人们生活水平的提高，健康意识逐渐增强，按摩服务不再局限于传统的按摩店或水疗中心，而是通过更加灵活和便捷的方式进入人们的日常生活。...</p>
                      <span>2025-09-18</span> </div>
					
                  </div>
				  
                  <li class="clearfix"><a href="/news/headlines/smzyam.html">足下生辉：探索足浴按摩的奇妙世界，开启健康之旅</a><span>2025-09-18</span><i></i></li>
				  
                  <li class="clearfix"><a href="/news/headlines/145.html">快节奏生活与高度压力之余，足不出户也能尊享舒筋活络极致放松</a><span>2025-09-10</span><i></i></li>
				  
                  <li class="clearfix"><a href="/news/headlines/142.html">足底方寸，健康乾坤：探寻足浴按摩的非凡益处</a><span>2025-09-09</span><i></i></li>
				  
                </ul>
              </div>
            </div>
          </div>
		  
		  
          <div class="c_3_2 wow fadeInRight">
            <div class="n_t clearfix">
              <h4>行业新闻</h4>
              <a href="/news/industry/" class="m">更多&gt;&gt;</a> </div>
            <div class="c3box_2">
              <div class="list_2">
                <ul>
                  
				  <div class="hotnews"> <a href="/news/industry/anm1.html" class="t">偷梁换柱时常发生-上门按摩骗局背后的重重陷阱与防范指南<span>2025-09-18</span></a> </div>
				  
                  <li class="clearfix"><a href="/news/industry/sjhlzd.html">舒筋活络之道上门按摩类型详解与实用技巧宝典</a><span>2025-09-23</span></li>
                  <li class="clearfix"><a href="/news/industry/mshc.html">妙手回春手法尽在指尖游走间，探索您身边的同城按摩秘密</a><span>2025-09-19</span></li>
                  <li class="clearfix"><a href="/news/industry/155.html">通经活络探索养生智慧，开启健康生活新篇章</a><span>2025-09-18</span></li>
                  <li class="clearfix"><a href="/news/industry/xrtff.html">警惕李代桃僵，火眼金睛识破“仙人跳”与正规按摩的云泥之别</a><span>2025-09-18</span></li>
                  <li class="clearfix"><a href="/news/industry/anm1.html">偷梁换柱时常发生-上门按摩骗局背后的重重陷阱与防范指南</a><span>2025-09-18</span></li>
                  <li class="clearfix"><a href="/news/industry/147.html">教您几招辨明正规按摩服务，警惕价格陷阱</a><span>2025-09-10</span></li>
                  <li class="clearfix"><a href="/news/industry/143.html">放松身心，重焕活力：探索按摩的奇妙益处</a><span>2025-09-09</span></li>
                  <li class="clearfix"><a href="/news/industry/146.html">明辨正规按摩与非正规服务，守护您的健康与安心</a><span>2025-09-08</span></li>
                </ul>
              </div>
            </div>
          </div>
		  
		  
          <div class="c_3_2 c_3_3  wow fadeInRight" data-wow-delay="0.3s">
            <div class="n_t clearfix">
             <h4>公司公告</h4>
              <a href="/news/announcement/" class="m">更多&gt;&gt;</a> </div>
            <div class="c3box_2" style="height: 311px;">
              <div class="list_2">
                <ul>
                  
				  <div class="hotnews"> <a href="/news/announcement/ysws.html" class="t">游山玩水 | 摩自在2025年暑假旅游通知！<span>2025-07-21</span></a> </div>
				  
                  <li class="clearfix"><a href="/news/announcement/ysws.html">游山玩水 | 摩自在2025年暑假旅游通知！</a><span>2025-07-21</span></li>
                </ul>
              </div>
            </div>
          </div>
		  
        </div>
      </div>
    </div>
  </div>
</div>

<!-- 友链 -->

<div class="friend-links-section">
    <div class="friend-links-header">
        <h3 class="friend-links-title"><i class="fas fa-link"></i> 友情链接</h3>
        <a href="https://www.szamgs.com/?lxwm/" class="friend-links-more">申请友链 +</a>
    </div>
    <div class="links-container">
        <!--wy-->

        
        <!--lt-->
        <a href="https://www.moyesm.com" class="link-item">摩耶上门</a>
    </div>
</div>



  <div class="footer wow slideInUp">
    <div class="ft-1">
      <div class="g-in clearfix">
        <div class="ft-logo"> 
        
        <div class="aaaa">
        <a href=""><img src="/skin/images/logo_f.png" alt=""></a>
        </div>
        
        </div>
        <div class="ft-nav clearfix">
          
		  <dl>
            <dt><a href="/service/">上门按摩</a></dt>
            <p class='footer-sub sub-box'>
            </p>
          </dl>
		  
		  <dl>
            <dt><a href="/settle-in/">入驻</a></dt>
            <p class='footer-sub sub-box'>
            <dd><a href="/settle-in/technician/">技师</a></dd>
            </p>
          </dl>
		  
		  <dl>
            <dt><a href="/news/">新闻资讯</a></dt>
            <p class='footer-sub sub-box'>
            <dd><a href="/news/headlines/">公司头条</a></dd>
            <dd><a href="/news/industry/">行业新闻</a></dd>
            <dd><a href="/news/announcement/">公司公告</a></dd>
            </p>
          </dl>
		  
		  <dl>
            <dt><a href="/about-us/">关于我们</a></dt>
            <p class='footer-sub sub-box'>
            <dd><a href="/about-us/Introduction/">公司简介</a></dd>
            <dd><a href="/about-us/qualification/">企业资质</a></dd>
            <dd><a href="/about-us/course/">公司历程</a></dd>
            </p>
          </dl>
		  
        </div>
        <div class="ft-contact">
            
        <div class="bbbb">
          <p class="p1">400-993-0698</p>
         <!-- <p class="p3"></p>
          <p class="p2">广东省深圳市福田区深南中路国际科技大厦38楼</p>-->
        </div>
          
        </div>
        <div class="ft-qrcode"> 
        
        <div class="cccc">
        <img class="wxm" src="/skin/images/ewm.jpg" width="99" alt="" > <span>公 众 号</span> 
        </div>
        </div>
      </div>
    </div>

    <div class="ft-2" data-wow-delay="0.5s">
      <div class="g-in clearfix">
        <div class="ft-copy" style="letter-spacing: 1px;">© 深圳市芙蓉掠月网络科技有限公司 版权所有  <a href="https://beian.miit.gov.cn/#/Integrated/index" target="_blank" rel="nofollow">粤ICP备2024332422号</a></div>
        <div class="ft-ibw" style="letter-spacing: 2px;">
            北京，上海，深圳，广州，杭州，南京，苏州，无锡，成都，重庆，青岛，天津等全国城市均已开通上门按摩、同城按摩、24小时上门服务</div>
      </div>
    </div>
  
  </div>
  
  <!--右侧悬浮客服 
<link href="/skin/css/kefu.css" rel="stylesheet">
<ul class="right_nav">
  <!--QQ客服
  <li>
    <div class="iconBox oln_ser"> <img src='/skin/images/rnqq.png'>
      <h4>在线咨询</h4>
    </div>
    <div class="hideBox">
      <div class="hb">
        <h5>QQ在线</h5>
        <div class="qqtalk"> <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=253566218&site=qq&menu=yes"> <span><img src="/skin/images/online.png"></span>
          <p>197536136</p>
          </a> </div>
      </div>
    </div>
  </li>

  <li>
    <div class="iconBox phe_num"> <img src='/skin/images/rncall.png'>
      <h4>联系电话</h4>
    </div>
    <div class="hideBox">
      <div class="hb">
       <h5>拨打热线</h5>
        <p>4009930698</p>
      </div>
    </div>
  </li>

    <li>
    <div class="iconBox phe_num"> <img src='/skin/images/rncall2.png'>
      <h4>商务电话</h4>
    </div>
    <div class="hideBox">
      <div class="hb">
      <h5>拨打热线</h5>
        <p>13262818198</p>
      </div>
    </div>
  </li>


  <li>
    <div class="iconBox to_msg"> <a href="/?lxwm/"><img src='/skin/images/rnmsg.png'></a>
	  <a href="/?lxwm/"><h4 color="fff">预约上门</h4></a>
    </div>
  </li>
    <li>
    <div class="iconBox"> <img src='/skin/images/rnphone.png'>
      <h4>公众号&nbsp;&nbsp;</h4>
    </div>
    <div class="hideBox">
      <div class="hb">
      <h5>摩自在</h5>
        <img src='/skin/images/weixin.jpg'> </div>
    </div>
  </li>
  <li>
    <div class="iconBox top1"> <img src='/skin/images/rntop.png'>
      <h4>回到顶部</h4>
    </div>
  </li>
</ul>
<script type="text/javascript" src='/skin/js/kefu.js'></script> 
 --> 



<script>
	window.onload = function(){
		if($(window).width() > 1000){
			var xx = $('.c3box').height()
			$('.c3box_2').height(xx)
		}
		if($(window).width() > 1050){
			var ftdlHeight = $('.ft-nav dl').height();
			$('.ft-logo').height(ftdlHeight);
			$('.ft-contact').height(ftdlHeight);
		}
		var bannerHeight = $('#banner').height();
		var headerHeight = $('.header').height();
		$('#banner').css('top', headerHeight);
	}
	if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))){
		new WOW().init();
	};
</script> 
</body>
</html>