<?php
namespace Home\Controller;

use Think\Controller;
class BoardPageController extends Controller{
    private $BoardPageModel;
    public function __construct(){
        parent::__construct();
        $this->BoardPageModel = M();
    }
    /**
     * 载入所有留言列表
     */
    public function boardLoad($pageNo=1,$pageSize=10){
        $rows = $this->BoardPageModel->table("yb_article")->where("channel_id = 4")->page($pageNo,$pageSize)->select();
        $total = $this->BoardPageModel->table("yb_article")->where("channel_id = 4")->count();
        $data = array("total"=>$total,"rows"=>$rows,"pageNo"=>$pageNo,"pageSize"=>$pageSize);
        $this->assign("data",$data);
        $this->display(board);
    }
}

?>