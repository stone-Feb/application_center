<?php
/**
 * 支付宝网页移动应用
 */

namespace application_center\isv_client;

use application_center\product\ProductACustomerClient;

class AlipayWeb extends ProductACustomerClient{

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