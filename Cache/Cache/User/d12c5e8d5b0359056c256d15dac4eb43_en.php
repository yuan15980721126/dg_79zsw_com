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
	
</head>
<body>
<?php  $mykc=M('user')->where("id=$_GET[sid]")->find(); if($mykc){ $kclist=M('kecheng')->where("school_id=".$mykc['schoolid'])->order('createtime desc')->select(); }else{ $kclist = array(); } ?><script>console.log(<?php echo json_encode($kclist);?>);</script>
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
									<a class="active" href="/User/Index/mykecheng?sid=<?php echo ($vo['id']); ?>">我的课程及发布新课程</a>
								</dd>
								<?php if($vo['user']) : else :?>
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
				<div id="kecheng_right">
					<div class="kecheng_right_t">
						<!-- <input type="checkbox" name="" id="qx" value="" />
						<span>全选</span>
						<button onclick="deleteall();">批量删除</button> -->
						<div class="huanye fr">
						    <?php echo ($pages); ?>
						</div>
					</div>
					<ul class="list">
						<?php if(is_array($kclist)): $k = 0; $__LIST__ = $kclist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$r): $mod = ($k % 2 );++$k;?><li class="" data-dal = "<?php echo ($r["id"]); ?>">
							<div class="kctop ovef">
								<!-- <input type="checkbox" class="fl" name="" id="" value="<?php echo ($r["id"]); ?>" /> -->
								<p class="fbai fl">发布时间：<?php echo (todate($r["createtime"],'Y-m-d')); ?></p>
							</div>
							<div class="ovef">
								<div class="img fl">
									<img src="<?php echo ($r["scpic"]); ?>" width="125"/>
								</div>
								<div class="con fl">
									<h4 class="f18 c3 nofw" style="padding-bottom: 10px;"><?php echo ($r["title"]); ?></h4>
									<div style="color: #999999;"><?php echo (str_cut(get_safe_replace($r["content"]),100)); ?></div>
								</div>
								<div class="a_groud">
									<a class="xiugai" href="/User/Index/amend?id=<?php echo ($r["id"]); ?>&?sid=8">修改</a>
									 <a class="delete" title="<?php echo ($r["id"]); ?>" href="javascript:;">删除</a>
								</div>
							</div>
						</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul>
					<a href="/User/Index/release?id=<?php echo ($r["id"]); ?>&user=<?php echo ($mykc["user"]); ?>" id="fabu_btn" class="btn">发布新课程</a>
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
<script>
	$(function(){
		//全选
		var flas=false;
		$(document).on('click','#qx',function(){
			if(!flas){
				$('#kecheng_right ul.list li input[type=checkbox]').prop('checked',true);
				flas=true;
			}else{
				$('#kecheng_right ul.list li input[type=checkbox]').prop('checked',false);
				flas=false;
			}
		});
		
		
		$(document).on('click','#kecheng_right ul.list li .a_groud .delete',function(){
			var _this=$(this);
			var id=$(this).attr('title');
			
			var user=<?php echo ($mykc["schoolid"]); ?>;
            if(confirm("确定要删除课程吗？")) {
                $.ajax({
                    type: "post",
                    url: "<?php echo URL('User-Index/kcdelete');?>",
                    async: true,
                    data: {'id': id, 'user': user},
                    dataType: 'json',
                    success: function (msg) {
                        if (msg) {
                            alert('删除成功');
                            _this.parents('li').remove();
                        } else {
                            alert('删除失败');
                        }
                    }
                })
            }
		})
	});	
	
	//全选删除
	
	function deleteall(){
		var _checkbox=$('#kecheng_right ul.list li input[type=checkbox]:checked');
		var user=<?php echo ($mykc["schoolid"]); ?>;
		var id=[];
		for(var i=0;i<_checkbox.length;i++){
			id[i]=_checkbox.eq(i).val();
		}
		console.log(id);
		$.ajax({
                type:"post",
                url:"<?php echo URL('User-Index/kcdelete');?>",
                async:true,
                data:{'id':id,'user':user},
                dataType:'json',
                success:function(msg){
                    if(msg){
                    	alert('删除成功');
                    	window.location.reload();
                    }else {
                    	alert('删除失败');
                    	window.location.reload();
                    }
                }
            });
	}
	function join_zl(){
		alert('你尚未上传用户认证资料，请到[个人资料->机构认证资料]添加您的机构认证资料吧！');
		window.location.href='/User/Index';
	}
</script>

<!--底部 end-->
</body>
</html>