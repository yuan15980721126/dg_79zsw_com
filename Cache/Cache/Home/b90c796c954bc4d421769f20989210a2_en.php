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
 $kecheng= M('kecheng')->where("posid=8")->order('listorder asc')->limit('10')->select(); $ban = M('kecheng')->where("posid=9")->order('listorder asc')->limit('10')->select(); $jigou = M('school')->where("posid=10")->order('listorder asc')->limit('10')->select(); $jian = M('new')->where("posid=11")->order('listorder asc')->limit('10')->select(); $kecheng_zixun = M('new')->where("catid=261 and posid=13")->order('listorder asc')->limit('10')->select(); $ban_zixun = M('new')->where("catid=262 and posid=14")->order('listorder asc')->limit('10')->select(); $jigou_zixun = M('new')->where("catid=263 and posid=15")->order('listorder asc')->limit('10')->select(); $zonghe_zixun = M('new')->where("catid=264 and posid=16")->order('listorder asc')->limit('10')->select();?>


<div class="Home Index index">
    <!-- 轮换 -->
    <div class="main_middle ovh clear">
	<div class="w1440 auto" style="height:368px;">
		<div id="adSlideBox" class="tb_slide_box tb_slide_ad">
			<?php  $_result=M('Slide_data')->where(" status=1 and  fid=1  and lang=2")->order(" listorder ASC ,id DESC ")->limit("5")->select();;if ($_result): $i=0;foreach($_result as $key=>$r):$i++;$mod = ($i % 2 );parse_str($r['data'],$r['param']);?>
			<a href="<?php echo ($r['link']); ?>" target="_blank"> <img id="adSlideImg<?php echo ($key+1); ?>" alt="<?php echo ($r['title']); ?>" src="<?php echo ($r['pic']); ?>" class="tb_slide_img" style="transition: transform 250ms linear; backface-visibility: hidden; transform: translateX(0%);
			<?php if($key==0) : ?>backface-visibility: hidden; transform: translateX(0%);<?php else :?>transform: translateX(-100%); backface-visibility: hidden;<?php endif;?>"> </a>
			<?php endforeach; endif;?>
			<div id="adSlideBtn" class="tb_slide_btn">
				<?php  $_result=M('Slide_data')->where(" status=1 and  fid=1  and lang=2")->order(" listorder ASC ,id DESC ")->limit("5")->select();;if ($_result): $i=0;foreach($_result as $key=>$r):$i++;$mod = ($i % 2 );parse_str($r['data'],$r['param']);?>
				<a href="javascript:" class="tb_slide_<?php if($key==0) : ?>on<?php else :?>a<?php endif;?>" data-rel="adSlideImg<?php echo ($key+1); ?>"></a>
				<?php endforeach; endif;?>

			</div>
			<a href="javascript:" class="tb_slide_prev" data-type="prev"></a>
			<a href="javascript:" class="tb_slide_pause" data-type="pause"></a>
			<a href="javascript:" class="tb_slide_next" data-type="next"></a>
		</div>
		<div class="tb_ad_aside"></div>
	</div>
</div>

    <!-- 轮换end -->
    <!--79招生网特别推荐 -->
    <div class="w1200 auto six-sec clear">

        <div class="floor bgW offFloor mt_pass">
            <p style="font-size:22px"><strong>东莞79招生网特别推荐</strong></p>
            <div class="w1200 auto">
                &nbsp &nbsp &nbsp &nbsp &nbsp </br>
                <div class="clear">
                    <ul class="news-ul fl">
                        <h3>东莞培训课程</h3>
                        <?php if (is_array($kecheng)){ ?>
                        <?php foreach($kecheng as $key => $value){ ?>
                        <li class="news-li clear four_px_gap">
                            <a rel="nofollow" class="clear" target="_blank" href="<?php echo $value['url'];?>" title="<?php echo $value['title'];?>">
                                <span class="news-li-lf fl c6 _link inlineB ellip"><?php echo subtext($value['title'],14);?>&nbsp </span>
                                <span class="news-li-ri c6 fr">东莞培训课程&nbsp &nbsp &nbsp &nbsp &nbsp </span>
                            </a>
                        </li>
                        <?php }?>
                        <?php }?>
                    </ul>
                    <ul class="news-ul fl">
                        <h3>东莞培训班</h3>
                        <?php if (is_array($ban)){ ?>
                        <?php foreach($ban as $key => $value){ ?>
                        <li class="news-li clear four_px_gap">
                            <a rel="nofollow" class="clear" target="_blank" href="<?php echo $value['url'];?>" title="<?php echo $value['title'];?>">
                                <span class="news-li-lf fl c6 _link inlineB ellip"><?php echo subtext($value['title'],14);?>&nbsp </span>
                                <span class="news-li-ri c6 fr">东莞培训班&nbsp &nbsp &nbsp &nbsp &nbsp </span>
                            </a>
                        </li>
                        <?php }?>
                        <?php }?>
                    </ul>
                    <ul class="news-ul fl">
                        <h3>东莞培训机构</h3>
                        <?php if (is_array($jigou)){ ?>
                        <?php foreach($jigou as $key => $value){ ?>
                        <li class="news-li clear four_px_gap">
                            <a rel="nofollow" class="clear" target="_blank"  href="/school2/<?php echo $value['id'];?>.html"  title="<?php echo $value['title'];?>">
                                <span class="news-li-lf fl c6 _link inlineB ellip"><?php echo subtext($value['title'],14);?>&nbsp </span>
                                <span class="news-li-ri c6 fr">东莞培训机构&nbsp &nbsp &nbsp &nbsp &nbsp </span>
                            </a>
                        </li>
                        <?php }?>
                        <?php }?>
                    </ul>
                    <ul class="news-ul fl">


                        <h3>东莞培训机构招生简章</h3>
                        <?php if (is_array($jian)){ ?>
                        <?php foreach($jian as $key => $value){ ?>
                        <li class="news-li clear four_px_gap">
                            <a rel="nofollow" class="clear" target="_blank" href="<?php echo $value['url'];?>" title="<?php echo $value['title'];?>">
                                <span class="news-li-lf fl c6 _link inlineB ellip"><?php echo subtext($value['title'],14);?>&nbsp </span>
                                <span class="news-li-ri c6 fr">东莞招生简章&nbsp &nbsp &nbsp &nbsp &nbsp </span>
                            </a>
                        </li>
                        <?php }?>
                        <?php }?>
                    </ul>
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

                    <style>
                        .xxfk {
                            width: 300px;
                            margin: 0px auto;
                            padding-bottom: 0px;
                            position: fixed;
                            right: 0px;
                            top: 66%;
                            background: #FFF;
                            border: 1px solid #e5e5e5;
                            border-radius: 5px;
                        }

                    </style>

                    <div class="xxfk">

                        <div class="dw">
                            <div class="regist-title">学习课程、反馈问题请留言</div>
                            <form id="onlinec" action="<?php echo URL('User-Post/insert');?>" method="post">
                                <input type="hidden" name="catid" value="<?php echo ($catid); ?>"/>
                                <input type="hidden" id="moduleid" name="moduleid" value="8"/>
                                <input type="hidden" id="lang" name="lang" value="<?php echo ($langid); ?>"/>
                                <input type="hidden" id="title" name="title" value="信息反馈"/>
                                <input type="hidden" id="ref" name="ref" value="/"/>
                                <ul class="clearfix">
                                    <li class="li1">
                                        <input placeholder="职 业：" id="zhiye" name="zhiye" class="c-input" type="text">
                                    </li>
                                    <li class="li2 nomgr">
                                        <input placeholder="手 机：" id="telephone" name="telephone" class="c-input"
                                               type="number" >
                                    </li>
                                    <li class="li3">
                                        <input placeholder="姓 名：" id="name" name="username" class="c-input" type="text"
                                               >
                                    </li>
                                    <li class="li4 nomgr">
                                        <input placeholder="邮 箱：" id="email" name="email" class="c-input" type="email">
                                    </li>

                                    <li class="li5 nomgr clearfix">
                                        <textarea name="content" id="content" class="c-textarea lh22"
                                                  placeholder="留 言："></textarea>
                                    </li>
                                    <li class="li6 nomgr">
                                        <input type="text" maxlength="4" name="verifyCode" class="input-text" class="inputbox"
                                               id="verifyCode" placeholder="请输入验证码"/>
                                        <img id="verifyImage" class="checkcode" style="height: 35px; width: 70px;"
                                             src="<?php echo U('Home/Index/verify');?>" onclick="javascript:resetVerifyCode();" class="checkcode"
                                             title="<?php echo L('resetVerifyCode');?>"/>
                                    </li>
                                    <li class="li6 nomgr">
                                        <button type="submit" class="sub-btn">发送</button>
                                        </button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>


                <!--楼层-->
                <!--1f-->
                <div class="w1200 auto">
                    <div class="w1200 auto">
                        <span>&nbsp &nbsp &nbsp &nbsp &nbsp </span></br>
                        <span>&nbsp &nbsp &nbsp &nbsp &nbsp </span></br>
                        <span>&nbsp &nbsp &nbsp &nbsp &nbsp </span></br>
                        <div style="font-size:22px"><strong>东莞79招生网名校馆</strong></div>
                        <?php $k=0;foreach($Categorys as $key=>$r):if(1=="" && $r['isfootermenu']==0){ continue; }if( $r['ismenu']==1 && intval(0)==$r["parentid"] ) :++$k; if($k<11 && '/'!=$r['url']) : ?>

                            <div class="w1200 auto clear h480">

                                <div class="floor-tit">
                                    <div class="layout_title_l"><?php echo ($k-1); ?>F<?php echo ($r["catname"]); ?></div>
                                    <div class="layout_con_r">
                                        <div class="r" style="font-size:14px; line-height:40px">
                                            <a href="<?php echo ($r["url"]); ?>">更多培训机构行业分类&gt;&gt;</a>
                                        </div>
                                        <div class="title_list">
                                            <ul class="ml20 f14">
                                                <?php if($r[child]) : ?>
                                                <?php $kd=0;foreach($Categorys as $key=>$rd):if(1=="" && $rd['isfootermenu']==0){ continue; }if( $rd['ismenu']==1 && intval($r[id])==$rd["parentid"] ) :++$kd; if($kd<9) : ?>
                                                    <li>
                                                        <a href="<?php echo ($rd["url"]); ?>"><?php echo ($rd["catname"]); ?></a>
                                                    </li>
                                                    <?php endif; endif; endforeach;?>
                                                <?php endif;?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=" w1200 clear main_layout block_theme_2" id="Block_3">
                                    <a href="/<?php echo ($r["catdir"]); ?>">
                                        <div class="floor-img"><img src="<?php echo ($r["image"]); ?>" width="230" height="412"
                                                                    alt="<?php echo ($city); ?>东莞79招生网<?php echo ($r['catname']); ?>"/></div>
                                    </a>
                                    <div class="floor-center">
                                        <ul class="grid">
                                            <?php $kschool=M('school')->where("industryx=$r[id]")->order('listorder
                                            desc')->limit(6)->select();?>
                                            <?php if(is_array($kschool)): $rvj = 0; $__LIST__ = $kschool;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rv): $mod = ($rvj % 2 );++$rvj;?><li>
                                                    <figure class="effect-goliath">
                                                        <a target="_blank" href="/school2/<?php echo ($rv["id"]); ?>.html">
                                                            <img src="<?php echo ($rv["file"]); ?>" alt="<?php echo ($rv["title"]); ?>">
                                                            <figcaption>
                                                                <p><?php echo ($rv["title"]); ?></p>
                                                            </figcaption>
                                                        </a>
                                                    </figure>
                                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                    </div>
                                    <div class="floor-right layout_con fix">
                                        <!--左边课程-->
                                        <div class="layout_con_l">
                                            <p style="line-height:30px; font-size:16px; color:#333; text-align:left;">
                                                东莞名校优质培训课程</p>
                                            <ul class="mt10 blockLUl">
                                                <?php  $_result=M()->query("SELECT * FROM mqu_kecheng WHERE catid in($r[arrchildid]) AND posid=4"); if ($_result): $rvx=0;foreach($_result as $key=>$rvz):++$rvx;$mod = ($rvx % 2 ); if($rvx<9) : ?>
                                                    <li class="con_l_list_li <?php if($rvx==1) : ?>current_left<?php endif;?>">
                                                        <div class="fw pl10 fix">
                                                            <span class="num_list vm">0<?php echo ($rvx); ?></span>
                                                            <a class="f14 vm dib w140 ell diandiandian"
                                                               href="<?php echo ($rvz["url"]); ?>" class="f14 vm dib w160 ell"
                                                               target="_blank" rel="nofollow"><?php echo ($rvz["title"]); ?></a>
                                                        </div>
                                                        <div class="school_add"><?php echo ($rvz["content"]); ?>&hellip;</div>
                                                    </li>
                                                    <?php endif; endforeach; endif;?>
                                            </ul>
                                        </div>
                                        <!--左边课程 end-->
                                    </div>
                                </div>
                            </div>

                            <?php endif; endif; endforeach;?>

                        <!--1f end-->
                        <div class="floor bgW offFloor mt_pass">
                            <div class="w1200 auto">
                                <div class="clear">
                                    &nbsp &nbsp &nbsp &nbsp &nbsp </br>
                                    &nbsp &nbsp &nbsp &nbsp &nbsp </br>
                                    &nbsp &nbsp &nbsp &nbsp &nbsp </br>
                                    <p style="font-size:22px"><strong>东莞79招生网培训资讯</strong></p>
                                    &nbsp &nbsp &nbsp &nbsp &nbsp </br>
                                    &nbsp &nbsp &nbsp &nbsp &nbsp </br>
                                    <ul class="news-ul fl">
                                        <h3>东莞培训资讯（东莞培训课程）</h3>
                                        <?php if (is_array($kecheng_zixun)){ ?>
                                        <?php foreach($kecheng_zixun as $key => $value){ ?>
                                        <li class="news-li clear four_px_gap">
                                            <a rel="nofollow" class="clear" target="_blank" href="<?php echo $value['url'];?>" title="<?php echo $value['title'];?>">
                                                <span class="news-li-lf fl c6 _link inlineB ellip"><?php echo subtext($value['title'],14);?>&nbsp </span>
                                                <span class="news-li-ri c6 fr">东莞培训课程&nbsp &nbsp &nbsp &nbsp &nbsp </span>
                                            </a>
                                        </li>
                                        <?php }?>
                                        <?php }?>
                                    </ul>
                                    <ul class="news-ul fl">
                                        <h3>东莞培训资讯（东莞培训班）</h3>
                                        <?php if (is_array($ban_zixun)){ ?>
                                        <?php foreach($ban_zixun as $key => $value){ ?>
                                        <li class="news-li clear four_px_gap">
                                            <a rel="nofollow" class="clear" target="_blank" href="<?php echo $value['url'];?>" title="<?php echo $value['title'];?>">
                                                <span class="news-li-lf fl c6 _link inlineB ellip"><?php echo subtext($value['title'],14);?>&nbsp </span>
                                                <span class="news-li-ri c6 fr">东莞培训班&nbsp &nbsp &nbsp &nbsp &nbsp </span>
                                            </a>
                                        </li>
                                        <?php }?>
                                        <?php }?>
                                    </ul>
                                    <ul class="news-ul fl">
                                        <h3>东莞培训资讯（东莞培训机构）</h3>
                                        <?php if (is_array($jigou_zixun)){ ?>
                                        <?php foreach($jigou_zixun as $key => $value){ ?>
                                        <li class="news-li clear four_px_gap">
                                            <a rel="nofollow" class="clear" target="_blank" href="<?php echo $value['url'];?>" title="<?php echo $value['title'];?>">
                                                <span class="news-li-lf fl c6 _link inlineB ellip"><?php echo subtext($value['title'],14);?>&nbsp </span>
                                                <span class="news-li-ri c6 fr">东莞培训机构&nbsp &nbsp &nbsp &nbsp &nbsp </span>
                                            </a>
                                        </li>
                                        <?php }?>
                                        <?php }?>
                                    </ul>
                                    <ul class="news-ul fl">
                                        <h3>东莞培训资讯（东莞招生网综合）</h3>
                                        <?php if (is_array($zonghe_zixun)){ ?>
                                        <?php foreach($zonghe_zixun as $key => $value){ ?>
                                        <li class="news-li clear four_px_gap">
                                            <a rel="nofollow" class="clear" target="_blank" href="<?php echo $value['url'];?>" title="<?php echo $value['title'];?>">
                                                <span class="news-li-lf fl c6 _link inlineB ellip"><?php echo subtext($value['title'],14);?>&nbsp </span>
                                                <span class="news-li-ri c6 fr">东莞招生网&nbsp &nbsp &nbsp &nbsp &nbsp </span>
                                            </a>
                                        </li>
                                        <?php }?>
                                        <?php }?>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <!--楼层end-->

                        <div class="links w1200 auto mt20 cl">
                            &nbsp &nbsp &nbsp &nbsp &nbsp </br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp </br>
                            <h2 style="border-bottom:1px #d1d1d1 dashed; margin-bottom:10px;" class="f15 fw pb5">
                                友情链接</h2>
                            <div class="links_con clearfix">
                                <?php  $_result=M("Youqing")->field("*")->where(" 1  and lang=2 AND status=1 ")->order("id desc")->limit("999")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><a title="<?php echo ($r["title"]); ?>" target="_blank" href="<?php echo ($r["link"]); ?>" style="float: left;"><?php echo ($r["title"]); ?></a><?php endforeach; endif;?>

                            </div>
                        </div>
                        <?php if(1 == $index_tip) : ?>
                        
<style>

    center {
        padding-top:10px;
    }
    button {
        cursor:pointer;
    }
    #win {
        position:absolute;
        top:50%;
        left:50%;
        width:400px;
        height:200px;
        background:#fff;
        border:1px solid #c2c2c2;
        margin:-102px 0 0 -202px;
        overflow: hidden;
        z-index: 999;
        display:block;
    }
    h2 {
        font-size:12px;
        height:18px;
        text-align:right;
        background:#f9f9f9;
        border-bottom:1px solid #d6d4d0;
        padding:5px;
        cursor:move;
    }
    h2 #close {
        color:#f90;
        cursor:pointer;
        background:#fff;
        border:1px solid #f90;
        border-radius: 50%;
        padding:0 2px;
    }
    #win h2 .title {
        float: left;
    }
</style>

<div id="win">
    <h2>
        <span class="title">使用提醒</span>
        <span id="close">×</span>
    </h2>

    <div>
        <span style="white-space:normal;">这是首页提示信息<span style="white-space:normal;">这是首页提示信息</span><span style="white-space:normal;">这是首页提示信息</span></span>
    </div>
</div>

<script>
    window.onload = function ()
    {
        var oWin = document.getElementById("win");
        var oBtn = document.getElementsByTagName("button")[0];
        var oClose = document.getElementById("close");
        var oH2 = oWin.getElementsByTagName("h2")[0];
        var bDrag = false;
        var disX = disY = 0;
//        oWin.style.display = "block"
        oClose.onclick = function ()
        {
            oWin.style.display = "none"

        };
        oClose.onmousedown = function (event)
        {
            (event || window.event).cancelBubble = true;
        };
        oH2.onmousedown = function (event)
        {
            var event = event || window.event;
            bDrag = true;
            disX = event.clientX - oWin.offsetLeft;
            disY = event.clientY - oWin.offsetTop;
            this.setCapture && this.setCapture();
            return false
        };
        document.onmousemove = function (event)
        {
            if (!bDrag) return;
            var event = event || window.event;
            var iL = event.clientX - disX;
            var iT = event.clientY - disY;
            var maxL = document.documentElement.clientWidth - oWin.offsetWidth;
            var maxT = document.documentElement.clientHeight - oWin.offsetHeight;
            iL = iL < 0 ? 0 : iL;
            iL = iL > maxL ? maxL : iL;
            iT = iT < 0 ? 0 : iT;
            iT = iT > maxT ? maxT : iT;

            oWin.style.marginTop = oWin.style.marginLeft = 0;
            oWin.style.left = iL + "px";
            oWin.style.top = iT + "px";
            return false
        };
        document.onmouseup = window.onblur = oH2.onlosecapture = function ()
        {
            bDrag = false;
            oH2.releaseCapture && oH2.releaseCapture();
        };
    };
</script>

                        <?php endif;?>

                    </div>
                    <!--js的导入-->
                    <!--<script src="../Public/js/jquery.scrollTo.min.js" type="text/javascript"></script>-->
                    <!--<script src="../Public/js/scroll.js" type="text/javascript"></script>-->
                    <!--<script type="text/javascript" src="../Public/js/jquery.validate.min.js"></script>-->
                    <script type="text/javascript" src="../Public/js/jquery.validation.min.js"></script>

                    <script type="text/javascript" src="../Public/js/messages_zh.js"></script>
                    <script>console.log(<?php echo ($index_tip); ?>);


                    </script>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $(".list_lh").myScroll({
                                speed: 40, //数值越大，速度越慢
                                rowHeight: 68 //li的高度
                            });

                            // IE10+ ...
                            if (typeof history.pushState !== "function") {
                                document.body.className = "fuck-ie6-ie9";
                            }

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

                        });
                        function resetVerifyCode(){
                            var timenow = new Date().getTime();
                            document.getElementById('verifyImage').src='./index.php?g=Home&m=Index&a=verify#'+timenow;
                        }
                        //左侧立即报名


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
 $kecheng= M('kecheng')->where("posid=8")->order('listorder asc')->limit('10')->select(); $ban = M('kecheng')->where("posid=9")->order('listorder asc')->limit('10')->select(); $jigou = M('school')->where("posid=10")->order('listorder asc')->limit('10')->select(); $jian = M('new')->where("posid=11")->order('listorder asc')->limit('10')->select(); $kecheng_zixun = M('new')->where("catid=261 and posid=13")->order('listorder asc')->limit('10')->select(); $ban_zixun = M('new')->where("catid=262 and posid=14")->order('listorder asc')->limit('10')->select(); $jigou_zixun = M('new')->where("catid=263 and posid=15")->order('listorder asc')->limit('10')->select(); $zonghe_zixun = M('new')->where("catid=264 and posid=16")->order('listorder asc')->limit('10')->select();?>


<div class="Home Index index">
    <!-- 轮换 -->
    <div class="main_middle ovh clear">
	<div class="w1440 auto" style="height:368px;">
		<div id="adSlideBox" class="tb_slide_box tb_slide_ad">
			<?php  $_result=M('Slide_data')->where(" status=1 and  fid=1  and lang=2")->order(" listorder ASC ,id DESC ")->limit("5")->select();;if ($_result): $i=0;foreach($_result as $key=>$r):$i++;$mod = ($i % 2 );parse_str($r['data'],$r['param']);?>
			<a href="<?php echo ($r['link']); ?>" target="_blank"> <img id="adSlideImg<?php echo ($key+1); ?>" alt="<?php echo ($r['title']); ?>" src="<?php echo ($r['pic']); ?>" class="tb_slide_img" style="transition: transform 250ms linear; backface-visibility: hidden; transform: translateX(0%);
			<?php if($key==0) : ?>backface-visibility: hidden; transform: translateX(0%);<?php else :?>transform: translateX(-100%); backface-visibility: hidden;<?php endif;?>"> </a>
			<?php endforeach; endif;?>
			<div id="adSlideBtn" class="tb_slide_btn">
				<?php  $_result=M('Slide_data')->where(" status=1 and  fid=1  and lang=2")->order(" listorder ASC ,id DESC ")->limit("5")->select();;if ($_result): $i=0;foreach($_result as $key=>$r):$i++;$mod = ($i % 2 );parse_str($r['data'],$r['param']);?>
				<a href="javascript:" class="tb_slide_<?php if($key==0) : ?>on<?php else :?>a<?php endif;?>" data-rel="adSlideImg<?php echo ($key+1); ?>"></a>
				<?php endforeach; endif;?>

			</div>
			<a href="javascript:" class="tb_slide_prev" data-type="prev"></a>
			<a href="javascript:" class="tb_slide_pause" data-type="pause"></a>
			<a href="javascript:" class="tb_slide_next" data-type="next"></a>
		</div>
		<div class="tb_ad_aside"></div>
	</div>
</div>

    <!-- 轮换end -->
    <!--79招生网特别推荐 -->
    <div class="w1200 auto six-sec clear">

        <div class="floor bgW offFloor mt_pass">
            <p style="font-size:22px"><strong>东莞79招生网特别推荐</strong></p>
            <div class="w1200 auto">
                &nbsp &nbsp &nbsp &nbsp &nbsp </br>
                <div class="clear">
                    <ul class="news-ul fl">
                        <h3>东莞培训课程</h3>
                        <?php if (is_array($kecheng)){ ?>
                        <?php foreach($kecheng as $key => $value){ ?>
                        <li class="news-li clear four_px_gap">
                            <a rel="nofollow" class="clear" target="_blank" href="<?php echo $value['url'];?>" title="<?php echo $value['title'];?>">
                                <span class="news-li-lf fl c6 _link inlineB ellip"><?php echo subtext($value['title'],14);?>&nbsp </span>
                                <span class="news-li-ri c6 fr">东莞培训课程&nbsp &nbsp &nbsp &nbsp &nbsp </span>
                            </a>
                        </li>
                        <?php }?>
                        <?php }?>
                    </ul>
                    <ul class="news-ul fl">
                        <h3>东莞培训班</h3>
                        <?php if (is_array($ban)){ ?>
                        <?php foreach($ban as $key => $value){ ?>
                        <li class="news-li clear four_px_gap">
                            <a rel="nofollow" class="clear" target="_blank" href="<?php echo $value['url'];?>" title="<?php echo $value['title'];?>">
                                <span class="news-li-lf fl c6 _link inlineB ellip"><?php echo subtext($value['title'],14);?>&nbsp </span>
                                <span class="news-li-ri c6 fr">东莞培训班&nbsp &nbsp &nbsp &nbsp &nbsp </span>
                            </a>
                        </li>
                        <?php }?>
                        <?php }?>
                    </ul>
                    <ul class="news-ul fl">
                        <h3>东莞培训机构</h3>
                        <?php if (is_array($jigou)){ ?>
                        <?php foreach($jigou as $key => $value){ ?>
                        <li class="news-li clear four_px_gap">
                            <a rel="nofollow" class="clear" target="_blank"  href="/school2/<?php echo $value['id'];?>.html"  title="<?php echo $value['title'];?>">
                                <span class="news-li-lf fl c6 _link inlineB ellip"><?php echo subtext($value['title'],14);?>&nbsp </span>
                                <span class="news-li-ri c6 fr">东莞培训机构&nbsp &nbsp &nbsp &nbsp &nbsp </span>
                            </a>
                        </li>
                        <?php }?>
                        <?php }?>
                    </ul>
                    <ul class="news-ul fl">


                        <h3>东莞培训机构招生简章</h3>
                        <?php if (is_array($jian)){ ?>
                        <?php foreach($jian as $key => $value){ ?>
                        <li class="news-li clear four_px_gap">
                            <a rel="nofollow" class="clear" target="_blank" href="<?php echo $value['url'];?>" title="<?php echo $value['title'];?>">
                                <span class="news-li-lf fl c6 _link inlineB ellip"><?php echo subtext($value['title'],14);?>&nbsp </span>
                                <span class="news-li-ri c6 fr">东莞招生简章&nbsp &nbsp &nbsp &nbsp &nbsp </span>
                            </a>
                        </li>
                        <?php }?>
                        <?php }?>
                    </ul>
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp

                    <style>
                        .xxfk {
                            width: 300px;
                            margin: 0px auto;
                            padding-bottom: 0px;
                            position: fixed;
                            right: 0px;
                            top: 66%;
                            background: #FFF;
                            border: 1px solid #e5e5e5;
                            border-radius: 5px;
                        }

                    </style>

                    <div class="xxfk">

                        <div class="dw">
                            <div class="regist-title">学习课程、反馈问题请留言</div>
                            <form id="onlinec" action="<?php echo URL('User-Post/insert');?>" method="post">
                                <input type="hidden" name="catid" value="<?php echo ($catid); ?>"/>
                                <input type="hidden" id="moduleid" name="moduleid" value="8"/>
                                <input type="hidden" id="lang" name="lang" value="<?php echo ($langid); ?>"/>
                                <input type="hidden" id="title" name="title" value="信息反馈"/>
                                <input type="hidden" id="ref" name="ref" value="/"/>
                                <ul class="clearfix">
                                    <li class="li1">
                                        <input placeholder="职 业：" id="zhiye" name="zhiye" class="c-input" type="text">
                                    </li>
                                    <li class="li2 nomgr">
                                        <input placeholder="手 机：" id="telephone" name="telephone" class="c-input"
                                               type="number" >
                                    </li>
                                    <li class="li3">
                                        <input placeholder="姓 名：" id="name" name="username" class="c-input" type="text"
                                               >
                                    </li>
                                    <li class="li4 nomgr">
                                        <input placeholder="邮 箱：" id="email" name="email" class="c-input" type="email">
                                    </li>

                                    <li class="li5 nomgr clearfix">
                                        <textarea name="content" id="content" class="c-textarea lh22"
                                                  placeholder="留 言："></textarea>
                                    </li>
                                    <li class="li6 nomgr">
                                        <input type="text" maxlength="4" name="verifyCode" class="input-text" class="inputbox"
                                               id="verifyCode" placeholder="请输入验证码"/>
                                        <img id="verifyImage" class="checkcode" style="height: 35px; width: 70px;"
                                             src="<?php echo U('Home/Index/verify');?>" onclick="javascript:resetVerifyCode();" class="checkcode"
                                             title="<?php echo L('resetVerifyCode');?>"/>
                                    </li>
                                    <li class="li6 nomgr">
                                        <button type="submit" class="sub-btn">发送</button>
                                        </button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>


                <!--楼层-->
                <!--1f-->
                <div class="w1200 auto">
                    <div class="w1200 auto">
                        <span>&nbsp &nbsp &nbsp &nbsp &nbsp </span></br>
                        <span>&nbsp &nbsp &nbsp &nbsp &nbsp </span></br>
                        <span>&nbsp &nbsp &nbsp &nbsp &nbsp </span></br>
                        <div style="font-size:22px"><strong>东莞79招生网名校馆</strong></div>
                        <?php $k=0;foreach($Categorys as $key=>$r):if(1=="" && $r['isfootermenu']==0){ continue; }if( $r['ismenu']==1 && intval(0)==$r["parentid"] ) :++$k; if($k<11 && '/'!=$r['url']) : ?>

                            <div class="w1200 auto clear h480">

                                <div class="floor-tit">
                                    <div class="layout_title_l"><?php echo ($k-1); ?>F<?php echo ($r["catname"]); ?></div>
                                    <div class="layout_con_r">
                                        <div class="r" style="font-size:14px; line-height:40px">
                                            <a href="<?php echo ($r["url"]); ?>">更多培训机构行业分类&gt;&gt;</a>
                                        </div>
                                        <div class="title_list">
                                            <ul class="ml20 f14">
                                                <?php if($r[child]) : ?>
                                                <?php $kd=0;foreach($Categorys as $key=>$rd):if(1=="" && $rd['isfootermenu']==0){ continue; }if( $rd['ismenu']==1 && intval($r[id])==$rd["parentid"] ) :++$kd; if($kd<9) : ?>
                                                    <li>
                                                        <a href="<?php echo ($rd["url"]); ?>"><?php echo ($rd["catname"]); ?></a>
                                                    </li>
                                                    <?php endif; endif; endforeach;?>
                                                <?php endif;?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=" w1200 clear main_layout block_theme_2" id="Block_3">
                                    <a href="/<?php echo ($r["catdir"]); ?>">
                                        <div class="floor-img"><img src="<?php echo ($r["image"]); ?>" width="230" height="412"
                                                                    alt="<?php echo ($city); ?>东莞79招生网<?php echo ($r['catname']); ?>"/></div>
                                    </a>
                                    <div class="floor-center">
                                        <ul class="grid">
                                            <?php $kschool=M('school')->where("industryx=$r[id]")->order('listorder
                                            desc')->limit(6)->select();?>
                                            <?php if(is_array($kschool)): $rvj = 0; $__LIST__ = $kschool;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rv): $mod = ($rvj % 2 );++$rvj;?><li>
                                                    <figure class="effect-goliath">
                                                        <a target="_blank" href="/school2/<?php echo ($rv["id"]); ?>.html">
                                                            <img src="<?php echo ($rv["file"]); ?>" alt="<?php echo ($rv["title"]); ?>">
                                                            <figcaption>
                                                                <p><?php echo ($rv["title"]); ?></p>
                                                            </figcaption>
                                                        </a>
                                                    </figure>
                                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                    </div>
                                    <div class="floor-right layout_con fix">
                                        <!--左边课程-->
                                        <div class="layout_con_l">
                                            <p style="line-height:30px; font-size:16px; color:#333; text-align:left;">
                                                东莞名校优质培训课程</p>
                                            <ul class="mt10 blockLUl">
                                                <?php  $_result=M()->query("SELECT * FROM mqu_kecheng WHERE catid in($r[arrchildid]) AND posid=4"); if ($_result): $rvx=0;foreach($_result as $key=>$rvz):++$rvx;$mod = ($rvx % 2 ); if($rvx<9) : ?>
                                                    <li class="con_l_list_li <?php if($rvx==1) : ?>current_left<?php endif;?>">
                                                        <div class="fw pl10 fix">
                                                            <span class="num_list vm">0<?php echo ($rvx); ?></span>
                                                            <a class="f14 vm dib w140 ell diandiandian"
                                                               href="<?php echo ($rvz["url"]); ?>" class="f14 vm dib w160 ell"
                                                               target="_blank" rel="nofollow"><?php echo ($rvz["title"]); ?></a>
                                                        </div>
                                                        <div class="school_add"><?php echo ($rvz["content"]); ?>&hellip;</div>
                                                    </li>
                                                    <?php endif; endforeach; endif;?>
                                            </ul>
                                        </div>
                                        <!--左边课程 end-->
                                    </div>
                                </div>
                            </div>

                            <?php endif; endif; endforeach;?>

                        <!--1f end-->
                        <div class="floor bgW offFloor mt_pass">
                            <div class="w1200 auto">
                                <div class="clear">
                                    &nbsp &nbsp &nbsp &nbsp &nbsp </br>
                                    &nbsp &nbsp &nbsp &nbsp &nbsp </br>
                                    &nbsp &nbsp &nbsp &nbsp &nbsp </br>
                                    <p style="font-size:22px"><strong>东莞79招生网培训资讯</strong></p>
                                    &nbsp &nbsp &nbsp &nbsp &nbsp </br>
                                    &nbsp &nbsp &nbsp &nbsp &nbsp </br>
                                    <ul class="news-ul fl">
                                        <h3>东莞培训资讯（东莞培训课程）</h3>
                                        <?php if (is_array($kecheng_zixun)){ ?>
                                        <?php foreach($kecheng_zixun as $key => $value){ ?>
                                        <li class="news-li clear four_px_gap">
                                            <a rel="nofollow" class="clear" target="_blank" href="<?php echo $value['url'];?>" title="<?php echo $value['title'];?>">
                                                <span class="news-li-lf fl c6 _link inlineB ellip"><?php echo subtext($value['title'],14);?>&nbsp </span>
                                                <span class="news-li-ri c6 fr">东莞培训课程&nbsp &nbsp &nbsp &nbsp &nbsp </span>
                                            </a>
                                        </li>
                                        <?php }?>
                                        <?php }?>
                                    </ul>
                                    <ul class="news-ul fl">
                                        <h3>东莞培训资讯（东莞培训班）</h3>
                                        <?php if (is_array($ban_zixun)){ ?>
                                        <?php foreach($ban_zixun as $key => $value){ ?>
                                        <li class="news-li clear four_px_gap">
                                            <a rel="nofollow" class="clear" target="_blank" href="<?php echo $value['url'];?>" title="<?php echo $value['title'];?>">
                                                <span class="news-li-lf fl c6 _link inlineB ellip"><?php echo subtext($value['title'],14);?>&nbsp </span>
                                                <span class="news-li-ri c6 fr">东莞培训班&nbsp &nbsp &nbsp &nbsp &nbsp </span>
                                            </a>
                                        </li>
                                        <?php }?>
                                        <?php }?>
                                    </ul>
                                    <ul class="news-ul fl">
                                        <h3>东莞培训资讯（东莞培训机构）</h3>
                                        <?php if (is_array($jigou_zixun)){ ?>
                                        <?php foreach($jigou_zixun as $key => $value){ ?>
                                        <li class="news-li clear four_px_gap">
                                            <a rel="nofollow" class="clear" target="_blank" href="<?php echo $value['url'];?>" title="<?php echo $value['title'];?>">
                                                <span class="news-li-lf fl c6 _link inlineB ellip"><?php echo subtext($value['title'],14);?>&nbsp </span>
                                                <span class="news-li-ri c6 fr">东莞培训机构&nbsp &nbsp &nbsp &nbsp &nbsp </span>
                                            </a>
                                        </li>
                                        <?php }?>
                                        <?php }?>
                                    </ul>
                                    <ul class="news-ul fl">
                                        <h3>东莞培训资讯（东莞招生网综合）</h3>
                                        <?php if (is_array($zonghe_zixun)){ ?>
                                        <?php foreach($zonghe_zixun as $key => $value){ ?>
                                        <li class="news-li clear four_px_gap">
                                            <a rel="nofollow" class="clear" target="_blank" href="<?php echo $value['url'];?>" title="<?php echo $value['title'];?>">
                                                <span class="news-li-lf fl c6 _link inlineB ellip"><?php echo subtext($value['title'],14);?>&nbsp </span>
                                                <span class="news-li-ri c6 fr">东莞招生网&nbsp &nbsp &nbsp &nbsp &nbsp </span>
                                            </a>
                                        </li>
                                        <?php }?>
                                        <?php }?>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <!--楼层end-->

                        <div class="links w1200 auto mt20 cl">
                            &nbsp &nbsp &nbsp &nbsp &nbsp </br>
                            &nbsp &nbsp &nbsp &nbsp &nbsp </br>
                            <h2 style="border-bottom:1px #d1d1d1 dashed; margin-bottom:10px;" class="f15 fw pb5">
                                友情链接</h2>
                            <div class="links_con clearfix">
                                <?php  $_result=M("Youqing")->field("*")->where(" 1  and lang=2 AND status=1 ")->order("id desc")->limit("999")->select();; if ($_result): $i=0;foreach($_result as $key=>$r):++$i;$mod = ($i % 2 );?><a title="<?php echo ($r["title"]); ?>" target="_blank" href="<?php echo ($r["link"]); ?>" style="float: left;"><?php echo ($r["title"]); ?></a><?php endforeach; endif;?>

                            </div>
                        </div>
                        <?php if(1 == $index_tip) : ?>
                        
<style>

    center {
        padding-top:10px;
    }
    button {
        cursor:pointer;
    }
    #win {
        position:absolute;
        top:50%;
        left:50%;
        width:400px;
        height:200px;
        background:#fff;
        border:1px solid #c2c2c2;
        margin:-102px 0 0 -202px;
        overflow: hidden;
        z-index: 999;
        display:block;
    }
    h2 {
        font-size:12px;
        height:18px;
        text-align:right;
        background:#f9f9f9;
        border-bottom:1px solid #d6d4d0;
        padding:5px;
        cursor:move;
    }
    h2 #close {
        color:#f90;
        cursor:pointer;
        background:#fff;
        border:1px solid #f90;
        border-radius: 50%;
        padding:0 2px;
    }
    #win h2 .title {
        float: left;
    }
</style>

<div id="win">
    <h2>
        <span class="title">使用提醒</span>
        <span id="close">×</span>
    </h2>

    <div>
        <span style="white-space:normal;">这是首页提示信息<span style="white-space:normal;">这是首页提示信息</span><span style="white-space:normal;">这是首页提示信息</span></span>
    </div>
</div>

<script>
    window.onload = function ()
    {
        var oWin = document.getElementById("win");
        var oBtn = document.getElementsByTagName("button")[0];
        var oClose = document.getElementById("close");
        var oH2 = oWin.getElementsByTagName("h2")[0];
        var bDrag = false;
        var disX = disY = 0;
//        oWin.style.display = "block"
        oClose.onclick = function ()
        {
            oWin.style.display = "none"

        };
        oClose.onmousedown = function (event)
        {
            (event || window.event).cancelBubble = true;
        };
        oH2.onmousedown = function (event)
        {
            var event = event || window.event;
            bDrag = true;
            disX = event.clientX - oWin.offsetLeft;
            disY = event.clientY - oWin.offsetTop;
            this.setCapture && this.setCapture();
            return false
        };
        document.onmousemove = function (event)
        {
            if (!bDrag) return;
            var event = event || window.event;
            var iL = event.clientX - disX;
            var iT = event.clientY - disY;
            var maxL = document.documentElement.clientWidth - oWin.offsetWidth;
            var maxT = document.documentElement.clientHeight - oWin.offsetHeight;
            iL = iL < 0 ? 0 : iL;
            iL = iL > maxL ? maxL : iL;
            iT = iT < 0 ? 0 : iT;
            iT = iT > maxT ? maxT : iT;

            oWin.style.marginTop = oWin.style.marginLeft = 0;
            oWin.style.left = iL + "px";
            oWin.style.top = iT + "px";
            return false
        };
        document.onmouseup = window.onblur = oH2.onlosecapture = function ()
        {
            bDrag = false;
            oH2.releaseCapture && oH2.releaseCapture();
        };
    };
</script>

                        <?php endif;?>

                    </div>
                    <!--js的导入-->
                    <!--<script src="../Public/js/jquery.scrollTo.min.js" type="text/javascript"></script>-->
                    <!--<script src="../Public/js/scroll.js" type="text/javascript"></script>-->
                    <!--<script type="text/javascript" src="../Public/js/jquery.validate.min.js"></script>-->
                    <script type="text/javascript" src="../Public/js/jquery.validation.min.js"></script>

                    <script type="text/javascript" src="../Public/js/messages_zh.js"></script>
                    <script>console.log(<?php echo ($index_tip); ?>);


                    </script>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $(".list_lh").myScroll({
                                speed: 40, //数值越大，速度越慢
                                rowHeight: 68 //li的高度
                            });

                            // IE10+ ...
                            if (typeof history.pushState !== "function") {
                                document.body.className = "fuck-ie6-ie9";
                            }

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

                        });
                        function resetVerifyCode(){
                            var timenow = new Date().getTime();
                            document.getElementById('verifyImage').src='./index.php?g=Home&m=Index&a=verify#'+timenow;
                        }
                        //左侧立即报名


                    </script>
<?php endif;?>