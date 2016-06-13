<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
        $this->display();
    }
    public function reg(){
        if(I('post.email')==null){
            $this->display();
        }else{
            $username=I('post.email');
            session("username",$username);
            echo "<script>location.href='".U('Index/index')."';</script>";
        }

    }
    public function login(){
        $name=I('post.name');
        session('username',$name);
        echo "<script>location.href=document.referrer;</script>";
    }
    public function logout(){
        session('username',null);
        echo "<script>location.href=document.referrer;</script>";
    }
    public function gallery(){
        $user=I('get.user',null);
        $this->assign('user',$user);
        $this->display();
    }
    public function myindex(){
        $user=I('get.user',null);
        $this->assign('user',$user);
        $this->display();
    }
    public function myblog(){
        $user=I('get.user',null);
        $this->assign('user',$user);
        $this->display();
    }
}