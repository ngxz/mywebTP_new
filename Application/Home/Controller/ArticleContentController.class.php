<?php
namespace Home\Controller;

use Think\Controller;
class ArticleContentController extends Controller{
    private $articleContent;
    public function __construct(){
        parent::__construct();
        $this->articleContent = M("yb_article");
    }
    /**
     * 查询当前点击的文章的id，发送到显示页面
     * @param int $id
     */
    public function article_content($id){
        $row = $this->articleContent->where("id = '$id'")->select();
        $this->assign("row",$row);
        $this->display(article_content);
    }
}

?>