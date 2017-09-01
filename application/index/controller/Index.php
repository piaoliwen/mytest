<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Request;
class Index extends Controller
{
    public function index($name='world')
    {
        $data=Db::name('data')->find();
        $this->assign('result',$data);
//        return $this->fetch();
        $request = Request::instance();
        // 获取当前URL地址 不含域名
        echo 'url: ' . $this->request->url(). '<br/>';
        echo $this->request->action();
        return 'Hello,' . $name . '！';
    }
    public function hello($name='world',$city='shanghai' ){
        return 'hello'.$name.'!'.$city;
    }
}
