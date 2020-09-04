<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
	<script type="text/javascript" src="/Apps/Tpl/Home/Default/Public/js/jquery.min.js"></script>
	
</head>
<body>

<div class="header">
	<!--logo搜索-->
	<div class="top_nav">
		<div class="w1200 auto clearfix">
			<div class="top_logo">
				<a class="l" href="/"><img src="<?php echo ($logo); ?>" /></a>
				<div class="top_qie">
					用户登录
				</div>
			</div>
			<!--top-->
			<div class="head_r fr">
				<a href="/">分站首页</a>
				<a href="/User/Login">登录</a>
				<a href="/User/Register/">注册</a>
			</div>
		</div>
	</div>
	<!--logo搜索end-->
	<div class="clear"></div>
	<!--导航-->
</div>
<!--导航end-->
<script type="text/javascript">
var APP	 =	 '__APP__';
var ROOT =	 '__ROOT__';
var PUBLIC = '__PUBLIC__';
</script>
<div id="member">
	
<link rel="stylesheet" type="text/css" href="../Public/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../Public/css/common_base.css"/>
<div class="main" id="zhuce">
		<div class="zhucu_con" style="">
                <div class="panel panel-default">
                    <ul class="nav nav-tabs" id="myTab">
                        <li class="active"><a href="javascript:;" >机构会员注册</a></li>
                        <li class=""><a href="javascript:;" >普通会员注册</a></li>
                    </ul>
                    <div class="tab-content">
                        <form enctype='multipart/form-data' method="post" action="<?php echo U('User/Register/doreg');?>" class="tab-pane form-horizontal" id="tab1" style="display: block;">
                        	<input type="hidden" name="user" id="user" value="1" />
                        	<input type="hidden" id="forward" name="forward" value="<?php echo ($forward); ?>"/>
                        	<div class="panel-body">
                                <div class="form-group">
                                    <div class="col-sm-2" align="center" style="color:#F15771; font-weight: bold;"><h4>基本信息</h4></div> 
                                </div>
                                <div class="form-group">
                                    <span class="col-sm-2 control-span">用 户 名：</span>
                                    <div class="col-sm-6">
                                        <input name="username" type="text" class="form-control" placeholder="请输入用户名" required>
                                    </div>
                                    <span class="col-sm-4"><font color="red">*</font></span>
                                </div>
                                <div class="form-group">
                                    <span class="col-sm-2 control-span">登录密码：</span>
                                    <div class="col-sm-6">
                                        <input name="password" id="password" type="password" class="form-control" placeholder="请输入密码" required>
                                    </div>
                                    <span class="col-sm-4"><font color="red">*</font></span>
                                </div>
                                <div class="form-group">
                                    <span class="col-sm-2 control-span">确认密码：</span>
                                    <div class="col-sm-6">
                                        <input name="repassword" type="password" class="form-control" placeholder="请确认密码" required>
                                    </div>
                                    <span class="col-sm-4" style="color: #666666;"><font color="red">*</font> 重复一次上面的密码</span>
                                </div>
                                <div class="form-group">
                                    <span class="col-sm-2 control-span">手机号码：</span>
                                    <div class="col-sm-6">
                                        <input name="mobile" type="number" class="form-control" placeholder="请输入手机号码" required>
                                    </div>
                                   	<span class="col-sm-4"><font color="red">*</font></span>
                                </div>
                                <div class="form-group">
                                    <span class="col-sm-2 control-span">短信验证码：</span>
                                    <div class="col-sm-3">
                                        <input name="cord" type="number" class="form-control" placeholder="请输入验证码" maxlength="6" required>
                                    </div>
                                    <div class="col-sm-3 sm3">
                                        <button type="button" class="btm duanx" id="duanjg">点击获取短信验证码</button>
                                        <button type="button" class="btm dengd" id="" style="display: none;">点击获取短信验证码</button>
                                    </div>
                                    <span class="col-sm-4"><font color="red" >*</font></span>
                                </div>

                                <div class="form-group">
                                    <span class="col-sm-2 control-span">电子邮箱：</span>
                                    <div class="col-sm-6">
                                        <input name="email" type="email" class="form-control" placeholder="请输入电子邮箱">
                                    </div>
                                    <span class="col-sm-4"></span>
                                </div>

                                <br>
                                <div class="form-group">
                                    <div class="col-sm-2" align="center" style="color:#F15771; font-weight: bold;"><h4>机构信息</h4></div> 
                                </div>
                                
                                <div class="form-group"><div class="col-sm-8" align="center"><font color="gray">以下信息请认真填写(不真实的信息将会导致审核失败) <font color="red">*</font> 号为必填项</font></div><span class="col-sm-4"></span></div>

                                <div class="form-group">
                                    <span class="col-sm-2 control-span">机构名称：</span>
                                    <div class="col-sm-6">
                                        <input name="title" type="text" class="form-control" placeholder="请输入机构名称" required>
                                    </div>
                                    <span class="col-sm-4"><font color="red">*</font></span>
                                </div>
                                
                                <div class="form-group">
                                    <span class="col-sm-2 control-span">主营行业：</span>
                                    <div class="col-sm-6">
                                        <select name="industry" id='industry' >
                                        	<option>请选择</option>
                                        	<?php $k=0;foreach($Categorys as $key=>$r):if(1=="" && $r['isfootermenu']==0){ continue; }if( $r['ismenu']==1 && intval(0)==$r["parentid"] ) :++$k;?><option value="<?php echo ($r["id"]); ?>"><?php echo ($r["catname"]); ?></option><?php endif; endforeach;?>
                                        </select>                                 
                                    </div>
                                    <span class="col-sm-4"><font color="red">*</font></span>
                                </div>
                                <div class="form-group">
                                    <span class="col-sm-2 control-span">授课地区：</span>
                                    <div class="col-sm-6">
                                        <input name="areas" type="text" class="form-control" placeholder="请输入授课地区" required>
                                    </div>
                                    <span class="col-sm-4"><font color="red">*</font></span>
                                </div>
                                <div class="form-group">
                                    <span class="col-sm-2 control-span">机构简介：</span>
                                    <div class="col-sm-6">
                                        <textarea name="description" rows="4" class="form-control" placeholder="请输入机构简介" required></textarea>
                                    </div>
                                    <span class="col-sm-4"><font color="red">*</font></span>
                                </div>
                                <div class="form-group">
                                    <span class="col-sm-2 control-span">联 系 人：</span>
                                    <div class="col-sm-6">
                                        <input name="linkman" type="text" class="form-control" placeholder="请输入联系人" required>
                                    </div>
                                    <span class="col-sm-4"><font color="red">*</font></span>
                                </div>
                                <div class="form-group">
                                    <span class="col-sm-2 control-span">联系电话：</span>
                                    <div class="col-sm-6">
                                        <input name="tel" type="number" class="form-control" min="13000000000" max="18999999999" placeholder="请输入手机号码" required>
                                    </div>
                                    <span class="col-sm-4"><font color="red">*</font></span>
                                </div>
                                <div class="form-group">
                                    <span class="col-sm-2 control-span">联系地址：</span>
                                    <div class="col-sm-6">
                                        <input name="address" type="text" class="form-control" placeholder="请输入详细地址" required>
                                    </div>
                                    <span class="col-sm-4"><font color="red">*</font></span>
                                </div>
                                <div class="form-group upload">
                                    <span class="col-sm-2 control-span">学校形象图片：</span>
                                    <div id="up_images">
                                       <img class="fileImg" src="../Public/images/up_img.jpg"/>
                                       
                                    </div>
                                    <div class="up_r">
                                    	<div class="txt">为更好的展示您学校形象，请上传清晰照片，<br	>
并最好在上传前将尺寸大小调整为302*302像素仅限一张，大小不超过200K<br	>
请上传学校校门、LOGO标志、培训环境照片</div>
										<label class="up" for="file">上传图片</label>
		                              	<input type="file" name="file" id="file" class="file" value=" 132" style="width: 0;height: 0;outline: none;" required=""/>      	
                                    </div>
                                    <font color="red">*</font>
                                </div>
								<div class="form-group">
                                    <span class="col-sm-2 control-span"></span>
                                    <span class="col-sm-5"><input type="checkbox" checked /> 我已阅读，理解并接受 <a href="/agreement/" class="red" target="_blank">《会员注册条款 》</a></span>
                                    <font color="red">*</font>
                                </div>
                                <div class="col-sm-6" align="center"><button type="submit" class="btn btn-warning">立即注册</button></div></div>
                        </form>

                        <form method="post" action="<?php echo U('User/Register/doreg2');?>" class="tab-pane form-horizontal" id="tab2" >
                        	<input type="hidden" name="user" id="user" value="0" />
                        	<input type="hidden" id="forward" name="forward" value="<?php echo ($forward); ?>"/>
                            <div class="panel-body">
                                <div class="form-group">
                                    <span class="col-sm-2 control-span">用 户 名：</span>
                                    <div class="col-sm-6">
                                        <input name="username" type="text" class="form-control" placeholder="请输入用户名">
                                    </div>
                                    <span class="col-sm-4"><font color="red">*</font></span>
                                </div>
                                <div class="form-group">
                                    <span class="col-sm-2 control-span">登录密码：</span>
                                    <div class="col-sm-6">
                                        <input name="password" id="password2" type="password" class="form-control" >
                                    </div>
                                    <span class="col-sm-4"><font color="red">*</font></span>
                                </div>
                                <div class="form-group">
                                    <span class="col-sm-2 control-span">确认密码：</span>
                                    <div class="col-sm-6">
                                        <input name="repassword" type="password" class="form-control" placeholder="请确认密码" pattern="\w{6,32}" required="">
                                    </div>
                                    <span class="col-sm-4"><font color="red">*</font> 重复一次上面的密码</span>
                                </div>

                                <div class="form-group">
                                    <span class="col-sm-2 control-span">手机号码：</span>
                                    <div class="col-sm-6">
                                        <input name="mobile" type="number" class="form-control" placeholder="请输入手机号码">
                                    </div>
                                    <span class="col-sm-4"></span>
                                </div>
								<div class="form-group">
                                    <span class="col-sm-2 control-span">短信验证码：</span>
                                    <div class="col-sm-3">
                                        <input name="cord" type="number" class="form-control" placeholder="请输入验证码" maxlength="6" required>
                                    </div>
                                    <div class="col-sm-3 sm3">
                                        <button type="button" class="btm duanx" id="duanxpt">点击获取短信验证码</button>
                                        <button type="button" class="btm dengd" id="" style="display: none;">点击获取短信验证码</button>
                                    </div>
                                    <span class="col-sm-4"><font color="red" >*</font></span>
                                </div>
                                <div class="form-group">
                                    <span class="col-sm-2 control-span">电子邮箱：</span>
                                    <div class="col-sm-6">
                                        <input name="email" type="email" class="form-control" placeholder="请输入电子邮箱">
                                    </div>
                                    <span class="col-sm-4"></span>
                                </div>
								<div class="form-group">
                                    <span class="col-sm-2 control-span"></span>
                                    <span class="col-sm-5"><input type="checkbox" checked /> 我已阅读，理解并接受 <a href="/agreement/" class="red" target="_blank">《会员注册条款 》</a></span>
                                    <font color="red">*</font>
                                </div>
                                <div class="col-sm-8" align="center"><button type="submit" class="btn btn-warning">立即注册</button></div></div>
                        </form>
                 </div><!--tab_content-->     
             </div>
            </div>
            <div class="main-right" style="width:200px; float:left;">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="font-size: 16px;">如果您已经是会员</div><br>
                        <a href="/User/Login" class="btn" id="loginBtn">点此登录</a>
                    </div>
                </div>
            </div>
</div>
<script type="text/javascript" src="../Public/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../Public/js/messages_zh.js"></script>
<script type="text/javascript" src="../Public/js/new_file.js"></script>
<script type="text/javascript" src="../Public/js/registered.js"></script>

</div>
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

<!--底部 end-->


</body>
</html>