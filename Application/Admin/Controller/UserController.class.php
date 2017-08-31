<?php
	namespace Admin\Controller;
	use Think\Controller;
	/**
	* 用户登录
	*/
	class UserController extends Controller{
		/**
	     * 登录验证
	     */
	    public function login(){
	        $uid = I("uid");
	        $pwd = I("pwd");
	        if (!uid){
	            $this->redirect("/");
	            exit();
	        }else {
	            $mod = M("yb_admin");
	            $res = $mod->where("uid = '$uid'")->find();
	            if ($pwd == $res['pwd']){
	                $rows = M("yb_admin_menus")->select();
	                //获取登录地ip
	                $ip = get_client_ip();
	                $Ips = new \Org\Net\IpLocation('UTFWry.dat'); // 实例化类 参数表示IP地址库文件
	                $local = $Ips->getlocation($ip); // 获取某个IP地址所在的位置
	                $local = mb_convert_encoding($local, "utf-8", "gb2312"); // 编码转换，否则乱码
	                $local = $local['country']."-".$local['area'];
	                $_SESSION['uid']=$uid;
	                $_SESSION['ip']=$ip;
	                $_SESSION['local']=$local;
	                $this->assign("rows",$rows);
	                $this->display("Admin:welcome");
	            }else {
	                //返回首页，提示状态码
	            }
	        }
	    }
	    /**
	     * 用户退出
	     */
	    public function logout(){
	        session(null);
	        $this->redirect("/");
	    }
	}
?>