<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo C('DEFAULT_CHARSET');?>" />
<title><?php echo L('welcome');?></title>
<link rel="stylesheet" type="text/css" href="__ROOT__/Public/Css/style.css" /> 
<script type="text/javascript" src="__ROOT__/Public/Js/jquery.min.js"></script> 
<script type="text/javascript" src="__ROOT__/Public/Js/jquery.artDialog.js?skin=default"></script> 
<script type="text/javascript" src="__ROOT__/Public/Js/iframeTools.js"></script>
<script type="text/javascript" src="__ROOT__/Public/Js/jquery.form.js"></script> 
<script type="text/javascript" src="__ROOT__/Public/Js/jquery.validate.js"></script> 
<script type="text/javascript" src="__ROOT__/Public/Js/MyDate/WdatePicker.js"></script> 
<script type="text/javascript" src="__ROOT__/Public/Js/jquery.colorpicker.js"></script> 
<script type="text/javascript" src="__ROOT__/Public/Js/my.js"></script> 
<script type="text/javascript" src="__ROOT__/Public/Js/swfupload.js"></script> 

<script language="JavaScript">
<!--
var ROOT =	 '__ROOT__';
var URL = '__URL__';
var APP	 =	 '__APP__';
var PUBLIC = '__PUBLIC__';
function confirm_delete(url){
	art.dialog.confirm("<?php echo L('real_delete');?>", function(){location.href = url;});
}
//-->
</script>
</head>
<body width="100%">
<div id="loader" ><?php echo L('load_page');?></div>
<div id="result" class="result none"></div>
<div class="mainbox">

<?php if(empty($_GET['isajax'])): ?><div id="nav" class="mainnav_title">
	<div id="lang">
	<?php if(APP_LANG): parse_str($_SERVER['QUERY_STRING'],$urlarr); unset($urlarr[l]); $url='index.php?'.http_build_query($urlarr); ?>
		<?php if(is_array($Lang)): $i = 0; $__LIST__ = $Lang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$langvo): $mod = ($i % 2 );++$i;?><a href="<?php echo ($url); ?>&l=<?php echo ($langvo["mark"]); ?>" <?php if($langvo[mark]==$_SESSION['YP_lang']): ?>class="on"<?php endif; ?>><?php echo ($langvo["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; endif; ?>
	</div>
	<?php if('Feedback'!=$module_name) : ?>
	<ul><a href="<?php echo U($nav[bnav][model].'/'.$nav[bnav][action],$nav[bnav][data]);?>"><?php echo ($nav["bnav"]["name"]); ?></a>|
	<?php if(is_array($nav["nav"])): $i = 0; $__LIST__ = $nav["nav"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vonav): $mod = ($i % 2 );++$i; if($vonav[data][isajax]): ?><a href="javascript:void(0);" onclick="openwin('<?php echo ($vonav[action]); ?>','<?php echo U($vonav[model].'/'.$vonav[action],$vonav[data]);?>','<?php echo ($vonav["name"]); ?>',600,440)"><?php echo ($vonav["name"]); ?></a>|
	<?php else: ?>
	<a href="<?php echo U($vonav[model].'/'.$vonav[action],$vonav[data]);?>"><?php echo ($vonav["name"]); ?></a>|<?php endif; endforeach; endif; else: echo "" ;endif; ?></ul>
	<?php endif;?>
	</div>
	<script>
	//|str_replace=__ROOT__.'/index.php','',###
	var onurl ='<?php echo ($_SERVER["REQUEST_URI"]); ?>';
	jQuery(document).ready(function(){
		$('#nav ul a ').each(function(i){
		if($('#nav ul a').length>1){
			var thisurl= $(this).attr('href');
			thisurl = thisurl.replace('&menuid=<?php echo cookie("menuid");?>','');
			if(onurl.indexOf(thisurl) == 0 ) $(this).addClass('on').siblings().removeClass('on');
		}else{
			$('#nav ul').hide();
		}
		});
		if($('#nav ul a ').hasClass('on')==false){
		$('#nav ul a ').eq(0).addClass('on');
		}
	});
	</script><?php endif; ?>

<form method='post'  id="form1" action="<?php echo U('Config/dosite');?>">
<table cellpadding=0 cellspacing=0 width="100%" class="table_form" >
<tr>
	<th width="140">网站Logo:</th>
	<td><div class="pic_box"  ><!-- <div id="pic_aid_box" style="display:none;"></div> -->
	<input type="text"  id="pic" name="logo"  value="<?php echo ($site_config[logo][value]); ?>" class="input-text" size="40"/><input type="button" class="button" value="上传" onclick="javascript:swfupload('pic_uploadfile','pic','<?php echo L(uploadfiles);?>',1,1,0,10,'jpeg,jpg,png,gif',5,230,'<?php echo ($yourphp_auth); ?>',yesdo,nodo)" />  <a href="javascript:void(0);" onclick="showpicbox($('#pic').val());"> 预览</a></div>
	</td>	
</tr>
<?php if(is_array($site_config)): $i = 0; $__LIST__ = $site_config;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo[varname]=='seo_description'): ?><tr>
	<th width="140"><?php echo ($vo["info"]); ?>:</th>
	<td><textarea id="" rows="4" cols="60"   name="<?php echo ($vo["varname"]); ?>"><?php echo ($vo["value"]); ?></textarea> <?php echo ($vo["varname"]); ?> </td>
</tr>
<?php else: ?>
<?php if($vo[varname]!='logo' && 't_gas'!=$vo['varname'] && 'b_gas'!=$vo['varname']) : ?>
<tr>
	<th width="140"><?php echo ($vo["info"]); ?>:</th>
	<td><input type="text" class="input-text"  name="<?php echo ($vo["varname"]); ?>" value="<?php echo ($vo["value"]); ?>" size="40"><?php echo ($vo["varname"]); ?> </td>
</tr>
<?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>


<tr>
	<th width="140">顶部安装代码:</th>
	<td><textarea id="" rows="4" cols="60"   name="t_gas"><?php echo ($t_gas); ?></textarea> t_gas</td>
</tr>
<tr>
	<th width="140">底部安装代码:</th>
	<td><textarea id="" rows="4" cols="60"   name="b_gas"><?php echo ($b_gas); ?></textarea> b_gas </td>
</tr>

<?php if(is_array($user_config)): $i = 0; $__LIST__ = $user_config;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo['varname']=='index_tip' || 'course_list_tip' == $vo['varname']) : ?>
	<tr>
		<th width="140"><?php echo ($vo["info"]); ?></th>
		<td>
			<input type="radio" name="<?php echo ($vo["varname"]); ?>" value="1" <?php if($vo['value']==1) : ?>checked<?php endif;?>>&nbsp;是&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" name="<?php echo ($vo["varname"]); ?>" value="0" <?php if($vo['value']==0) : ?>checked<?php endif;?>>&nbsp;否
		</td>
	</tr>
	<?php else :?>

<tr>
	<th width="140"><?php echo ($vo["info"]); ?>:</th>
	<td><input type="text" class="input-text"  name="<?php echo ($vo["varname"]); ?>" value="<?php echo ($vo["value"]); ?>" size="40"> &nbsp;<?php echo ($vo["varname"]); ?> </td>
</tr>
	<?php endif; endforeach; endif; else: echo "" ;endif; ?>

</table>
<div class="btn">
<INPUT TYPE="submit"  value="<?php echo L('save');?>" class="button" >
<input TYPE="reset"  value="<?php echo L('reset');?>" class="button">
</div>
</form>
</div>

</body>
</html>