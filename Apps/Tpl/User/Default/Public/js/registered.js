var a,b,c;
	$('#tab1 .duanx').click(function(){
		var m=$(this).parents('form').find('input[name=mobile]').val();
		if(m==''){
			alert('请输入您的手机号码');
			return false;
		}
		var b=60;
		$(this).hide(0);
		$(this).next().show(0);
		$('#tab1 .dengd').html('60 秒重新发送');
		a=setInterval(function(){
			b-=1;
			console.log(b)
			if(b<0){
				b=0;
				clearInterval(a);
				$('#tab1 .dengd').hide(0);
				$('#tab1 .duanx').show(0);
				$('#tab1 .duanx').html('重新发送');
			}
			$('#tab1 .dengd').html(''+b+' 秒重新发送');
			
		},1000)
	})
	$('#tab2 .duanx').click(function(){
		var m=$(this).parents('form').find('input[name=mobile]').val();
		if(m==''){
			alert('请输入您的手机号码');
			return false;
		}
		var b=60;
		$(this).hide(0);
		$(this).next().show(0);
		$('#tab2 .dengd').html('60 秒重新发送');
		c=setInterval(function(){
			b-=1;
			if(b<0){
				b=0;
				clearInterval(c);
				$('#tab2 .dengd').hide(0);
				$('#tab2 .duanx').show(0);
				$('#tab2 .duanx').html('重新发送');
			}
			$('#tab2 .dengd').html(''+b+' 秒重新发送');
		},1000)
	})
	$('.duanx').click(function(){
		var m=$(this).parents('form').find('input[name=mobile]').val();
		$.ajax({
			type:"post",
		 	url:"/User/Register/registered_SMS",
		 	dataType:"json",
		 	data:{'mobile':m},
		 	error:function(msg){
		 		alert('发送失败！请重新发送')
		 	},
		 	success:function(msg){
		 		alert('发送成功！请注意查收')
		 	}
		});
	})
		
// 验证用户名是否存在问题
	$('input[name=username]').blur(function(){
		console.log($(this).val());
		$.ajax({
			type:"get",
			url:"/User/Register/checkusername",
			dataType:"json",
			data:{'username':$(this).val()},
			success:function(msg){
				console.log(msg);
				var tabIndex = 1;
				console.log($('#user').val());
				if($('#user').val() == '0'){
					tabIndex = 2;
				}
				if(msg == false){
					$("#tab"+tabIndex+ ' button[type=submit]').attr('disabled','disabled');


					if($("#tab"+tabIndex+ ' #username-error').length <= 0){
						$("#tab"+tabIndex+ ' input[name=username]').parent().append('<label id="username-error" class="error" for="username">用户名已被注册</label>');
					}else{
						$("#tab"+tabIndex+ ' #username-error').show();
						$("#tab"+tabIndex+ ' #username-error').html('用户名已被注册');
					}
				}else{
					$("#tab"+tabIndex+ ' #username-error').hide();
					$("#tab"+tabIndex+ ' button[type=submit]').attr('disabled',false);
				}
			}
		});
	});
