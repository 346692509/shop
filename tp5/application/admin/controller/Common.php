<?php
namespace app\admin\controller;
use think\Controller;
use think\facade\Session;
class Common extends Controller{
    public function __construct(){
        parent::__construct();
		$a=Session::get('name');
        if(empty($a)){
            $this->redirect('login/login');
        }else{
        	$this->assign('name',$a); 
        }  
    }
}