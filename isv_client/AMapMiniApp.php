<?php
/**
 * 高德小程序
 */

namespace application_center\isv_client;

use application_center\product\AbstractProductB;
use application_center\product\ProductACustomerClient;

class AMapMiniApp extends ProductACustomerClient{

    /**
     * 应用登录方法
     *
     * @param mixed ...$args
     * @return mixed
     */
    public function login(array ...$args){
        // TODO: Implement login() method.
    }

    /**
     * 应用的用户模块
     *
     * @param mixed $args
     * @return mixed
     */
    public function setUserModule($args){
        // TODO: Implement setUserModule() method.
    }

    /**
     * 获取应用的用户模块
     *
     * @return mixed
     */
    public function getUserModule(){
        // TODO: Implement getUserModule() method.
    }

    /**
     * 应用登录后操作
     *
     * @param mixed ...$args
     * @return mixed
     */
    public function loginAfter(array ...$args){
        // TODO: Implement loginAfter() method.
    }

    /**
     * 交易支付
     *
     * @param mixed ...$args
     * @return mixed
     */
    public function tradePay(array ...$args){
        // TODO: Implement tradePay() method.
    }

    /**
     * 支付回调后的操作
     *
     * @param mixed ...$args
     * @return mixed
     */
    public function payCallback(array ...$args){
        // TODO: Implement payCallback() method.
    }

    /**
     * 交易退款
     *
     * @param mixed ...$args
     * @return mixed
     */
    public function tradeRefund(array ...$args){
        // TODO: Implement tradeRefund() method.
    }
}