<?php
/**
 * RegisterAction.class.php (前台会员注册模块)
 *
 * @package      	YOURPHP
 * @author          liuxun QQ:147613338 <admin@yourphp.cn>
 * @copyright     	Copyright (c) 2008-2011  (http://www.yourphp.cn)
 * @license         http://www.yourphp.cn/license.txt
 * @version        	企业网站管理系统 v2.1 2011-03-01 yourphp.cn $
 */
if(!defined("Yourphp")) exit("Access Denied");
class RegisterAction extends BaseAction
{
	
	function _initialize()
    {
		parent::_initialize();
		$this->dao = M('User');
		$_GET =get_safe_replace($_GET);
		if(empty($this->member_config['member_register'])) $this->error(L('close_reg'));
    }
    public function index()
    {
		if( cookie('auth')){
			$this->assign('forward','');
			$this->assign('jumpUrl','/');
			$this->success(L('login_ok'));
		}
		$this->assign('bcid',0);
        $this->display();
    }

	public function doreg()
	{
		$username = get_safe_replace($_POST['username']);
        $password = get_safe_replace($_POST['password']);
		$email = get_safe_replace($_POST['email']);
		$mobile = get_safe_replace($_POST['mobile']);
		$title = get_safe_replace($_POST['title']);
		$industry = get_safe_replace($_POST['industry']);
		$areas = get_safe_replace($_POST['areas']);
		$description = get_safe_replace($_POST['description']);
		$linkman = get_safe_replace($_POST['linkman']);
		$tel = get_safe_replace($_POST['tel']);
		$cord = get_safe_replace($_POST['cord']);
		$file = get_safe_replace($_POST['file']);
		$user = get_safe_replace($_POST['user']);
		$address = get_safe_replace($_POST['address']);
		
        $verifyCode =$_POST['verifyCode'];
        //判断手机验证码
        $cord_moble=session('tel'.$mobile);
		if($cord!=$cord_moble){
			$this->error(L('手机验证码错误'));
		}
        // 检查用户名
        if($this->dao->getByUsername($username)){
            $this->error(L('用户名已被注册'));
        }
        
        import("@.ORG.UploadFile");
        $upload = new UploadFile(); 
        //$upload->supportMulti = false;
        //设置上传文件大小 
        $upload->maxSize = $this->Config['attach_maxsize']; 
        $upload->autoSub = true; 
        $upload->subType = 'date';
        $upload->dateFormat = 'Ym';
        //设置上传文件类型 
        $upload->allowExts = explode(',', $this->Config['attach_allowext']); 
        //设置附件上传目录 
        $upload->savePath = UPLOAD_PATH; 
         //设置上传文件规则 
        $upload->saveRule = uniqid; 

        //删除原图 
        $upload->thumbRemoveOrigin = true; 
        if(!$upload->upload()) {
             $this->error(L('请上传您的学校图片'));
        }else{
            //取得成功上传的文件信息 
            $uploadList = $upload->getUploadFileInfo();
        }
        $file=str_replace('.','',$uploadList[0]['savepath']).$uploadList[0]['savename'];
        //var_dump($file);die();
        if(empty($username) || empty($password) || empty($email)){
           $this->error(L('empty_username_empty_password_empty_email'));
        }
//		if($this->member_config['member_login_verify'] && md5($verifyCode) != $_SESSION['verify']){
//         $this->error(L('error_verify'));
//      }
// 		if($user==1){
// 			$status = 0;
// 		}else{
// 			$status = 1;
// 		}
		$status = 1;
		
		if($this->member_config['member_emailcheck']){ $status = 1; $groupid=5 ;}
		$groupid = $groupid ? $groupid : 3;
		$data=array();
		$data['username']= $username;
		$data['email']=$email;
		$data['groupid']= $user==1 ? 6 : 3;
		$data['mobile']=$mobile;
		$data['title']=$title;
		$data['industry']=$industry;
		$data['areas']=$areas;
		$data['description']=$description;
		$data['linkman']=$linkman;
		$data['tel']=$tel;
		$data['address']=$address;
		$data['file']=$file;
		$data['user']=$user;								
		$data['login_count']=1;
		$data['createtime']=time();
		$data['updatetime']=time();
		$data['last_logintime']=time();
		$data['reg_ip']=get_client_ip();
		$data['status']=$status;
		$authInfo['status']=$status;
		$authInfo['password'] = $data['password'] = sysmd5($password);
		$authInfo['user'] = $user;
		
		if($r=$this->dao->create($data)){
			$userid = $this->dao->add();
			if(false!==$userid){
				$authInfo['id'] = $uid=$this->dao->getLastInsID();
				$authInfo['groupid'] = $ru['role_id']=$data['groupid'];
				$ru['user_id']=$uid;
				$roleuser=M('RoleUser');
				$roleuser->add($ru);
				
				//保存机构信息
				if($user==1){
					$uschool = M("school");
					$data['dianhua'] = $mobile;
					$data['title'] = $title;
					$data['industryx'] = $industry;
					$data['file'] = $file;
					$data['address']=$address;
					$data['description'] = $description;
					$data['status'] = 1;
					$data['lang'] = 2;
					$schoolid=$uschool->add($data);
					if($schoolid>0)
					{
						$user = M('User');
						$user->find($userid);
						$user->schoolid = $schoolid;
						$user->save();
					}
				}
				//注册成功系统消息
				$stitle = '恭喜你，注册成功！'.$username;
				$scontent = '恭喜你，注册成功！79教育平台欢迎您的到来。快去发布您的课程吧！';
				$this->get_messages($stitle,$scontent,$userid);
				
				if($this->member_config['member_emailcheck']){
					$yourphp_auth = authcode($uid."-".$username."-".$email, 'ENCODE',$this->sysConfig['ADMIN_ACCESS'],3600*24*3);//3天有效期
					$url = 'http://'.$_SERVER['HTTP_HOST'].U('User/Login/regcheckemail?code='.$yourphp_auth);
					$click = "<a href=\"$url\" target=\"_blank\">".L('CLICK_THIS')."</a>";
					$message = str_replace(array('{click}','{url}','{sitename}'),array($click,$url,$this->Config['site_name']),$this->member_config['member_emailchecktpl']);
					$r = sendmail($email,L('USER_REGISTER_CHECKEMAIL').'-'.$this->Config['site_name'],$message,$this->Config);
					$this->assign('send_ok',1);
					$this->assign('username',$username);
					$this->assign('email',$email);
					$this->display('Login:emailcheck');
					exit;
				}
				
				$yourphp_auth_key = sysmd5($this->sysConfig['ADMIN_ACCESS'].$_SERVER['HTTP_USER_AGENT']);
				$yourphp_auth = authcode($authInfo['id']."-".$authInfo['groupid']."-".$authInfo['password'], 'ENCODE', $yourphp_auth_key);
				$this->assign('jumpUrl',$this->forward);
				//add by lin 
				
				if($authInfo['status'] != 1){$this->error(L('ACCOUNT_DISABLE'));}
				
				//end by lin				

				$authInfo['username'] = $data['username'];
				$authInfo['email'] = $data['email'];
				cookie('auth',$yourphp_auth,$cookietime);
				cookie('username',$authInfo['username'],$cookietime);
				cookie('groupid',$authInfo['groupid'],$cookietime);
				cookie('userid',$authInfo['id'],$cookietime);
				cookie('email',$authInfo['email'],$cookietime);
                cookie('user',$authInfo['user'],$cookietime);
				
				//通知客户有人注册
				$r = sendmail($this->Config[site_email],'新机构注册','新机构注册，请登录后台核审',$this->Config);
				$this->success(L('reg_ok'));
				
			}else{
				$this->error(L('reg_error'));
			}
		}else{
			$this->error($this->dao->getError());
		}
 
	}
	public function doreg2()
	{
		$username = get_safe_replace($_POST['username']);
        $password = get_safe_replace($_POST['password']);
		$email = get_safe_replace($_POST['email']);
		$mobile = get_safe_replace($_POST['mobile']);
		$user = get_safe_replace($_POST['user']);
		$cord = get_safe_replace($_POST['cord']);
		
       	$cord_moble=session('tel'.$mobile);
       	// 检查用户名
        if(!$this->dao->getByUsername($username)){
            $this->error(L('用户名已被注册'));
        }
		if($user==1){
			$status = 0;
		}else{
			$status = 1;
		}
		if($cord!=$cord_moble){
			$this->error(L('手机验证码错误'));
		}
		if($this->member_config['member_emailcheck']){ $status = 1; $groupid=5 ;}
		$groupid = $groupid ? $groupid : 3;
		$data=array();
		$data['username']= $username;
		$data['email']=$email;
		$data['groupid']=$groupid;
		$data['mobile']=$mobile;
		$data['user']=$user;								
		$data['login_count']=1;
		$data['createtime']=time();
		$data['updatetime']=time();
		$data['last_logintime']=time();
		$data['reg_ip']=get_client_ip();
		$data['status']=$status;
		$authInfo['status']=$status;
		$authInfo['password'] = $data['password'] = sysmd5($password);
		 
		if($r=$this->dao->create($data)){
			$userid = $this->dao->add();
			if(false!==$userid){
				$authInfo['id'] = $uid=$this->dao->getLastInsID();
				$authInfo['groupid'] = $ru['role_id']=$data['groupid'];
				$ru['user_id']=$uid;
				$roleuser=M('RoleUser');
				$roleuser->add($ru);
				
				//保存机构信息
				if($user==1){
					$uschool = M("school");
					$data['dianhua'] = $mobile;
					$data['title'] = $title;
					$data['industryx'] = $industry;
					$data['file'] = $file;
					$data['address']=$address;
					$data['description'] = $description;
					$data['status'] = 1;
					$schoolid=$uschool->add($data);
					if($schoolid>0)
					{
						$user = M('User')->find($userid);
						$user->schoolid = $schoolid;
						$user->save();
					}
				}
				//注册成功系统消息
				$stitle = '恭喜你，注册成功！';
				$scontent = '恭喜你，注册成功！79教育平台欢迎您的到来。';
				$this->get_messages($stitle,$scontent,$userid);
				
				
				if($this->member_config['member_emailcheck']){
					$yourphp_auth = authcode($uid."-".$username."-".$email, 'ENCODE',$this->sysConfig['ADMIN_ACCESS'],3600*24*3);//3天有效期
					$url = 'http://'.$_SERVER['HTTP_HOST'].U('User/Login/regcheckemail?code='.$yourphp_auth);
					$click = "<a href=\"$url\" target=\"_blank\">".L('CLICK_THIS')."</a>";
					$message = str_replace(array('{click}','{url}','{sitename}'),array($click,$url,$this->Config['site_name']),$this->member_config['member_emailchecktpl']);
					$r = sendmail($email,L('USER_REGISTER_CHECKEMAIL').'-'.$this->Config['site_name'],$message,$this->Config);
					$this->assign('send_ok',1);
					$this->assign('username',$username);
					$this->assign('email',$email);
					$this->display('Login:emailcheck');
					exit;
				}
				
				$yourphp_auth_key = sysmd5($this->sysConfig['ADMIN_ACCESS'].$_SERVER['HTTP_USER_AGENT']);
				$yourphp_auth = authcode($authInfo['id']."-".$authInfo['groupid']."-".$authInfo['password'], 'ENCODE', $yourphp_auth_key);
				$this->assign('jumpUrl',$this->forward);
				//add by lin 
				
				if($authInfo['status'] != 1){$this->error(L('ACCOUNT_DISABLE'));}
				
				//end by lin				

				$authInfo['username'] = $data['username'];
				$authInfo['email'] = $data['email'];
				cookie('auth',$yourphp_auth,$cookietime);
				cookie('username',$authInfo['username'],$cookietime);
				cookie('groupid',$authInfo['groupid'],$cookietime);
				cookie('userid',$authInfo['id'],$cookietime);
				cookie('email',$authInfo['email'],$cookietime);
                cookie('user',$authInfo['user'],$cookietime);
				
				$this->success(L('reg_ok'));
				
			}else{
				$this->error(L('reg_error'));
			}
		}else{
			$this->error($this->dao->getError());
		}
 
	}

	function checkusername(){
		$username=$_GET['username'];
		if($this->dao->getByUsername($username)){
				 echo 'false';
			}else{
				echo 'true';
		}
		exit;
	}
	function registered_SMS()
    {
    	$mobile = get_safe_replace($_POST['mobile']);
		$flag = 0; 
		$params='';//要post的数据 
		$verify = rand(123456, 999999);//获取随机验证码		
		$content='您的验证码为：';
		
		//以下信息自己填以下
		
		$encode = mb_detect_encoding($content, array("ASCII",'UTF-8','GB2312','GBK','BIG5'));
		if($encode != 'UTF-8')
		{
			$content = mb_convert_encoding($content, 'UTF-8', $encode);
		}
		$argv = array(
			'name'=>'qijiu',     //必填参数。用户账号
			'pwd'=>'3E27BD1D65E169DBD56233EEBF50',     //必填参数。（web平台：基本资料中的接口密码）
			'content'=>'【79招生网】尊敬的用户：您的注册验证码是'.$verify.'，请在30分钟内完成注册。',   //必填参数。发送内容（1-500 个汉字）UTF-8编码
			'mobile'=>$mobile,   //必填参数。手机号码。多个以英文逗号隔开
			'stime'=>'',   //可选参数。发送时间，填写时已填写的时间发送，不填时为当前时间发送
			'sign'=>'柒玖教育',    //必填参数。用户签名。
			'type'=>'pt',  //必填参数。固定值 pt
			'extno'=>''    //可选参数，扩展码，用户定义扩展码，只能为数字
		);
		//print_r($argv);exit;
		//构造要post的字符串 
		//echo $argv['content'];
		foreach ($argv as $key=>$value) { 
			if ($flag!=0) { 
				$params .= "&"; 
				$flag = 1; 
			} 
			$params.= $key."="; $params.= urlencode($value);// urlencode($value); 
			$flag = 1;
		} 
		$url = "http://web.daiyicloud.com/asmx/smsservice.aspx?".$params; //提交的url地址
		
		$result = file_get_contents($url);
		$con= substr( $result, 0, 1 );  //获取信息发送后的状态
		
		if($con == '0'){
			//成功
			session('tel'.$mobile, $verify);
			$this->ajaxreturn('1'.$verify);
		}else{
			$this->ajaxreturn('0');
		}
    }
    //添加系统消息
	function get_messages($stitle,$scontent,$suserid, $courseid=0)
    {
    	
    	$System = M("System");
		$data['title'] = $stitle;
		$data['userid'] = $suserid;
		$data['content'] = $scontent;
		$data['status'] = 1;
		$data['lang'] = 2;
		$data['courseid'] = $courseid;
		
		$System_s=$System->add($data);
		
    }
}
?>