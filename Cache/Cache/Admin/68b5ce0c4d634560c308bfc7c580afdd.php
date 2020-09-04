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
<table width="100%"  cellpadding=0 cellspacing=0  class="table_form"> 


<tr>
    <th width="130"><?php echo L('config_attach_maxsize');?></th>
    <td><input type="text" class="input-text" name="attach_maxsize" id="attach_maxsize" size="10" value="<?php echo ($attach_maxsize); ?>"/> B </td>
  </tr>
  <tr>
    <th width="130"><?php echo L('config_attach_allowext');?></th>
    <td><input type="text" class="input-text" name="attach_allowext" id="attach_allowextt" size="50" value="<?php echo ($attach_allowext); ?>"/></td>
  </tr>


  <tr>
    <th><?php echo L('config_attach_watermark_enable');?></th>
    <td>
	  <input class="radio_style" name="watermark_enable" value="1"   <?php if($watermark_enable == 1): ?>checked<?php endif; ?> type="radio"> <?php echo L('open_select');?>&nbsp;&nbsp;&nbsp;&nbsp;
	  <input class="radio_style" name="watermark_enable" value="0"   <?php if($watermark_enable == 0): ?>checked<?php endif; ?> type="radio"> <?php echo L('close_select');?>     </td>
  </tr> 

	  <tr>
		<th width="130"><?php echo L('config_attach_watemard_text');?></th>
		<td><input type="text" class="input-text" name="watemard_text" id="watemard_text" size="30" value="<?php echo ($watemard_text); ?>"/></td>
	  </tr>
	<tr>
		<th width="130"><?php echo L('config_attach_watemard_text_size');?></th>
		<td><input type="text" class="input-text" name="watemard_text_size" id="watemard_text_size" size="5" value="<?php echo ($watemard_text_size); ?>"/></td>
	  </tr>
	<tr>
		<th width="130"><?php echo L('config_attach_watemard_text_color');?></th>
		<td><input type="text" class="input-text" name="watemard_text_color" id="watemard_text_color" size="10" value="<?php echo ($watemard_text_color); ?>"/><?php echo L('config_attach_watemard_text_color_tip');?></td>
	  </tr>
	<tr>
		<th width="130"><?php echo L('config_attach_watemard_text_face');?></th>
		<td><input type="text" class="input-text" name="watemard_text_face" id="watemard_text_face" size="20" value="<?php echo ($watemard_text_face); ?>"/><?php echo L('config_attach_watemard_text_face_tip');?></td>
	  </tr>



   
  <tr>
    <th><?php echo L('config_attach_watermark_minwidth');?></th>
    <td><input type="text" class="input-text" name="watermark_minwidth" id="watermark_minwidth" size="5" value="<?php echo ($watermark_minwidth); ?>" /> PX <?php echo L('width');?> <input type="text" class="input-text" name="watermark_minheight" id="watermark_minheight" size="5" value="<?php echo ($watermark_minheight); ?>" /> PX <?php echo L('height');?>
     </td>
  </tr>
  <tr>
    <th width="130"><?php echo L('config_attach_watermark_img');?></th>
    <td><input type="text" name="watermark_img" id="watermark_img" size="30" value="<?php echo ($watermark_img); ?>"/> <?php echo L('config_attach_watermark_img_tip');?></td>
  </tr> 
   <tr>
    <th width="130"><?php echo L('config_attach_watermark_pct');?></th>
    <td><input type="text" class="input-text" name="watermark_pct" id="watermark_pct" size="10" value="<?php echo ($watermark_pct); ?>" /> </td>
  </tr> 
   <tr>
    <th width="130"><?php echo L('config_attach_watermark_quality');?></th>
    <td><input type="text" class="input-text" name="watermark_quality" id="watermark_quality" size="10" value="<?php echo ($watermark_quality); ?>" /> </td>
  </tr>
	<tr>
    <th width="130"><?php echo L('config_attach_watermark_pos_padding');?></th>
    <td><input type="text" class="input-text" name="watermark_pospadding" id="watermark_pospadding" size="10" value="<?php echo ($watermark_pospadding); ?>" /> </td>
  </tr>
  

   <tr>
    <th width="130"><?php echo L('config_attach_watermark_pos');?></th>
    <td>
		<table width="60%" class="radio-label"  cellpadding=0 cellspacing=0 >
		  <tr>
		   <td rowspan="3"><input class="radio_style" name="watermark_pos" value="10" type="radio" <?php if($watermark_pos == 10): ?>checked<?php endif; ?> > <?php echo L('config_attach_watermark_pos_rand');?></td>
			<td><input class="radio_style" name="watermark_pos" value="1" type="radio" <?php if($watermark_pos == 1): ?>checked<?php endif; ?>> <?php echo L('config_attach_watermark_pos_1');?></td>
			  <td><input class="radio_style" name="watermark_pos" value="2" type="radio" <?php if($watermark_pos == 2): ?>checked<?php endif; ?> > <?php echo L('config_attach_watermark_pos_2');?></td>
			  <td><input class="radio_style" name="watermark_pos" value="3" type="radio" <?php if($watermark_pos == 3): ?>checked<?php endif; ?> > <?php echo L('config_attach_watermark_pos_3');?></td>
		  </tr>
		  <tr>
			<td><input class="radio_style" name="watermark_pos" value="4" type="radio" <?php if($watermark_pos == 4): ?>checked<?php endif; ?> > <?php echo L('config_attach_watermark_pos_4');?></td>
			  <td><input class="radio_style" name="watermark_pos" value="5" type="radio"  <?php if($watermark_pos == 5): ?>checked<?php endif; ?>> <?php echo L('config_attach_watermark_pos_5');?></td>
			  <td><input class="radio_style" name="watermark_pos" value="6" type="radio" <?php if($watermark_pos == 6): ?>checked<?php endif; ?>> <?php echo L('config_attach_watermark_pos_6');?></td>
			</tr>
		  <tr>
			<td><input class="radio_style" name="watermark_pos" value="7" type="radio" <?php if($watermark_pos == 7): ?>checked<?php endif; ?>> <?php echo L('config_attach_watermark_pos_7');?></td>
			  <td><input class="radio_style" name="watermark_pos" value="8" type="radio" <?php if($watermark_pos == 8): ?>checked<?php endif; ?>> <?php echo L('config_attach_watermark_pos_8');?></td>
			  <td><input class="radio_style" name="watermark_pos" value="9" type="radio"  <?php if($watermark_pos == 9): ?>checked<?php endif; ?>> <?php echo L('config_attach_watermark_pos_9');?></td>
			</tr>
			</table>
	</td>
	</tr>
 
 
          
  </table> 
<div class="btn">
<INPUT TYPE="submit"  value="<?php echo L('save');?>" class="button" >
<input TYPE="reset"  value="<?php echo L('reset');?>" class="button">
</div>
</form>
</div>
 
</body>
</html>