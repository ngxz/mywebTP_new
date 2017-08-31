<?php
namespace Admin\Controller;

use Think\Controller;
class AdminController extends Controller{
    private $AdminModel;
    public function __construct(){
        parent::__construct();
        $this->AdminModel = M();
    }
    
    /**
     * 查看所有新闻内容
     */
    public function searchArticle($channel_id,$stitle='',$stime='',$pageNo=1,$pageSize=10){
        $query = array();
        if ($stitle != "" && $stitle != null){
            $query['title'] = array("LIKE","%$stitle%");
        }
        if ($stime != "" && $stime != null){
            $query['time'] = array("LIKE","%$query%");
        }
        $total=$this->AdminModel->where($query)->table("yb_article")->where("channel_id = '$channel_id'")->count();
        $rows = $this->AdminModel->table("yb_article")->where("channel_id = '$channel_id'")->where($query)->page($pageNo,$pageSize)->order("time desc")->select();
        $page = array("total"=>$total,"rows"=>$rows,"pageNo"=>$pageNo,"pageSize"=>$pageSize,"scontent"=>$stitle,"stime"=>$stime,"channel_id"=>$channel_id);
        $this->assign("page",$page);
        $this->display(newsManage);
    }
    /**
     * 删除某条新闻
     * @param unknown $no
     */
    public function deleteArticle($no,$channel_id){
        $this->AdminModel->table("yb_article")->where("channel_id = '$channel_id'")->where("id = '$no'")->delete();
    }
    /**
     * 查询一条新闻
     * @param unknown $no
     */
    public function searchArticleOne($no,$channel_id){
        $rows = $this->AdminModel->table("yb_article")->where("channel_id = '$channel_id'")->where("id = '$no'")->select();
        $this->ajaxReturn($rows);
    }
    /**
     * 新增修改新闻
     * 
     */
    public function addArticle($ctr,$channel_id,$title,$author,$summary,$newsId,$content,$time){
        //文件上传
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath  =     './Public/Uploads/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $upload->saveName = time().'_'.mt_rand();
        // 上传文件
        $info   =   $upload->upload();
        $imgurl = "/Uploads/".$info['pic']['savepath'].$info['pic']['savename'];
        if(!$info) {// 上传错误提示错误信息
            $imgurl = "没有上传图片哦！";
            //$this->error($upload->getError());
        }else{// 上传成功
            //$this->success('上传成功！');
            echo "上传成功！";
        }
        //传入的数组
        $data = array(
            'channel_id'=>$channel_id,
            'content'=>$content,
            'title'=>$title,
            'author'=>$author,
            'summary'=>$summary,
            'img_url'=>$imgurl,
            'time'=>$time
        );
        if ($ctr > 0){
			//新增数据
            $this->AdminModel->table("yb_article")->where("channel_id = '$channel_id'")->field("content,title,summary,img_url,time,channel_id")->add($data);
            $this->searchArticle($channel_id);
        }else {
			//修改数据
            $this->AdminModel->table("yb_article")->where("channel_id = '$channel_id'")->field("content,title,summary,img_url,time")->where("id='$newsId'")->save($data);
            $this->searchArticle($channel_id);
        }
    }
}

?>