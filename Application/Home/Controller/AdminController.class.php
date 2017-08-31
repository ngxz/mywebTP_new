<?php
namespace Home\Controller;

use Think\Controller;
class AdminController extends Controller{
    private $AdminModel;
    public function __construct(){
        parent::__construct();
        $this->AdminModel = M();
    }
    /**
     * 登录验证
     */
    public function login(){
        $uid = I("uid");
        $pwd = I("pwd");
        //登录的是管理员
        if ($uid == 1001){
            $res = $this->AdminModel->table("yb_users")->where("uid = '$uid'")->select();
            $u = $res[0];
            if ($pwd == $res[0]['pwd']){
                $rows = $this->AdminModel->table("yb_menus")->select();
                //保存登录用户信息
                $_SESSION['u']=$u;
                $this->assign("rows",$rows);
                $this->display(welcome);
            }else {
                redirect('http://www.yuanrb.com/index.php/Home/IndexPage/indexLoad',2,'密码错误！');
            }
        }
        //登录是用户
    }
    /**
     * 查看所有新闻内容
     */
    public function news($scontent='',$stime='',$pageNo=1,$pageSize=10){
        $query = array();
        if ($scontent != "" && $scontent != null){
            $query['content'] = array("LIKE","%$scontent%");
        }
        if ($stime != "" && $stime != null){
            $query['time'] = array("LIKE","%$query%");
        }
        $total=$this->AdminModel->where($query)->table("yb_indexnew")->count();
        $rows = $this->AdminModel->table("yb_indexnew")->where($query)->page($pageNo,$pageSize)->order("time desc")->select();
        $page = array("total"=>$total,"rows"=>$rows,"pageNo"=>$pageNo,"pageSize"=>$pageSize,"scontent"=>$scontent,"stime"=>$stime);
        $this->assign("page",$page);
        $this->display(newsManage);
    }
    /**
     * 删除某条新闻
     * @param unknown $no
     */
    public function newsDelete($no){
        $this->AdminModel->table("yb_indexnew")->where("id = '$no'")->delete();
        
    }
    /**
     * 查询一条新闻
     * @param unknown $no
     */
    public function newsSearch($no){
        $rows = $this->AdminModel->table("yb_indexnew")->where("id = '$no'")->select();
        $this->ajaxReturn($rows);
    }
    /**
     * 新增修改新闻
     * 
     */
    public function newsAdd($ctr,$newsId,$content,$time){
        $data = array(
            'content'=>$content,
            'time'=>$time
        );
        if ($ctr > 0){
            $this->AdminModel->table("yb_indexnew")->field("content,time")->add($data);
            $this->news();
        }else {
            $this->AdminModel->table("yb_indexnew")->field("content,time")->where("id='$newsId'")->save($data);
            $this->news();
        }
    }
}

?>