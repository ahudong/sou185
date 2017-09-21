<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('indexs');
    }
    public function indexs(){
        $this->display('index');
    }
}