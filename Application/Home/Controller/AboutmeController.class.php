<?php
namespace Home\Controller;

use Think\Controller;
class AboutmeController extends Controller{
    private $aboutmeModel;
    public function __construct(){
        parent::__construct();
        $this->aboutmeModel = M();
    }
    public function aboutme(){
        $this->display();
    }
}

?>