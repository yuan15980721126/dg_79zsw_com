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
		<?php
 if($school_id){ $schoolid=M('school')->where("id=$school_id")->find(); $userid=M('user')->where("schoolid=".$schoolid['id'])->find(); } $kcorder=M('kecheng')->where("catid=$catid AND id<>$id")->order('guanzhu desc')->limit('5')->select(); $sql = M()->getLastSql(); $review_list = M('View')->where("viewid=".$id." and status=1")->order('listorder desc')->limit('255')->select(); $tuijain = M('kecheng')->where("school_id=$school_id AND id<>$id")->order('guanzhu desc')->limit('4')->select();; ?>
<style type="text/css">
	#tuijian {
		width: 800px;
		margin: 15px 45px 5px;
		height: 70px;
	}
	#tuijian li {
		list-style:none; /* 将默认的列表符号去掉 */
		margin:0; /* 将默认的外边距去掉 */
	}

	#tuijian a{
		display: block;
		float: left;
		width: 200px;
		border: none;
		font-size: 16px;
		padding: 8px 98px 20px;
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;

	}
</style>

<div id="artycle">
	<div class="main course" style="overflow: hidden;">
		<div class="m_left">

			<div class="course-info">
				<div class="location">
					<a href="/">首页</a> &gt <YP:catpos  catid="catid" space=" > " />

				</div>
				<div class="infopic"><img src="<?php if($scpic) : echo ($scpic); else : echo ($schoolid["file"]); endif;?>" alt="<?php echo ($schoolid["title"]); ?>"></div>
				<div class="info">
					<h1><?php echo ($title); ?></h1>
					<ul>
						<li style="overflow: hidden;line-height: 22px;max-height: 86px;"><strong>授课对象：</strong><?php echo ($dx); ?></li>
						<li><strong>授课地址：</strong><?php echo ($address); ?></li>
						<li><strong>授课学校：</strong><?php echo ($schoolid["title"]); ?></li>
						<li><strong>关注人数：</strong><?php echo ($guanzhu); ?></li>
					    <li><strong>网上报名：</strong><?php echo ($pc); ?></li>
						<li><strong>线下原价：</strong><?php echo ($price); ?></li>
					
					</ul>
					<!--<div class="price"><strong>课程价格：</strong><s></s><b>网上报名<?php echo floatval($pc);?>&nbsp;&nbsp;&nbsp;线下原价<?php echo floatval($price);?></b></div>-->
					<div class="course-bar">
						<a href="#apply" class="yuyue">网上报名</a>
					</div>
				</div>
			</div>
			<div class="col-kc active">
				<div class="kecheng">
					<div class="title">
						<ul>
							<li class="active">课程详情</li>
							<!--<li>学校环境</li>
							<li>课程评价</li>-->
						</ul>
						<div class="bdsharebuttonbox">
							<a href="#" class="bds_more" data-cmd="more"></a>
							<a href="#" class="bds_qzone" data-cmd="qzone"></a>
							<a href="#" class="bds_tsina" data-cmd="tsina"></a>
							<a href="#" class="bds_tqq" data-cmd="tqq"></a>
							<a href="#" class="bds_renren" data-cmd="renren"></a>
							<a href="#" class="bds_weixin" data-cmd="weixin"></a>
						</div>
					</div>
					<div class="bd">
						<div class="kc-bd active">
							<div class="endtext">
								<?php echo ($content); ?>
							</div>
							<h2 style="margin-left: 50px;">更多课程推荐：</h2>
							<ul id="tuijian">
								<?php if(is_array($tuijain)): $k = 0; $__LIST__ = $tuijain;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($k % 2 );++$k;?><li><a href="/applications/show/<?php echo ($r["id"]); ?>.html" title="<?php echo ($r["title"]); ?>"><?php echo ($r["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

							</ul>

						</div>

						<!---->
						<!--/kc-bd-->
						<div class="kc-bd">
							<div class="endtext">
								<?php echo ($schoolid["description"]); ?>
							</div>
						</div>
						<div class="kc-bd ">
							<div class="comment" id="reviews">
								<form action="<?php echo URL('User-Index/addview');?>" method="post" name="reviews" onsubmit="return review();">
									<input name="viewid" type="hidden" value="<?php echo ($id); ?>">
									<input name="title" type="hidden" value="<?php echo ($title); ?>">
									<div class="post">
										<div class="textarea">
											<textarea name="content" required="" maxlength="150"></textarea>
										</div>
										<div class="btns">
											<div class="face">
												<label>
                            <input name="score" type="radio" value="1">
                            1星</label>
												<label>
                            <input name="score" type="radio" value="2">
                            2星</label>
												<label>
                            <input name="score" type="radio" value="3">
                            3星</label>
												<label>
                            <input name="score" type="radio" value="4">
                            4星</label>
												<label>
                            <input name="score" type="radio" value="5" checked="">
                            5星</label>
												<div class="face-ico"></div>
											</div>
											<p></p>
											<button type="submit">发表评论</button>
										</div>
									</div>
								</form>
								
								<div class="comment-list" id="preview_list">
									<ul>
										<?php if(is_array($review_list)): $k = 0; $__LIST__ = $review_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($k % 2 );++$k;?><li class="ovef">
											<div class="fl ct viewone">
												<div class="img ">
													<!--查询用户信息-->
													<?php  if($r['ruserid']){ $user_man = M('user')->where("id=".$r['ruserid'])->find(); } ?>
													<img src="<?php echo (thumb2($user_man["file"],60,60,3)); ?>"/>
												</div>
												<p class="diandiandian"><?php echo ($user_man["username"]); ?></p>
											</div>
											<div class="fl viewtwo">
												<p class="p1"><span>评分：</span><em class="lstar" title=""><i  title="<?php echo ($r["score"]); ?>"></i></em></p>
												<p class="p2"><span>内容：</span><i><?php echo ($r["content"]); ?></i></p>
											</div>
											<div class="fr viewtime">
												<?php echo (todate($r["createtime"],'Y-m-d')); ?>
											</div>
										</li><?php endforeach; endif; else: echo "" ;endif; ?>
										
										<?php if(!$review_list) : ?>
										<li class=" pd ct f18">
											暂无评论！
										</li>
										<?php endif;?>
									</ul>
								</div>
							</div>
							
						</div>
						<P>&nbsp &nbsp &nbsp 79招生网为第三方平台，不会向学员收取任何费用；内容素材如有侵权、虚假不实、违法违规信息等请联系我们 020-26225931。</P>
						<P>&nbsp &nbsp &nbsp 课程信息由培训机构（或其代理）自行发布（或提供），请用户在自辨课程虚实、有效性、及时性时留意以实际授课为准。</P>
						</br>
						</br>
					</div>
					
				</div>
				<div class="new-box baoming">
					<div class="title" id="apply">
						<h3 class="ico-bm">报名咨询</h3><span>&nbsp &nbsp &nbsp &nbsp您好，在此留下您的联系方式，我们将第一时间与您联系！</span>
					</div>
					<form method="post" action="<?php echo URL('User-Post/insert2');?>" id="jg_form" >
						<input type="hidden"  name="catid" value="<?php echo ($catid); ?>" />
						<input type="hidden" id="moduleid" name="moduleid" value="6" />
						<input type="hidden" id="lang" name="lang" value="<?php echo ($langid); ?>" />
					    <input type="hidden" id="title" name="title" value="预约报名" />
						<input type="hidden" name="project" value="<?php echo ($schoolid["title"]); ?>" />
						<input type="hidden" name="tel" value="<?php echo ($userid["mobile"]); ?>" />
						<input type="hidden" name="email" value="<?php echo ($userid["email"]); ?>" />
						<input type="hidden" name="kctitle" value="<?php echo ($title); ?>" />
						<input type="hidden" name="kcid" value="<?php echo ($id); ?>" />
						<ul>
							<li>
								<label>姓名：</label>
								<input name="username" type="text" class="ipt" value="" placeholder="请输入您的称呼" required>
							</li>
							<li>
								<label>手机：</label>
								<input name="telephone" type="number" class="ipt" value="" min="11000000000" max="18999999999" placeholder="请输入手机号码"  required>
							</li>
							<li>
								<label>地址：</label>
								<input name="address" type="text" class="ipt">
							</li>
							<li>
								<label>验证码：</label>
								<input name="verifyCode" type="text" class="ipt yzm" placeholder="请输入验证码" required="">
								<img class="img3" id="verifyImg" src="?g=Home&m=Index&a=verify" onclick="javascript:resetVerifyCode();"  class="checkcode" align="absmiddle" title="点击刷新验证码" >
							</li>
							<!--0814-->
							<li style="display: none;">
								<input type="hidden" name="coupons" value="1">
								<!-- <label>报名编码：</label>
								<select name="coupons" class="ipt">
									<option value="1" selected="selected">使用</option>
									<option value="0">不使用</option>
								</select> -->
							</li>
							<!--0814-->

							<li class="saytext">
								<label>内容：</label>
								<textarea name="content" id="content" placeholder="报名咨询课程请留言" required=""></textarea>
							</li>
							<li class="sub">
								<input type="hidden" name="ckid" value="<?php echo ($id); ?>" class="">
								<input type="submit" value="提交" class="btn">
								<input type="reset" value="重置" class="btn res">
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>
		<div class="side-kc">
			<div class="new-box">
				<div class="title">
					<h3 class="ico-school">学校信息</h3>
				</div>
				<div class="school">
					<div class="name"><b><a href="/school2/<?php echo ($school_id); ?>.html"><?php echo ($schoolid["title"]); ?></a></b><i class="ico ico-rz3"></i></div>
					<p class="lstar" title="4.00"><i style="width:80%;"></i></p>
					<div class="text"></div>
					<h3>学校优势：</h3>
					<div class="school-tags"><?php echo (str_cut($schoolid["description"],100)); ?></div>
				</div>
				<!--/school-->
			</div>
			<!--/box-->
			<div class="new-box">
				<div class="title">
					<h3>同类课程推荐</h3>
				</div>
				<ul class="hot-list">
					<?php if(is_array($kcorder)): $k = 0; $__LIST__ = $kcorder;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($k % 2 );++$k;?><li>
						<i class="n<?php echo ($k); ?>">0<?php echo ($k); ?></i>
						<p>
							<a href="<?php echo ($r["url"]); ?>"><?php echo ($r["title"]); ?></a>
						</p>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="wa">
				<img src="/Uploads/201705/5929409fca920.jpg" alt="" />					
			</div>
			<!--/box-->

		</div>
	</div>
</div>
<script type="text/javascript" src="../Public/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../Public/js/messages_zh.js"></script>
<script type="text/javascript">
//表单认证
$("#jg_form").validate({
    rules: {
    },
    messages: {
      	username:"请输入用户名",
      	telephone:"请输入手机号码",
      	verifyCode:"请输入验证码",
		
    }
});	
//function tijiao(){
// var verifyCode=$('input[name=verifyCode]').val();
// $.ajax({
// 	type:"post",
// 	url:"<?php echo URL('User-Post/insert2');?>",
// 	dataType:"json",
// 	data:{'verifyCode':verifyCode},
// 	success:function(msg){
// 		if(msg==-1){
// 			alert("验证码错误");return false;
// 		}else{
// 			return true;
// 		}
// 	}
// 	
// });	
//}
	function resetVerifyCode(){
	var timenow = new Date().getTime();
	var src = './index.php?g=Home&m=Index&a=verify#'+timenow;
	$('.img3').attr('src',src);
	}
	
	$(document).on('click','.kecheng .title ul li',function(){
		var index = $(this).index();
		$(this).addClass('active').siblings().removeClass('active');
		$('.kecheng .kc-bd').eq(index).addClass('active').siblings().removeClass('active');
	});
	//评论前准备
	function review(){
		var viewid=$('#reviews form input[name=viewid]').val();
		var title=$('#reviews form input[name=title]').val();
		var content=$('#reviews form textarea').val();
		var score=$('#reviews form input:radio:checked').val();
		$.ajax({
		   	type:"post",
		   	url:"<?php echo URL('User-Index/addview');?>",
		   	dataType:"json",
		   	data:{'viewid':viewid,'title':title,'content':content,'score':score},
		   	success:function(msg){
		   		switch(msg){
	                    case "-1":  
	                        alert("您未登陆会员（请先登录并且报名该课程才能评论！）"); 

	                        break;
	                    case "-2":  
	                        alert("您尚未报名该课程（请先登录并且报名该课程才能评论！）"); 
	                        break;  
	                    case "1":  
	                        alert("评论成功！");
	                        break;  
	                    default:  
	                        alert("系统繁忙，请稍后再试");  
	            }
				
		   	}
		});
		return false;
	}
	//评论星星返回
	$(function (){
		$("#preview_list .viewtwo .lstar i").each(function(){
			_this = $(this)
			var star_mub = _this.attr('title');
		    _this.css('width',''+star_mub*20+'%');
		  });
		

	})
</script>
<script>
	window._bd_share_config = {

		"share": {},

	};
	with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
</script>

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
<?php
 if($school_id){ $schoolid=M('school')->where("id=$school_id")->find(); $userid=M('user')->where("schoolid=".$schoolid['id'])->find(); } $kcorder=M('kecheng')->where("catid=$catid AND id<>$id")->order('guanzhu desc')->limit('5')->select(); $sql = M()->getLastSql(); $review_list = M('View')->where("viewid=".$id." and status=1")->order('listorder desc')->limit('255')->select(); $tuijain = M('kecheng')->where("school_id=$school_id AND id<>$id")->order('guanzhu desc')->limit('4')->select();; ?>
<style type="text/css">
	#tuijian {
		width: 800px;
		margin: 15px 45px 5px;
		height: 70px;
	}
	#tuijian li {
		list-style:none; /* 将默认的列表符号去掉 */
		margin:0; /* 将默认的外边距去掉 */
	}

	#tuijian a{
		display: block;
		float: left;
		width: 200px;
		border: none;
		font-size: 16px;
		padding: 8px 98px 20px;
		overflow: hidden;
		white-space: nowrap;
		text-overflow: ellipsis;

	}
</style>

<div id="artycle">
	<div class="main course" style="overflow: hidden;">
		<div class="m_left">

			<div class="course-info">
				<div class="location">
					<a href="/">首页</a> &gt <YP:catpos  catid="catid" space=" > " />

				</div>
				<div class="infopic"><img src="<?php if($scpic) : echo ($scpic); else : echo ($schoolid["file"]); endif;?>" alt="<?php echo ($schoolid["title"]); ?>"></div>
				<div class="info">
					<h1><?php echo ($title); ?></h1>
					<ul>
						<li style="overflow: hidden;line-height: 22px;max-height: 86px;"><strong>授课对象：</strong><?php echo ($dx); ?></li>
						<li><strong>授课地址：</strong><?php echo ($address); ?></li>
						<li><strong>授课学校：</strong><?php echo ($schoolid["title"]); ?></li>
						<li><strong>关注人数：</strong><?php echo ($guanzhu); ?></li>
					    <li><strong>网上报名：</strong><?php echo ($pc); ?></li>
						<li><strong>线下原价：</strong><?php echo ($price); ?></li>
					
					</ul>
					<!--<div class="price"><strong>课程价格：</strong><s></s><b>网上报名<?php echo floatval($pc);?>&nbsp;&nbsp;&nbsp;线下原价<?php echo floatval($price);?></b></div>-->
					<div class="course-bar">
						<a href="#apply" class="yuyue">网上报名</a>
					</div>
				</div>
			</div>
			<div class="col-kc active">
				<div class="kecheng">
					<div class="title">
						<ul>
							<li class="active">课程详情</li>
							<!--<li>学校环境</li>
							<li>课程评价</li>-->
						</ul>
						<div class="bdsharebuttonbox">
							<a href="#" class="bds_more" data-cmd="more"></a>
							<a href="#" class="bds_qzone" data-cmd="qzone"></a>
							<a href="#" class="bds_tsina" data-cmd="tsina"></a>
							<a href="#" class="bds_tqq" data-cmd="tqq"></a>
							<a href="#" class="bds_renren" data-cmd="renren"></a>
							<a href="#" class="bds_weixin" data-cmd="weixin"></a>
						</div>
					</div>
					<div class="bd">
						<div class="kc-bd active">
							<div class="endtext">
								<?php echo ($content); ?>
							</div>
							<h2 style="margin-left: 50px;">更多课程推荐：</h2>
							<ul id="tuijian">
								<?php if(is_array($tuijain)): $k = 0; $__LIST__ = $tuijain;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($k % 2 );++$k;?><li><a href="/applications/show/<?php echo ($r["id"]); ?>.html" title="<?php echo ($r["title"]); ?>"><?php echo ($r["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>

							</ul>

						</div>

						<!---->
						<!--/kc-bd-->
						<div class="kc-bd">
							<div class="endtext">
								<?php echo ($schoolid["description"]); ?>
							</div>
						</div>
						<div class="kc-bd ">
							<div class="comment" id="reviews">
								<form action="<?php echo URL('User-Index/addview');?>" method="post" name="reviews" onsubmit="return review();">
									<input name="viewid" type="hidden" value="<?php echo ($id); ?>">
									<input name="title" type="hidden" value="<?php echo ($title); ?>">
									<div class="post">
										<div class="textarea">
											<textarea name="content" required="" maxlength="150"></textarea>
										</div>
										<div class="btns">
											<div class="face">
												<label>
                            <input name="score" type="radio" value="1">
                            1星</label>
												<label>
                            <input name="score" type="radio" value="2">
                            2星</label>
												<label>
                            <input name="score" type="radio" value="3">
                            3星</label>
												<label>
                            <input name="score" type="radio" value="4">
                            4星</label>
												<label>
                            <input name="score" type="radio" value="5" checked="">
                            5星</label>
												<div class="face-ico"></div>
											</div>
											<p></p>
											<button type="submit">发表评论</button>
										</div>
									</div>
								</form>
								
								<div class="comment-list" id="preview_list">
									<ul>
										<?php if(is_array($review_list)): $k = 0; $__LIST__ = $review_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($k % 2 );++$k;?><li class="ovef">
											<div class="fl ct viewone">
												<div class="img ">
													<!--查询用户信息-->
													<?php  if($r['ruserid']){ $user_man = M('user')->where("id=".$r['ruserid'])->find(); } ?>
													<img src="<?php echo (thumb2($user_man["file"],60,60,3)); ?>"/>
												</div>
												<p class="diandiandian"><?php echo ($user_man["username"]); ?></p>
											</div>
											<div class="fl viewtwo">
												<p class="p1"><span>评分：</span><em class="lstar" title=""><i  title="<?php echo ($r["score"]); ?>"></i></em></p>
												<p class="p2"><span>内容：</span><i><?php echo ($r["content"]); ?></i></p>
											</div>
											<div class="fr viewtime">
												<?php echo (todate($r["createtime"],'Y-m-d')); ?>
											</div>
										</li><?php endforeach; endif; else: echo "" ;endif; ?>
										
										<?php if(!$review_list) : ?>
										<li class=" pd ct f18">
											暂无评论！
										</li>
										<?php endif;?>
									</ul>
								</div>
							</div>
							
						</div>
						<P>&nbsp &nbsp &nbsp 79招生网为第三方平台，不会向学员收取任何费用；内容素材如有侵权、虚假不实、违法违规信息等请联系我们 020-26225931。</P>
						<P>&nbsp &nbsp &nbsp 课程信息由培训机构（或其代理）自行发布（或提供），请用户在自辨课程虚实、有效性、及时性时留意以实际授课为准。</P>
						</br>
						</br>
					</div>
					
				</div>
				<div class="new-box baoming">
					<div class="title" id="apply">
						<h3 class="ico-bm">报名咨询</h3><span>&nbsp &nbsp &nbsp &nbsp您好，在此留下您的联系方式，我们将第一时间与您联系！</span>
					</div>
					<form method="post" action="<?php echo URL('User-Post/insert2');?>" id="jg_form" >
						<input type="hidden"  name="catid" value="<?php echo ($catid); ?>" />
						<input type="hidden" id="moduleid" name="moduleid" value="6" />
						<input type="hidden" id="lang" name="lang" value="<?php echo ($langid); ?>" />
					    <input type="hidden" id="title" name="title" value="预约报名" />
						<input type="hidden" name="project" value="<?php echo ($schoolid["title"]); ?>" />
						<input type="hidden" name="tel" value="<?php echo ($userid["mobile"]); ?>" />
						<input type="hidden" name="email" value="<?php echo ($userid["email"]); ?>" />
						<input type="hidden" name="kctitle" value="<?php echo ($title); ?>" />
						<input type="hidden" name="kcid" value="<?php echo ($id); ?>" />
						<ul>
							<li>
								<label>姓名：</label>
								<input name="username" type="text" class="ipt" value="" placeholder="请输入您的称呼" required>
							</li>
							<li>
								<label>手机：</label>
								<input name="telephone" type="number" class="ipt" value="" min="11000000000" max="18999999999" placeholder="请输入手机号码"  required>
							</li>
							<li>
								<label>地址：</label>
								<input name="address" type="text" class="ipt">
							</li>
							<li>
								<label>验证码：</label>
								<input name="verifyCode" type="text" class="ipt yzm" placeholder="请输入验证码" required="">
								<img class="img3" id="verifyImg" src="?g=Home&m=Index&a=verify" onclick="javascript:resetVerifyCode();"  class="checkcode" align="absmiddle" title="点击刷新验证码" >
							</li>
							<!--0814-->
							<li style="display: none;">
								<input type="hidden" name="coupons" value="1">
								<!-- <label>报名编码：</label>
								<select name="coupons" class="ipt">
									<option value="1" selected="selected">使用</option>
									<option value="0">不使用</option>
								</select> -->
							</li>
							<!--0814-->

							<li class="saytext">
								<label>内容：</label>
								<textarea name="content" id="content" placeholder="报名咨询课程请留言" required=""></textarea>
							</li>
							<li class="sub">
								<input type="hidden" name="ckid" value="<?php echo ($id); ?>" class="">
								<input type="submit" value="提交" class="btn">
								<input type="reset" value="重置" class="btn res">
							</li>
						</ul>
					</form>
				</div>
			</div>
		</div>
		<div class="side-kc">
			<div class="new-box">
				<div class="title">
					<h3 class="ico-school">学校信息</h3>
				</div>
				<div class="school">
					<div class="name"><b><a href="/school2/<?php echo ($school_id); ?>.html"><?php echo ($schoolid["title"]); ?></a></b><i class="ico ico-rz3"></i></div>
					<p class="lstar" title="4.00"><i style="width:80%;"></i></p>
					<div class="text"></div>
					<h3>学校优势：</h3>
					<div class="school-tags"><?php echo (str_cut($schoolid["description"],100)); ?></div>
				</div>
				<!--/school-->
			</div>
			<!--/box-->
			<div class="new-box">
				<div class="title">
					<h3>同类课程推荐</h3>
				</div>
				<ul class="hot-list">
					<?php if(is_array($kcorder)): $k = 0; $__LIST__ = $kcorder;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($k % 2 );++$k;?><li>
						<i class="n<?php echo ($k); ?>">0<?php echo ($k); ?></i>
						<p>
							<a href="<?php echo ($r["url"]); ?>"><?php echo ($r["title"]); ?></a>
						</p>
					</li><?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="wa">
				<img src="/Uploads/201705/5929409fca920.jpg" alt="" />					
			</div>
			<!--/box-->

		</div>
	</div>
</div>
<script type="text/javascript" src="../Public/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../Public/js/messages_zh.js"></script>
<script type="text/javascript">
//表单认证
$("#jg_form").validate({
    rules: {
    },
    messages: {
      	username:"请输入用户名",
      	telephone:"请输入手机号码",
      	verifyCode:"请输入验证码",
		
    }
});	
//function tijiao(){
// var verifyCode=$('input[name=verifyCode]').val();
// $.ajax({
// 	type:"post",
// 	url:"<?php echo URL('User-Post/insert2');?>",
// 	dataType:"json",
// 	data:{'verifyCode':verifyCode},
// 	success:function(msg){
// 		if(msg==-1){
// 			alert("验证码错误");return false;
// 		}else{
// 			return true;
// 		}
// 	}
// 	
// });	
//}
	function resetVerifyCode(){
	var timenow = new Date().getTime();
	var src = './index.php?g=Home&m=Index&a=verify#'+timenow;
	$('.img3').attr('src',src);
	}
	
	$(document).on('click','.kecheng .title ul li',function(){
		var index = $(this).index();
		$(this).addClass('active').siblings().removeClass('active');
		$('.kecheng .kc-bd').eq(index).addClass('active').siblings().removeClass('active');
	});
	//评论前准备
	function review(){
		var viewid=$('#reviews form input[name=viewid]').val();
		var title=$('#reviews form input[name=title]').val();
		var content=$('#reviews form textarea').val();
		var score=$('#reviews form input:radio:checked').val();
		$.ajax({
		   	type:"post",
		   	url:"<?php echo URL('User-Index/addview');?>",
		   	dataType:"json",
		   	data:{'viewid':viewid,'title':title,'content':content,'score':score},
		   	success:function(msg){
		   		switch(msg){
	                    case "-1":  
	                        alert("您未登陆会员（请先登录并且报名该课程才能评论！）"); 

	                        break;
	                    case "-2":  
	                        alert("您尚未报名该课程（请先登录并且报名该课程才能评论！）"); 
	                        break;  
	                    case "1":  
	                        alert("评论成功！");
	                        break;  
	                    default:  
	                        alert("系统繁忙，请稍后再试");  
	            }
				
		   	}
		});
		return false;
	}
	//评论星星返回
	$(function (){
		$("#preview_list .viewtwo .lstar i").each(function(){
			_this = $(this)
			var star_mub = _this.attr('title');
		    _this.css('width',''+star_mub*20+'%');
		  });
		

	})
</script>
<script>
	window._bd_share_config = {

		"share": {},

	};
	with(document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion=' + ~(-new Date() / 36e5)];
</script>
<?php endif;?>