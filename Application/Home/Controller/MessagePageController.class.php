<?php
namespace Home\Controller;

use Think\Controller;
class MessagePageController extends Controller{
    private $BoardPageModel;
    public function __construct(){
        parent::__construct();
        $this->BoardPageModel = M();
    }
    /**
     * 载入所有资讯列表
     */
    public function message($pageNo=1,$pageSize=6){
        $total = $this->BoardPageModel->table("yb_article")->where("channel_id =1")->count();
        $rows = $this->BoardPageModel->table("yb_article")->where("channel_id =1")->order("time desc")->page($pageNo,$pageSize)->select();
        $data = array("total"=>$total,"rows"=>$rows,"pageNo"=>$pageNo,"pagesize"=>$pageSize);
        $this->assign("data",$data);
        $this->display(message);
    }
}

?>