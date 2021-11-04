<?php
/**
 * 产品A的商家端实现
 */

namespace application_center\product;

use application_center\user_module\ProductABusinessUserInfo;

abstract class ProductABusinessClient extends AbstractProductA{

    protected $userModule = null ;

    public function __construct(){
        parent::__construct();
        $this->setUserModule(new ProductABusinessUserInfo());
    }

    //设置用户模块
    public function setUserModule($args){
        $this->userModule = $args ;
        return $this ;
    }

    //获取用户模块
    public function getUserModule(){
        return $this->userModule ;
    }
}