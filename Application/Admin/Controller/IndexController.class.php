<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(session('admin')==null){
            $this->redirect('login');
        }else{
            $this->display();
        }

    }
    public function login(){
        if(I('post.username')==null){
            $this->display();
        }else{
            session('admin',I('post.username'));
            $this->redirect('Admin/Index/index');
        }
    }
    public function newdoc(){
        $this->display();
    }
    public function doclist(){
        $this->display();
    }
    public function userlist(){
        $this->display();
    }
    public function imagelist(){
        $this->display();
    }
    public function typelist(){
        $this->display();
    }
    public function set(){
        $this->display();
    }
    public function logout(){
        session('admin',null);
        $this->redirect('index');
    }
    public function pass(){
        $this->display();
    }
}