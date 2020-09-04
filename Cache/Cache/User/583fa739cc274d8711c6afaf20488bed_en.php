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
	<title>用户登录-东莞79招生网</title>
	<link href="../Public/css/common_header_footer.css" rel="stylesheet" type="text/css" />
	<link href="../Public/css/common_base.css" rel="stylesheet" type="text/css" />
	<link href="../Public/css/member.css" rel="stylesheet" type="text/css" />
	<link href="/umeditor/themes/default/css/umeditor.min.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/Apps/Tpl/Home/Default/Public/js/jquery.min.js"></script>
<style>
form.edui-image-form {padding-left:0px !important}
</style>
</head>
<body>
<?php
 $kcshow=M('kecheng')->where("id=$_GET[id]")->find(); if($kcshow){ $parenid=M('Category')->where('id='.$kcshow['catid'])->find(); } ?>
<div class="header">
	<!--logo搜索-->
	<div class="top_nav">
		<div class="w1200 auto clearfix">
			<div class="top_logo">
				<a class="l" href="/"><img src="<?php echo ($logo); ?>" /></a>
				<div class="top_qie">
					你好！欢迎 <span style="color: #00b083;text-decoration:underline;"><?php echo ($vo["username"]); ?></span> 登录！
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
								<div class="pic-box"><img src="<?php echo ($vo['file']); ?>" alt="noxyes"></div>
							</div>
							<div class="">
								<a href="javascript:;" class="user-name"><?php echo ($vo["username"]); ?></a>
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
									<a href="/User/Index">个人资料</a>
								</dd>
								<dd>
									<a class="active" href="/User/Index/mykecheng?sid=<?php echo ($vo['id']); ?>">我的课程</a>
								</dd>
								<?php if($vo['user']) : else :?>
								<dd>
									<a href="/User/Index/mycoupon?sid=<?php echo ($vo['id']); ?>">我的优惠券</a>
								</dd>
								<?php endif;?>
							</dl>
						</div>
					</div>
					

				</div>
				<div id="fabu_right">
					<div class="ftop">修改课程</div>
					<form enctype="multipart/form-data" class="tab-pane active" id="fabu" style="display: block;" method="post" action="<?php echo URL('User-Index/amends');?>">
						<div class="form-group">
							<label class="col-sm-2 control-label">课程名称：</label>
							<div class="col-sm-7">
								<input name="title" type="text" class="form-control" maxlength="30" value="<?php echo ($kcshow["title"]); ?>" required>
							</div>
							<div class="col-sm-3"><i class="red">*</i></div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">课程栏目：</label>
							<div class="col-sm-7">
								<select name="" class="form-control industry2" id='industry' >
                                	<option>请选择</option>
                                	<?php $ks=0;foreach($Categorys as $key=>$r):if(1=="" && $r['isfootermenu']==0){ continue; }if( $r['ismenu']==1 && intval(0)==$r["parentid"] ) :++$ks; if($r['catname'] !== '在线课程' && $r['catname'] !== '培训专栏') : ?>
										<option value="<?php echo ($r["id"]); ?>" <?php if($r[id]==$parenid[parentid]) : ?> selected="true" <?php endif;?>><?php echo ($r["catname"]); ?></option>
										<?php endif; endif; endforeach;?>
                                </select>
                                <select name="industry" class="form-control industry2" id='industry2' >
                                	<?php $ks=0;foreach($Categorys as $key=>$r):if(1=="" && $r['isfootermenu']==0){ continue; }if( $r['ismenu']==1 && intval($parenid[parentid])==$r["parentid"] ) :++$ks;?><option value="<?php echo ($r["id"]); ?>" <?php if($r[id]==$parenid[id]) : ?> selected="true" <?php endif;?>><?php echo ($r["catname"]); ?></option><?php endif; endforeach;?>
                                </select>
							</div>
							<div class="col-sm-3"><i class="red">*</i></div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">授课地区：</label>
							<div class="col-sm-7">
								<select name="kccity" class="form-control " >
                                	<option>请选择</option>
                                	<?php $k=0;foreach($Categorys as $key=>$r):if(1=="" && $r['isfootermenu']==0){ continue; }if( $r['ismenu']==1 && intval(69)==$r["parentid"] ) :++$k;?><option value="<?php echo ($r["id"]); ?>" <?php if($r['id']==$kcshow['kccity']) : ?> selected="selected"<?php endif;?>><?php echo ($r["catname"]); ?></option><?php endif; endforeach;?>
                                </select>
							</div>
							<div class="col-sm-3"><i class="red">*</i></div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">授课对象：</label>
							<div class="col-sm-7">
								<input name="dx" type="text" class="form-control" value="<?php echo ($kcshow["dx"]); ?>" >
							</div>
							<div class="col-sm-3"></div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">学制：</label>
							<div class="col-sm-7">
								<input name="systme" type="text" class="form-control" value="<?php echo ($kcshow["systme"]); ?>">
							</div>
							<div class="col-sm-3"></div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">网上报名：</label>
							<div class="col-sm-7">
								<input name="pc" type="text" class="form-control" value="<?php echo ($kcshow["pc"]); ?>" ><label class="control-label">&nbsp;</label>
							</div>
							<div class="col-sm-3"></div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">线下原价：</label>
							<div class="col-sm-7">
								<input name="price" type="text" class="form-control" value="<?php echo ($kcshow["price"]); ?>" ><label class="control-label">&nbsp;</label>
							</div>
							<div class="col-sm-3"></div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">授课地址：</label>
							<div class="col-sm-7">
								<input name="address" type="text" class="form-control" value="<?php echo ($kcshow["address"]); ?>"  required>
							</div>
							<div class="col-sm-3"><i class="red">*</i></div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">关注人数：</label>
							<div class="col-sm-7">
								<input name="guanzhu" type="text" class="form-control" value="<?php echo ($kcshow["guanzhu"]); ?>">
							</div>
							<div class="col-sm-3"></div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-2 control-label">课程详情：</label>
							<div class="col-sm-7">
								<script id="content" name="content" type="text/plain"><?php echo ($kcshow["content"]); ?></script>
							</div>
							<div class="col-sm-1"><i class="red">*</i></div>
						</div>
						<div class="form-group upload">
                            <label class="col-sm-2 control-label">课程头像：</label>
                            <div id="up_images">
                               <img class="fileImg" src="<?php echo ($kcshow["scpic"]); ?>"/>
                               
                            </div>
                            <div class="up_r">
                            	<div class="txt">为更好的展示您的课程，请上传清晰照片，<br	>
并最好在上传前将尺寸大小调整为302*302像素仅限一张，大小不超过200K<br	>
请上传学校校门、LOGO标志、培训环境照片</div>
								<label class="up" for="file">上传图片</label>
                              	<input type="file" name="file" id="file" class="file" value="" style="width: 0;height: 0;outline: none;"/>      
                            </div>
                        </div>
						<div class="form-group">
							<div class="col-sm-7 col-sm-offset-2" align="center">
								<input type="hidden" name="id" id="" value="<?php echo ($kcshow["id"]); ?>" />
								<input type="hidden" name="file2"  value="<?php echo ($kcshow["scpic"]); ?>" />
								<button type="submit" class="btn btn-info">保存修改</button>
								<button type="reset" class="btn btn-info">内容重置</button>
							</div>
						</div>
					</form>
				</div>			
			</div>
		</div>
		
	</div>
</div>
<link rel="stylesheet" href="../Public/css/ziliao.css" />
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

<script src="../Public/js/jquery.validate.min.js"></script>
<script src="../Public/js/messages_zh.js"></script>
<script type="text/javascript" src="../Public/js/new_file.js"></script>
<script type="text/javascript" src="/umeditor/umeditor.config.js"></script>
<script type="text/javascript" src="/umeditor/umeditor.min.js"></script>
<script>

(function(){
	$('input[name="pc"],input[name="price"]').blur(function(){
		// var val = parseInt($(this).val());
		// if(!val)
		// {
		// 	val = 0;
		// }
		// $(this).val(val.toFixed(0));
	});
})();
UM.getEditor('content', {
	imageUrl : '/User/Post/uploadImage',
	imagePath: '/',
	initialFrameWidth:700
});
	$("#fabu").validate({
	    rules: {
	      	
	    },
	    messages: {
	      	title:"请输入课程名称",
	      	dx:'请输入授课对象',
	      	cord:'请输入验证码',
	      	address:'请输入授课地址',
	      	content:'请输入课程详情',
	      	guanzhu:'请输入关注人数',
			
	    }
	});
	//选择栏目
	$('#industry').change(function(){
		var id = $('#industry').val();
		console.log(id);
		var html = ''
		$.ajax({
            type:"post",
            url:"<?php echo URL('User-Index/column');?>",
            async:true,
            data:{'id':id},
            dataType:'json',
            success:function(msg){
                if(msg){
                	for (var i=0;i<msg.length;i++){
                		html += '<option value="'+msg[i].id+'">'+msg[i].catname+'</option>'
                	}
                	$('#industry2').html(html);
                }else {
                	html = '<option value="5">请先选择课程栏目</option>'
                }
            }
        })
	})
	
</script>
<!--底部 end-->
</body>
</html>