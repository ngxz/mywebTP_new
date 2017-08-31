<?php
namespace Home\Controller;

class WeixinController{
    public function valid(){
            //logger("valid");
            $echoStr = $_GET["echostr"];
            //valid signature , option
            // if($this->checkSignature()){
                //ob_clean();
                echo $echoStr;
                // exit;
            // }
    }
    
}