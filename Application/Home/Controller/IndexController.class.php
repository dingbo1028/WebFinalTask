<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function haha(){
        $type=M("doc_type");
        $type=$type->select();
        $arr=array();
        foreach ($type as $value){
            $type=$value['name'];
            $doc=M("doc");
            $doc=$doc->where(array('type'=>$type))->select();
            $arr["$type"]=$doc;
        }

    }
    public function h(){
    }
}