<?php
namespace Home\Controller;

use Think\Controller;
class WebPageController extends Controller{
    private $BoardPageModel;
    public function __construct(){
        parent::__construct();
        $this->BoardPageModel = M();
    }
    /**
     * 载入所有web文章列表
     */
    public function webLoad($pageNo=1,$pageSize=10){
        $total = $this->BoardPageModel->table("yb_article")->where("channel_id =2")->count();
        $rows = $this->BoardPageModel->table("yb_article")->where("channel_id =2")->page($pageNo,$pageSize)->select();
        $data = array("total"=>$total,"rows"=>$rows,"pageNo"=>$pageNo,"pagesize"=>$pageSize);
        $this->assign("data",$data);
        $this->display(web);
    }
}

?>