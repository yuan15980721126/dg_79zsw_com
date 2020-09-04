//注册页切换
	$('#myTab>li').click(function(){
		var index = $(this).index()
		$(this).addClass('active').siblings().removeClass('active');
		$('.tab-content form').eq(index).show(0).siblings().hide(0);
		if (0 == index)
		{
			$('#user').val(1);
		}else {
			$('#user').val(0);
		}
	});
	//注册页认证
	$("#tab1").validate({
	    rules: {
	      	username:'required',
	      	mobile:'required',
	      	cord:'required',
	      	title:'required',
	      	industry:'required',
	      	areas:'required',
	      	description:'required',
	      	linkman:'required',
	      	Mobile:'required',
	      	address:'required',
	       	password: {
				required: true,
			    minlength: 5,
			    maxlength: 16,
			},
			repassword: {
				required: true,
			    equalTo: "#password"
			},
	    },
	    messages: {
	      	username:"用户名错误",
	      	mobile:'输入正确的手机号码',
	      	cord:'请输入验证码',
	      	title:'请输入机构名',
	      	industry:'请输入您的行业',
	      	areas:'请输入授课地区',
	      	description:'请输入机构简介',
	      	linkman:'请输入联系人',
	      	Mobile:'请输入正确的手机号码',
	      	address:'请输入地址',
			password: {
				required: '请输入密码',
			    minlength:'密码不能少于5位',
			    maxlength:'密码不能大于16位',
			},
			repassword: {
				required: '请再次输入密码',
				equalTo: "两次密码不一致"
			},
	    }
	});
	$("#tab2").validate({
	    rules: {
	      	username:'required',
	      	cord:'required',
	      	mobile:'required',
	       	password: {
				required: true,
			    minlength: 5,
			    maxlength: 16,
			},
			repassword: {
				required: true,
			    equalTo: "#password2"
			},
	    },
	    messages: {
	      	username:"用户名错误",
	      	cord:'请输入验证码',
	      	mobile:'请输入正确的手机号码',
			
			password: {
				required: '请输入密码',
			    minlength:'密码不能少于5位',
			    maxlength:'密码不能大于16位',
			},
			repassword: {
				required: '请再次输入密码',
				equalTo: "两次密码不一致"
			},
	    }
	});
	
	
	
$(function(){
		//注册页上传图片
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
    //我的消息点击张开内容
    

})