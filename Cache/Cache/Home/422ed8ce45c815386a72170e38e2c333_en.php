<?php if (!defined('THINK_PATH')) exit(); if(!$empty) : ?>
<!DOCTYPE html>
<html>
<head lang="en">
	<?php if('Kecheng'==$module) : ?>
		<?php if('list_sid'==$template) : ?>
			<?php $schoolInfo=M('school')->where("id=$_GET[p]")->find();?>
			<?php if($schoolInfo) : ?>
				<?php if(!empty($schoolInfo['seo_d'])) : ?>
					<meta name="description" content="<?php echo trim($schoolInfo['seo_d']); ?>">
				<?php else :?>
					<?php if($seo_description) : ?><!-- tdk最新课程页面规则-->
						<meta name="description" content="<?php echo ($seo_description); ?>">
					<?php else :?>
						<meta name="description" content="<?php echo trim(trim(isset($schoolid)?$schoolid['title']:'').'怎么样,'.trim(isset($schoolid)?$schoolid['title']:'').'课程列表', ' ,，tnr x0B'); ?>">
					<?php endif;?>
				<?php endif;?>
				<?php if(!empty($schoolInfo['seo_k'])) : ?>
					<meta name="keywords" content="<?php echo trim($schoolInfo['seo_k'],' ,，tnr x0B'); ?>">
				<?php else :?>
					<?php if($seo_keywords) : ?><!-- tdk最新课程页面规则-->
						<meta name="keywords" content="<?php echo ($seo_keywords); ?>">
					<?php else :?>
						<meta name="keywords" content="<?php echo trim(trim(isset($schoolid)?$schoolid['title']:'').'课程,'.trim(isset($schoolid)?$schoolid['title']:'').'课程价格'); ?>">
					<?php endif;?>
				<?php endif;?>
			<?php else :?>
				<meta name="description" content="<?php echo trim(trim(isset($schoolid)?$schoolid['title']:'').'怎么样,'.trim(isset($schoolid)?$schoolid['title']:'').'课程列表', ' ,，tnr x0B'); ?>">
				<meta name="keywords" content="<?php echo trim(trim(isset($schoolid)?$schoolid['title']:'').'课程,'.trim(isset($schoolid)?$schoolid['title']:'').'课程价格'); ?>">
			<?php endif;?>
		<?php elseif('show'==$action_name): ?>
			<?php if($school_id) $schoolInfo=M('school')->where("id=$school_id")->find();?>
			<?php if(!empty($keywords)) : ?>
				<meta name="keywords" content="<?php echo ($keywords); ?>">
			<?php else :?>
				<meta name="keywords" content="<?php echo ($seo_keywords); ?>">
			<?php endif;?>
			<?php if(!empty($description)) : ?>
				<meta name="description" content="<?php echo ($description); ?>">
			<?php else :?>
				<meta name="description" content="<?php echo trim($areaName.trim(isset($schoolid)?$schoolid['title']:'').trim($seo_description), ' ,，tnr x0B'); ?>">
			<?php endif;?>
		<?php else :?><!-- tdk行业页面规则-->
			<meta name="description" content="<?php echo ($seo_description); ?>">
			<meta name="keywords" content="<?php echo ($seo_keywords); ?>">

		<?php endif;?>
	<?php elseif('School'==$module && 'list'==$template): ?>
		<?php $schoolInfo=M('school')->where("id=$_GET[p]")->find();?>
		<?php if($schoolInfo) : ?>
			<?php if(!empty($schoolInfo['seo_index_d'])) : ?>
				<meta name="description" content="<?php echo trim($schoolInfo['seo_index_d'],' ,，tnr x0B'); ?>">
			<?php else :?>
				<meta name="description" content="<?php echo ($seo_description); ?>">
			<?php endif;?>
			<?php if(!empty($schoolInfo['seo_index_k'])) : ?>
				<meta name="keywords" content="<?php echo trim($schoolInfo['seo_index_k'],' ,，tnr x0B'); ?>">
			<?php else :?>
				<meta name="keywords" content="<?php echo ($seo_keywords); ?>">
			<?php endif;?>
		<?php else :?>
			<meta name="description" content="<?php echo trim(isset($schoolid)?$schoolid['title']:'').$seo_description;?>">
			<meta name="keywords" content="<?php echo trim(isset($schoolid)?$schoolid['title']:'').$seo_keywords;?>">
		<?php endif;?>
	<?php else :?>
	<?php $areaName = ''; ?>
	<meta name="description" content="<?php echo trim(isset($schoolid)?$schoolid['title']:'').$seo_description;?>">
	<meta name="keywords" content="<?php echo trim(isset($schoolid)?$schoolid['title']:'').$seo_keywords;?>">
	<?php endif;?>
	<meta charset="utf-8">
	<meta name="renderer" content="webkit"><!--360 极速模式-->
	<link rel="shortcut icon" href="/Apps/Tpl/Home/Default/Public/images/favicon.ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<?php echo ($t_gas ? $t_gas : ''); ?>
	<title>
		<?php if ('Kecheng'==$module && 'list_sid'==$template && $schoolInfo) { if(!empty($schoolInfo['seo_t'])) { echo trim($schoolInfo['seo_t']," ,，tnr x0B"); }elseif(!empty($schoolInfo['title'])){ if(!empty($seo_title)){ echo $seo_title; }else{ $stitle = trim($schoolInfo['title']); $title = $stitle.'课程_'.$stitle.'培训班/辅导班'.'_'.$site_name; echo $title; } }else { echo trim($areaName.trim(isset($schoolid)?$schoolid['title']:'').$seo_title," ,，tnr x0B"); } }elseif ('School'==$module && 'list'==$template && $schoolInfo){ if(!empty($schoolInfo['seo_index_t'])) { echo trim($schoolInfo['seo_index_t']," ,，tnr x0B"); }else { if(!empty($seo_title)){ echo $seo_title; }else{ echo trim($areaName.trim(isset($schoolid)?$schoolid['title']:'').'_'.$schoolid['address'].'培训培训机构'," ,，tnr x0B"); } } }else { echo $seo_title; } ?>
	</title>
	<link href="/Apps/Tpl/Home/Default/Public/css/index.css" rel="stylesheet" type="text/css" />
	<link href="/Apps/Tpl/Home/Default/Public/css/common_header_footer.css" rel="stylesheet" type="text/css" />
	<link href="/Apps/Tpl/Home/Default/Public/css/common_base.css" rel="stylesheet" type="text/css" />
	<link href="/Apps/Tpl/Home/Default/Public/css/set2.css" rel="stylesheet" type="text/css" />
	<link href="/Apps/Tpl/Home/Default/Public/css/preview.css" rel="stylesheet" type="text/css" />
	<link href="/Apps/Tpl/Home/Default/Public/css/modern-menu.css" rel="stylesheet" type="text/css" />
	<link href="/Apps/Tpl/Home/Default/Public/css/mian.css" rel="stylesheet" type="text/css" />
	<!--[if lt IE 9]>
	<script src="../Public/js/html5.js"></script>
	<script src="../Public/js/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="../Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="../Public/js/jquery-powerSwitch.js"></script>
	<script type="text/javascript" src="../Public/js/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="../Public/js/scroll.js"></script>
	<script type="text/javascript" src="../Public/js/jquery.transit.min.js"></script>
	<script type="text/javascript" src="../Public/js/jquery.modern-menu.min.js"></script>
	<script type="text/javascript" src="../Public/js/common.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.theme9 a span.active {background-color: #179050;}
</style>
</head>
<body>

<div class="header">
	<!--logo搜索-->
	<div class="top_nav">
		<div class="w1100 auto clearfix">
			<div class="top_logo">
				<a class="l" href="/"><img src="<?php echo ($logo); ?>" alt="79招生网" /></a>
				<?php if('City'!=$module_name) : ?>
				<div class="top_qie">
					<p>东莞</p>
					<a href="/city">切换城市</a>
				</div>
				<?php endif;?>
			</div>
			<!--top-->
			<div class="header_nav">
				<ul>
					<li class=""><a rel="nofollow" href="/contact"><img src="../Public/images/head_tel.jpg" width="22" height="22" alt="79招生网业务联系" /> 联系我们</a></li>
					<?php if($_COOKIE['YP_username']) : ?>
  				<li style="color:#529b12; font-weight: bold;"><a href="/User/Index"><?php echo ($user["username"]); ?></a></li>
  				<?php elseif('City'!=$module): ?>
  				<li class="">
						<a rel="nofollow" href="/User/Login">登录</a>
					</li>
					<li class="">
						<a rel="nofollow" href="/User/Register/" >注册</a>
					</li>
  				<?php endif;?>
				<?php if('City'!=$module) : ?>
					<li>
						<a href="/new/" >新闻中心</a>
					</li>
					<?php $r = M('Block')->where(" 1  and lang=2 and pos='weima' ")->find(); if ($r):?><li class="sj">
						<a rel="nofollow" href="javascript:void(0);"></a>
						<div class="my_sj">
							<a class="my_sj1" rel="nofollow" href="javascript:void(0);"></a>
							<div class="my_sj_down" style="height: 125px;">
								<img src="<?php echo ($r["image1"]); ?>" alt="79招生网微信公众号" style="width: 128px;height: 126px">
							</div>
						</div>
					</li>
					<li class="wx">
						<a rel="nofollow" href="javascript:void(0);"></a>
						<div class="my_wx">
							<a class="my_wx1" rel="nofollow" href="javascript:void(0);"></a>
							<div class="my_wx_down">
								<img src="<?php echo ($r["image1"]); ?>" alt="79招生网微信公众号" style="margin-top: 15px; margin-left: 22px; width: 105px;height: 104px;">
								<div class="wx_down">
									<div class="wx_down_gdfw">
										<?php echo ($r["content"]); ?>
									</div>
								</div>
							</div>
						</div>
					</li>
				<?php endif; endif;?>
				</ul>
			</div>
			<!--top end-->
			<div class="msearch_box">
				<a class="btm ct" href="<?php if(!$_COOKIE['YP_username']) : ?>/User/Register/<?php else :?>/User/Index<?php endif;?>">免费发布课程</a>

				<div class="top_search">
					<form method="GET" action="/index.php?" class="in-module">
						<input type="hidden" id=""  name="m" value="Search"/><?php if( APP_LANG) : ?><input type="hidden" name="l" value="<?php echo LANG_NAME;?>" /><?php endif;?>

						<div class="search_course">
							<select id="module" name="module" onchange="" class="">
								<option selected="selected" value="Kecheng">培训课程</option>
								<option value="School">培训学校</option>
								<option  value="New">培训资讯</option>
							</select>
						</div>
						<div class="search_img"></div>
						<p class="search_input">
							<input type="text" name="keyword" id="" class="input-text" value="<?php echo ($keyword); ?>" />
						</p>
						<p class="search_btn">
							<button id="" type="submit">搜索</button>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--logo搜索end-->
	<div class="clear"></div>
	<!--导航-->
	<div class="nav_wrap clear">
		<div class="nav w1100 auto fix">
			<div class="nav_right1 fw1">
				<ul class="modern-menu theme9">
					<?php $k=0;foreach($Categorys as $key=>$r):if(1=="" && $r['isfootermenu']==0){ continue; }if( $r['ismenu']==1 && intval(0)==$r["parentid"] ) :++$k;?><li class="">
						<a href="<?php echo ($r["url"]); ?>"><span <?php if($bcid==$r['id']) : ?>class="active"<?php endif;?>><?php echo ($r["catname"]); ?></span></a>
						<?php if('/' != $r['url']) : ?>
						<ul>
							<?php $kd=0;foreach($Categorys as $key=>$rd):if(1=="" && $rd['isfootermenu']==0){ continue; }if( $rd['ismenu']==1 && intval($r[id])==$rd["parentid"] ) :++$kd;?><li>
								<a href="<?php echo ($rd["url"]); ?>"><span><?php echo ($rd["catname"]); ?></span></a>
							</li><?php endif; endforeach;?>
						</ul>
						<?php endif;?>
					</li><?php endif; endforeach;?>
				</ul>
			</div>
			<script type="text/javascript">
				$(".modern-menu").modernMenu();
			</script>
		</div>

	</div>
</div>
<!--导航end-->
		<div class="" id="p_page">
	<div class="mian" id="security">
		<div class="cons ovef">
			<?php if($catid==0) : ?>
<?php  $_result=M('Slide_data')->where(" status=1 and  fid=3  and lang=2")->order(" listorder ASC ,id DESC ")->limit("5")->select();;if ($_result): $i=0;foreach($_result as $key=>$r):$i++;$mod = ($i % 2 );parse_str($r['data'],$r['param']);?>
<li>
    <a href="/security/" target="_blank"><img src="<?php echo ($r['pic']); ?>" alt="<?php echo ($city); ?>79招生网<?php echo ($r["title"]); ?>" /></a>
</li>
<?php endforeach; endif;?>
<?php else :?>
<ul>
    <?php  $_result=M('Slide_data')->where(" status=1 and  fid=3  and lang=2")->order(" listorder ASC ,id DESC ")->limit("5")->select();;if ($_result): $i=0;foreach($_result as $key=>$r):$i++;$mod = ($i % 2 );parse_str($r['data'],$r['param']);?>
    <li class="ovef wl<?php echo ($r["id"]); ?>">
        <div class="text">
            <p><?php echo ($r["title"]); ?></p>
            <div name=""><?php echo ($r["description"]); ?></div>
        </div>
    </li>
    <?php endforeach; endif;?>
</ul>
<?php endif;?>
		</div>
		
	</div>
	
	
</div>
<style>
	#security{width: 1280px;}
	#security .cons{background:url(../Public/images/1_03.jpg) no-repeat center;min-height: 1264px;margin-top: 20px;}
	#security .cons p{font-size: 28px;color: #f39e19;line-height: 30px;padding-bottom: 10px;}
	#security .cons ul{padding-top: 150px;}
	#security .cons .text div{font-size: 16px;color: #333;line-height: 30px;min-height: 160px;}
	#security .cons .text{width: 505px;box-sizing: border-box;}
	#security .wl19 .text,#security .wl21 .text,#security .wl23 .text{float: right;}
	#security .cons .wl20 p{color: #14a4e3;}
	#security .cons .wl21 p{color: #e73d78;}
	#security .cons .wl22 p{color: #68b829;}
	#security .cons .wl23 p{color: #40b477;}
	#security .wl21 .text{padding: 10px 0 0 0 ;}
	#security .wl22 .text{padding: 50px 0 0 300px;margin-left: 50px;}
	#security .wl22 .text div{min-height: 140px;}
	#security li.ovef:nth-child(1) .text{float: right;}
	#security li.ovef:nth-child(2) .text{float: left;}
	#security li.ovef:nth-child(3) .text{float: right;}
	#security li.ovef:nth-child(4) .text{float: left;margin-left: 0;}
	#security li.ovef:nth-child(5) .text{float: right;}
	#security li.ovef:nth-child(4) .text div {width: 284px;}
</style>

<!--底部-->
<div class="footer mt20 clear">
	<div class="site_map">
		<div class="site_map_con site_map_con w1100 auto">
			<ul class="inline_box">
				<li class="inline_any" style="background:#fff;padding:8px;width: 112px;text-align: center;margin-right: 111px;">
					<?php $r = M('Block')->where(" 1  and lang=2 and pos='weima' ")->find(); if ($r):?><p><img src="<?php echo ($r["image1"]); ?>" alt="79招生网微信公众号" /></p><?php endif;?>
					<p class="" style="color:#666;">让学习变得更容易</p>
				</li>
				<?php $k=0;foreach($Categorys as $key=>$r):if(1=="" && $r['isfootermenu']==0){ continue; }if( $r['ismenu']==1 && intval(39)==$r["parentid"] ) :++$k;?><li class="inline_any">
					<h3 class="site_map_title"><?php echo ($r["catname"]); ?></h3>
					<?php if($r[child]) : ?>
					<?php $kd=0;foreach($Categorys as $key=>$rd):if(1=="" && $rd['isfootermenu']==0){ continue; }if( $rd['ismenu']==1 && intval($r[id])==$rd["parentid"] ) :++$kd;?><p>
						<a rel="nofollow" target="_bank" href="<?php echo ($rd["url"]); ?>"><?php echo ($rd["catname"]); ?></a>
					</p><?php endif; endforeach;?>
					<?php endif;?>
				</li><?php endif; endforeach;?>
			</ul>
		</div>
	</div>
	<div class=" clear"></div>
	<div class="lxwm tc mt10 w1100 auto">
		<ul>
			<li style="font-size:14px;"><p>
	<span style="font-family:微软雅黑;text-align:center;white-space:normal;"><span style="color:#FFFFFF;font-size:14px;text-align:center;white-space:normal;background-color:#40B477;font-family:微软雅黑;">79招生网 版权所有 </span><span white-space:normal;background-color:#ffffff;"="" style="text-decoration-line: none; color: rgb(255, 255, 255); padding: 1px 0px; outline: 0px; font-size: 14px; text-align: center; white-space: normal; background-color: rgb(64, 180, 119); font-family: 微软雅黑;">备案/许可证编号为：<a rel="nofollow" href="http://beian.miit.gov.cn" target="_blank">粤ICP备</a></span><a rel="nofollow" href="http://beian.miit.gov.cn" target="_blank"><span t="7" data="17158495" white-space:normal;background-color:#ffffff;border-bottom:1px="" dashed="" #cccccc;z-index:1;position:static;"="" style="text-decoration-line: none; color: rgb(255, 255, 255); padding: 1px 0px; outline: 0px; font-size: 14px; text-align: center; white-space: normal; background-color: rgb(64, 180, 119); font-family: 微软雅黑;">17158495</span><span white-space:normal;background-color:#ffffff;"="" style="text-decoration-line: none; color: rgb(255, 255, 255); padding: 1px 0px; outline: 0px; font-size: 14px; text-align: center; white-space: normal; background-color: rgb(64, 180, 119); font-family: 微软雅黑;">号</span></a></span> 
</p>
<p>
	Copyright &copy; 2017 All rights reserved by 79招生网
</p> | Designed by site.nuo.cn</li>
		</ul>
	</div>

</div>

<!-- 右侧客服 -->
<style>
	.pan_right{
		    width: 160px;
		    margin: 0px auto;
		    padding-bottom: 16px;
		    position: fixed;
		    right: 0px;
		    top: 16%;
		    background: #FFF;
		    border: 1px solid #e5e5e5;
		    border-radius: 5px;
	}
	
	.pan_div h2{
		padding: 3px 0;
		margin: 10px 0;
		font-size: 14px;
		border-bottom: 1px solid #e5e5e5;
		border-top: 1px solid #e5e5e5;
		font-weight: normal;
		text-align: center;
	}
	.pan_div:first-child h2{border-top: none;}
	.pan_qq img{vertical-align: middle;}
	.pan_qq a{text-decoration: none;color: #04529a;font-size: 14px;}
	.pan_tel{font-size: 16px;text-align: center;font-weight: bold;color: #ff6600;}
	
	.pan_img img{width: 120px;height: 120px;}
	.pan_img,.pan_qq{text-align: center;}
</style>

<div class="pan_right">
	<div class="pan_div">
		<h2>QQ客服</h2>
		<div class="pan_qq">
			<a href="http://wpa.qq.com/msgrd?v=3&uin=<p>
	2950079739
</p>&site=qq&menu=yes" target="_blank">
				<img src="http://www.91soker.com/template/theme/images/qq.png" alt="<?php echo ($city); ?>79招生网招生QQ客服"/>
				<p>
	2950079739
</p>
			</a>
		</div>
	</div>
	
	<div class="pan_div">
		<h2>联系电话</h2>
		<div class="pan_tel"><p>
	<span style="font-size:14px;color:#333333;">18924037954</span> 
</p>
<p>
	<span style="font-size:10px;color:#333333;">（微信同号）</span> 
</p></div>
	</div>
	
	
	<div class="pan_div">
		<h2>微信公众号</h2>
		<div class="pan_img">
			<p>
	<img src="/Uploads/201801/5a57506e7156a.jpg" alt="" /> 
</p>
<p>
	79招生网微信公众号
</p>
		</div>
	</div>
</div>





<!--底部 end-->
<script type="text/javascript">
	$(function () {
		$('#myhouxue').mouseenter(function () {
			$('.my_hx').fadeIn(100);
		}).mouseleave(function () {
			$('.my_hx').fadeOut(100);
		});
		$('#webguide').mouseenter(function () {
			$('.my_wz').fadeIn(100);
		}).mouseleave(function () {
			$('.my_wz').fadeOut(100);
		});
		$('.sj').mouseenter(function () {
			$('.my_sj').fadeIn(100);
		}).mouseleave(function () {
			$('.my_sj').fadeOut(100);
		});
		$('.wx').mouseenter(function () {
			$('.my_wx').fadeIn(100);
		}).mouseleave(function () {
			$('.my_wx').fadeOut(100);
		});

		/*右侧官方微信、最新动态 */
		$('#dynamic').find('#dynamic_up a').click(function () {
			$('#dynamic').find('#dynamic_up a').attr('class', '');
			$('#dynamic').find('.dynamic_hide').css('display', 'none');
			$(this).attr('class', 'dynamic_up_one');
			$('#dynamic').find('.dynamic_hide').eq($(this).index()).css('display', 'block');
		});

	});
	//左侧列表10个
	$(".blockLUl li:first-child").addClass('current_left');
	$(".blockLUl li:first-child").find('.f14').addClass('current_link');
	$(".blockLUl li").mouseover(function () {
		$(this).siblings().removeClass('current_left');
		$(this).siblings().find('.f14').removeClass('current_link');
		$(this).addClass('current_left');
		$(this).find('.f14').addClass('current_link');
	});
	//右侧列表8个
	$(".blockRUl li:first-child").addClass('current_right');
	$(".blockRUl li").mouseover(function () {
		$(this).siblings().removeClass('current_right');
		$(this).addClass('current_right');
	});
	// 左侧分类
	$('.small_type li').mouseover(function () {
		$(this).addClass('current');
	}).mouseleave(function () {
		$(this).removeClass('current');
	});
	//兼容性处理，勿删
	$('.small_type').find('ul li').mouseover(function () {

	});
	$('#submitSearch').click(function () {
		$("#search").submit();
	});
	$('#search .search_input input').focus(function () {
		$(this).attr('placeholder', '');
	}).blur(function () {
		$(this).attr('placeholder', '请输入课程名字，学校名称，地址');
	});
	// 图片轮换
	$("#adSlideBtn a").powerSwitch({
		autoTime: 4000,
		animation: "translate",
		classAdd: "tb_slide_on",
		classRemove: "tb_slide_a",
		classPrefix: "tb_slide",
		container: $("#adSlideBox"),
		onSwitch: function (image) {
			if (!image.attr("src")) {
				image.attr("src", image.attr("data-src"));
			}
		}
	});

	$('.search_course').mouseenter(function () {
		$('.search_course_down').fadeIn(100);
	}).mouseleave(function () {
		$('.search_course_down').fadeOut(100);
	});
	$('.sj').mouseenter(function () {
		$('.my_sj').fadeIn(100);
	}).mouseleave(function () {
		$('.my_sj').fadeOut(100);
	});
	$('.wx').mouseenter(function () {
		$('.my_wx').fadeIn(100);
	}).mouseleave(function () {
		$('.my_wx').fadeOut(100);
	});
	$('.search_course a').click(function (e) {
		var se_value = $(this).attr('data');
		$("input[name='type']").val(se_value);


		var buffer = $('.visible_text').html();
		var text = $(this).html();
		$('.visible_text').html(text);
		$(this).html(buffer);
		var buffer1 = $('.visible_text').attr('data');
		$(this).attr('data', buffer1);
		$('.visible_text').attr('data', se_value);
		$('.search_course_down').hide();

	});

</script>
<script type="text/javascript" src="../Public/js/common.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?c3dbbebf1a09edcf81f1c610ca25a91a";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<?php echo ($b_gas ? $b_gas : ''); ?>
</body>
</html>

<?php else :?>
<div class="" id="p_page">
	<div class="mian" id="security">
		<div class="cons ovef">
			<?php if($catid==0) : ?>
<?php  $_result=M('Slide_data')->where(" status=1 and  fid=3  and lang=2")->order(" listorder ASC ,id DESC ")->limit("5")->select();;if ($_result): $i=0;foreach($_result as $key=>$r):$i++;$mod = ($i % 2 );parse_str($r['data'],$r['param']);?>
<li>
    <a href="/security/" target="_blank"><img src="<?php echo ($r['pic']); ?>" alt="<?php echo ($city); ?>79招生网<?php echo ($r["title"]); ?>" /></a>
</li>
<?php endforeach; endif;?>
<?php else :?>
<ul>
    <?php  $_result=M('Slide_data')->where(" status=1 and  fid=3  and lang=2")->order(" listorder ASC ,id DESC ")->limit("5")->select();;if ($_result): $i=0;foreach($_result as $key=>$r):$i++;$mod = ($i % 2 );parse_str($r['data'],$r['param']);?>
    <li class="ovef wl<?php echo ($r["id"]); ?>">
        <div class="text">
            <p><?php echo ($r["title"]); ?></p>
            <div name=""><?php echo ($r["description"]); ?></div>
        </div>
    </li>
    <?php endforeach; endif;?>
</ul>
<?php endif;?>
		</div>
		
	</div>
	
	
</div>
<style>
	#security{width: 1280px;}
	#security .cons{background:url(../Public/images/1_03.jpg) no-repeat center;min-height: 1264px;margin-top: 20px;}
	#security .cons p{font-size: 28px;color: #f39e19;line-height: 30px;padding-bottom: 10px;}
	#security .cons ul{padding-top: 150px;}
	#security .cons .text div{font-size: 16px;color: #333;line-height: 30px;min-height: 160px;}
	#security .cons .text{width: 505px;box-sizing: border-box;}
	#security .wl19 .text,#security .wl21 .text,#security .wl23 .text{float: right;}
	#security .cons .wl20 p{color: #14a4e3;}
	#security .cons .wl21 p{color: #e73d78;}
	#security .cons .wl22 p{color: #68b829;}
	#security .cons .wl23 p{color: #40b477;}
	#security .wl21 .text{padding: 10px 0 0 0 ;}
	#security .wl22 .text{padding: 50px 0 0 300px;margin-left: 50px;}
	#security .wl22 .text div{min-height: 140px;}
	#security li.ovef:nth-child(1) .text{float: right;}
	#security li.ovef:nth-child(2) .text{float: left;}
	#security li.ovef:nth-child(3) .text{float: right;}
	#security li.ovef:nth-child(4) .text{float: left;margin-left: 0;}
	#security li.ovef:nth-child(5) .text{float: right;}
	#security li.ovef:nth-child(4) .text div {width: 284px;}
</style>
<?php endif;?>