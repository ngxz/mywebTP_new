<?php
namespace Home\Controller;

use Think\Controller;
class IndexPageController extends Controller{
    private $IndexPageModel;
    public function __construct(){
        parent::__construct();
        $this->IndexPageModel = M();
    }
    /**
     * 加载首页内容
     */
    public function indexLoad(){
        $news = $this->IndexPageModel->table("yb_article")->where("channel_id = 1")->limit(3)->order("time desc")->select();
        $artic = $this->IndexPageModel->table("yb_article")->limit(4)->order("time desc")->select();
        // 频道为5的图片展示
        $pics = $this->IndexPageModel->table("yb_article")->where("channel_id = 5")->order("time desc")->select();
        $rows = array("news"=>$news,"artic"=>$artic,"pics"=>$pics);
        $this->assign("rows",$rows);
        $this->display(index);
    }
    
}

?>