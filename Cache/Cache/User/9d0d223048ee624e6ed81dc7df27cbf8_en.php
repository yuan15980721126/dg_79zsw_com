<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
<head lang="en">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="utf-8">
	<meta name="renderer" content="webkit"><!--360 极速模式-->
	<link rel="shortcut icon" href="/Apps/Tpl/Home/Default/Public/images/favicon.ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>账户管理-东莞79招生网</title>
	<link href="../Public/css/common_header_footer.css" rel="stylesheet" type="text/css" />
	<link href="../Public/css/common_base.css" rel="stylesheet" type="text/css" />
	<link href="../Public/css/member.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/Apps/Tpl/Home/Default/Public/js/jquery.min.js"></script>
	<style>
		.top_qie span, .pic_box .user-name{
			color: #00b083;
			text-decoration: underline;
			white-space: nowrap;
			overflow: hidden;
			text-overflow: ellipsis;
			width: 150px;
			line-height: initial;
			display: inline-block;
			vertical-align: middle;
			margin-top: -5px;
		}
	</style>
</head>
<body>
<div class="header">
	<!--logo搜索-->
	<div class="top_nav">
		<div class="w1200 auto clearfix">
			<div class="top_logo">
				<a class="l" href="/"><img src="<?php echo ($logo); ?>" /></a>
				<div class="top_qie">
					你好！欢迎 <span style="color: #00b083;text-decoration:underline;" title="<?php echo ($vo['username']); ?>"><?php echo ($vo['username']); ?></span> 登录！
					<a href="/User/Login/logout">退出</a>
				</div>
			</div>
			<!--top-->
			<div class="head_r fr">
				<p class="f16" style="color: #00b083;">欢迎来到 79招生网，与大家一起共同学习与进步！</p>
			</div>
		</div>
	</div>
	<!--logo搜索end-->
	<div class="clear"></div>
	<!--导航-->
</div>
<!--导航end-->
<div class="Member_wall" id="Member_Index_index">
	<div class="Member Index index">
		<div class="main">
			<div class="container">
				<div class="main-left">
					<div class="main-left">
						<div class="pic_box">
							<div class="side-adorn">
								<div class="pic-box"><img src="<?php echo ($vo['file']); ?>" alt="<?php echo ($vo['username']); ?>"></div>
							</div>
							<div class="" style="text-align: center;">
								<a href="javascript:;" class="user-name" title="<?php echo ($vo['username']); ?>"><?php echo ($vo['username']); ?></a>
							</div>
							<div class="user-info">
								<dl class="user-info-dl">
									<dd class="">最后登录
										<a href="javascript:;"><?php echo (todate($vo["last_logintime"],'Y-m-d H:i:s')); ?></a>
									</dd>
									<dd class="">注册时间
										<a href="javascript:;"><?php echo (todate($vo["createtime"],'Y-m-d H:i:s')); ?></a>
									</dd>
								</dl>
							</div>
						</div>
						<div class="side-manu">
							<dl>
								<dt>账户管理</dt>
								<dd>
									<a class="active" href="/User/Index">个人资料</a>
								</dd>
								<dd>
									<?php if($vo['user']) : ?>
									<a class="" href="/User/Index/mykecheng?sid=<?php echo ($vo['id']); ?>">我的课程及发布新课程</a>
									<?php else :?>
									<a class="" href="/User/Index/mykecheng2?sid=<?php echo ($vo['id']); ?>">我的课程</a>
									<?php endif;?>
								</dd>
								<?php if($vo['user']) : ?>
								
								<?php else :?>
								<dd>
									<a href="/User/Index/mycoupon?sid=<?php echo ($vo['id']); ?>">优惠卷</a>
								</dd>
								<?php endif;?>
								<dd>
									<a href="/User/Index/news">我的消息</a>
								</dd>
							</dl>
						</div>
					</div>
					

				</div>
				<div class="main-right">
					<div class="tab-panel">
						<div style="padding-bottom: 5px;">我的账户管理</div>
						<ul class="nav nav-tabs" id="myTab">
						    
							<li class="active">
								<a href="javascript:;" >基本资料</a>
							</li>
							
							<li class="">
								<a href="javascript:;">修改头像</a>
							</li>
							<li class="">
								<a href="javascript:;">修改密码</a>
							</li>
							<?php if(cookie('user')==1) : ?>
							<li class="">
								<a href="javascript:;">机构认证资料</a>
							</li>
							<?php endif;?>
						</ul>
						<div class="tab-content">
							<?php if(cookie('user')==1) : ?>
							<form class="tab-pane " id="tab1" method="post" action="<?php echo URL('User-Index/Modify');?>">
								<div class="form-group">
									<label class="col-sm-2 control-label">机构名称：</label>
									<div class="col-sm-7">
										<input name="title" type="text" class="form-control" maxlength="16" required="" value="<?php echo ($vo['title']); ?>">
									</div>
									<div class="col-sm-3"></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">主营行业：</label>
									<div class="col-sm-7">
										<select name="industry" class="form-control" id='industry' >
                                        	<option>请选择</option>
                                        	<?php $k=0;foreach($Categorys as $key=>$r):if(1=="" && $r['isfootermenu']==0){ continue; }if( $r['ismenu']==1 && intval(0)==$r["parentid"] ) :++$k;?><option value="<?php echo ($r["id"]); ?>"><?php echo ($r["catname"]); ?></option><?php endif; endforeach;?>
                                        </select>
									</div>
									<div class="col-sm-3"></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">机构地址：</label>
									<div class="col-sm-7">
										<input name="address" type="text" class="form-control" value="<?php echo ($vo['address']); ?>">
									</div>
									<div class="col-sm-3"></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">联系电话：</label>
									<div class="col-sm-7">
										<input name="mobile" type="number" class="form-control" value="<?php echo ($vo['mobile']); ?>"  maxlength="11">
									</div>
									<div class="col-sm-3"></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">授课对象：</label>
									<div class="col-sm-7">
										<input name="give_instruction" type="text" class="form-control" value="<?php echo ($vo['give_instruction']); ?>">
									</div>
									<div class="col-sm-3"></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">客服QQ：</label>
									<div class="col-sm-7">
										<input name="qq" type="number" class="form-control" value="<?php echo ($vo['qq']); ?>" min="10001" maxlength="11">
									</div>
									<div class="col-sm-3"></div>
								</div>
								<!--<div class="form-group">
									<label class="col-sm-2 control-label">学校主页：</label>
									<div class="col-sm-7">
										<input name="web" type="text" class="form-control" value="<?php echo ($vo['web']); ?>">
									</div>
									<div class="col-sm-3"></div>
								</div>-->
								
								<div class="form-group">
									<label class="col-sm-2 control-label">简      介：</label>
									<div class="col-sm-7">
										<textarea class="form-control text_t"  name="description" ><?php echo ($vo['description']); ?></textarea>
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-sm-7 col-sm-offset-2" align="center">
										<input type="hidden" name="schoolid" id="schoolid" value="<?php echo ($vo["schoolid"]); ?>" />
										<button type="submit" class="btn btn-info">保存修改</button>
									</div>
								</div>
							</form>
							<?php else :?>
							<form class="tab-pane " id="tab1" style="display: block;" method="post" action="<?php echo URL('User-Index/Modify2');?>">
								<div class="form-group">
									<label class="col-sm-2 control-label">用户昵称：</label>
									<div class="col-sm-7">
										<input name="username" type="text" class="form-control" value="<?php echo ($vo['username']); ?>" maxlength="16" required="">
									</div>
									<div class="col-sm-3"></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">真实姓名：</label>
									<div class="col-sm-7">
										<input name="linkman" type="text" class="form-control" value="<?php echo ($vo['linkman']); ?>" maxlength="8">
									</div>
									<div class="col-sm-3"></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">电子邮箱：</label>
									<div class="col-sm-7">
										<input name="email" type="email" class="form-control" value="<?php echo ($vo['email']); ?>">
									</div>
									<div class="col-sm-3"></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">手机号码：</label>
									<div class="col-sm-7">
										<input name="mobile" type="number" class="form-control" value="<?php echo ($vo['mobile']); ?>" min="13000000000" maxlength="11">
									</div>
									<div class="col-sm-3"></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">ＱＱ号码：</label>
									<div class="col-sm-7">
										<input name="qq" type="number" class="form-control" value="<?php echo ($vo['qq']); ?>" min="10001" maxlength="11">
									</div>
									<div class="col-sm-3"></div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">个人签名：</label>
									<div class="col-sm-7">
										<input name="motto" type="text" class="form-control" value="<?php echo ($vo['motto']); ?>">
									</div>
									<div class="col-sm-3"></div>
								</div>
								<div class="form-group" id="areaList">
									<label class="col-sm-2 control-label">所在地区：</label>
									<div class="col-sm-2">
										<input name="address" type="text" class="form-control" value="<?php echo ($vo['address']); ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label">个人简介：</label>
									<div class="col-sm-7">
										<textarea class="form-control text_t"  name="description" ><?php echo ($vo['description']); ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-7 col-sm-offset-2" align="center">
										<button type="submit" class="btn btn-info">保存修改</button>
									</div>
								</div>
							</form>
							<?php endif;?>
							<div class="tab-pane" id="tab2" align="center" >
								<form method="post" action="<?php echo URL('User-Index/Modifypic');?>" enctype="multipart/form-data">
								<div class="scpix_box">
									<div id="up_images">
                                       <img class="fileImg" src="../Public/images/sc_pic.jpg"/ onclick="text()">
                                    </div>
                                    <label for="file" class="scpix_up"></label>
		                            <input type="file" name="file" id="file" class="file" value=" 132" style="outline: none;width: 0;height: 0;	"/>
		                            <p class="p1">请点击按钮选择图片</p>
		                            <p>仅支持JPG、JPEG、GIF、PNG格式的图片文件不能大于2MB</p>
								</div>
								<button type="submit" class="btn btn-info">保存修改</button>
								</form>
							</div>
							<form action="<?php echo URL('User-Index/password');?>" class="form-horizontal tab-pane" id="tab3" method="post" onsubmit="return repasswrod();">
								<div class="form-group">
									<label class="control-label col-sm-2">用 户 名</label>
									<div class="col-sm-7">
										<input type="text" value="<?php echo ($vo['username']); ?>" class="form-control" disabled="">
									</div>
									<font class="col-sm-3" color="silver">用户名不能更改</font>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2">原 密 码</label>
									<div class="col-sm-7">
										<input name="oldpassword"  type="password" class="form-control" placeholder="原密码" required="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2">新 密 码</label>
									<div class="col-sm-7">
										<input name="password" id="mpassword" type="password" class="form-control" placeholder="新密码" pattern="\w{6,32}" required="">
									</div>
								</div>
								<div class="form-group">
									<label class="control-label col-sm-2">确认密码</label>
									<div class="col-sm-7">
										<input name="repassword" type="password" class="form-control" id="mrepassword" placeholder="重复输入一次新密码" required="">
									</div>
									<font class="col-sm-3" color="silver">重复上面的密码</font>
								</div>
								<div class="col-sm-7 col-lg-offset-2" align="center">
									<INPUT TYPE="hidden"  name="dosubmit" value="<?php echo L('dosubmit');?>" class="button" >
									<button type="submit" class="btn btn-primary btn-info">保存修改</button>
								</div>
							</form>
							<?php if(cookie('user')==1) : ?>
							<form action="" class="form-data tab-pane active"  style="display: block;" id="tab4" method="post" onsubmit="">
								<lab>注：机构认证资料的种类：法人（或负责人）身份证照片、营业执照照片、机构招牌照片等等；选择其中之一上传即可,认证后您可以获得更加优先的推广机会</lab>
								<div class="form-group">
									<label class="control-label col-sm-2">资料上传：</label>
						            <div class="col-sm-7">
										<div id='container'>
											<button id='addfile' class="add-file" type="button">浏览</button>
											<button id='up-file' class="up-file" type="button">上传</button>
										</div>
									</div>
									<div class="uploadMsg col-sm-3">
                                        <span>共 <i class="lv">4</i> 张，还能上传 <i class="lv"><?php echo 4-count($orgimages); ?></i> 张</span>
                                    </div>
						        </div><script>console.log('<?=count($orgimages)?>')</script>
						        <div class="form-group">
						            <label class="control-label col-sm-2"> </label>
						            <div class="col-sm-9">
						                <div class="file-list" <?php if(count($orgimages)) : ?>style="display: block;"<?php endif;?>>
						                    <ul id='file-list'>
						                        <?php if(is_array($orgimages)): $i = 0; $__LIST__ = $orgimages;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($i % 2 );++$i; $time = time()+$i; ?>
						                        	<li class="pic_list" id="<?php echo ($time); ?>">
						                        		<div class="file-img">
						                        			<img src="<?php echo ($r); ?>">
						                        		</div>
						                        		<div class="file-text">
						                        			<a class="cg-del" href="javascript:void(0);" data-val="<?php echo ($time); ?>">移除</a>
						                        		</div>
						                        		<span class="progress" style="width: 100%"></span>
						                        	</li><?php endforeach; endif; else: echo "" ;endif; ?>
						                    </ul>
						                </div>
						            </div>
						        </div>
							</form>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
<link rel="stylesheet" href="../Public/css/ziliao.css" />
<script>
	function repasswrod(){
		var pass1=$('#mpassword').val();
		var pass2=$('#mrepassword').val();
		if(pass1!=pass2){
			alert('两次密码不一致');
			return false
		}
	}
</script>
<script type="text/javascript" src="../Public/js/plupload/moxie.js"></script>
<script type="text/javascript" src="../Public/js/plupload/plupload.dev.js"></script>
<script type="text/javascript" src="../Public/js/plupload/jUploader.js"></script>
<script>
    var juploader = new jUploader();
    juploader.start();
    // 上传完， 可以通过juploader.uploadFiles()方法得到最终需要上传的文件对象（此对象为数组， 每个对象是每上传一个文件后，服务器返回过来的json对象）
    /*$("#up-file").click(function(){
		console.log(juploader.uploader())
    })*/
</script>
<!--底部-->
<div class="footer mt20 clear">
	<div class="site_map">
		<div class="site_map_con site_map_con w1100 auto">
			<ul class="inline_box">
				<li class="inline_any" style="background:#fff;padding:8px;width: 112px;text-align: center;margin-right: 111px;">
					<?php $r = M('Block')->where(" 1  and lang=2 and pos='weima' ")->find(); if ($r):?><p><img src="<?php echo ($r["image1"]); ?>" /></p><?php endif;?>
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
</p> | Designed bymqu.cn</li>
		</ul>
	</div>
</div>
<script>
	$(function(){
		//行业选择
		var hy = parseInt(<?php echo ($vo['industry']); ?>);
		
		for(var i=0;i<$('#industry option').length;i++){
			var hyb=parseInt($('#industry option').eq(i).val());
			
			if(hyb==hy){
				
				$('#industry option').eq(i).attr('selected',true);
			}else{
					
				$('#industry option').eq(i).attr('selected',false);
			}
		}
		$('.nav-tabs>li').click(function(){
			var index = $(this).index();
			$(this).addClass('active').siblings().removeClass('active');
			$('.tab-content .tab-pane').eq(index).css('display','block').siblings().css('display','none')
		});
		
		
		
		$(".file").change(function(){
        var fileImg = $(".fileImg");
        var explorer = navigator.userAgent;
        var imgSrc = $(this)[0].value;
        if (explorer.indexOf('MSIE') >= 0) {
            if (!/\.(jpg|jpeg|png|JPG|PNG|JPEG)$/.test(imgSrc)) {
                imgSrc = "";
                fileImg.attr("src","../Public/images/sc.jpg");
                alert('只允许上传jpg,jpeg,png,JPG,PNG,JPEG')
                return false;
            }else{
                fileImg.attr("src",imgSrc);
            }
        }else{
            if (!/\.(jpg|jpeg|png|JPG|PNG|JPEG)$/.test(imgSrc)) {
                imgSrc = "";
                fileImg.attr("src","../Public/images/sc.jpg");
                alert('只允许上传jpg,jpeg,png,JPG,PNG,JPEG')
                return false;
            }else{
                var file = $(this)[0].files[0];
                var url = URL.createObjectURL(file);
                fileImg.attr("src",url);
            }
        }
		if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion.match(/8./i)=="8."){ 
		alert("IE浏览器暂不支持预览图片"); 
		}
    });
	});
	
</script>

<!--底部 end-->
</body>
</html>