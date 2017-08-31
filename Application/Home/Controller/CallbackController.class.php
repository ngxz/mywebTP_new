<?php
namespace Home\Controller;

class CallbackController{
    /**
     * 返回weim用户数量
     */
    public function send(){
        $callback = $_GET["callback"];
        $url = "www.weimob.com";
        //curl方式发送请求
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $output = curl_exec($ch);
        curl_close($ch);
        //
        //过滤不用的字符
        $output = strip_tags($output,"<span>");
        $output = preg_replace("/\\r|\\n|\\s+|\\t/","",$output);
        $output = substr($output,0,610);
        $output = preg_replace('/[\D]/',"",$output);
        //转json
        $output = array("num"=>$output);
        echo $callback."(".json_encode($output).")";
    }
}

?>