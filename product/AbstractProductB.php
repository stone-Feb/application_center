<?php
/**
 * 产品B的抽象实现
 */

namespace application_center\product;

abstract class AbstractProductB implements AppPowerInterface{

    public function __construct(){ }

    //令牌
    protected $token = null;

    //isv厂商字
    protected $isvType = null;

    //isv厂商标示码
    protected $isvTypeCode = null;

    //本系统应用标示字:__CLASS__
    protected $appType = null;

    //本系统应用标示数字码:5
    protected $appTypeCode = null;

    //应用状态:维护/运行/下线/开发...
    protected $appStatus = null;

    //应用的版本号
    protected $appVersion = null;

    //应用配置信息
    protected $appInfo = null;

    //应用在本系统内的配置
    protected $appConfig = null;

    //第三方SDK能力:策略模式
    protected $isvStrategy = null;

    //定义应用令牌
    public function setToken($token){
        $this->token = $token;
        return $this;
    }

    //获取应用令牌
    public function getToken(){
        return $this->token;
    }

    // 定义ISV标示字
    public function setIsvType($arg){
        $this->isvType = $arg;
        return $this;
    }

    // 获取ISV标示字
    public function getIsvType(){
        return $this->isvType;
    }

    //定义ISV标示码
    public function setIsvTypeCode($arg){
        $this->isvTypeCode = $arg;
        return $this;
    }

    // 获取ISV标示码
    public function getIsvTypeCode(){
        return $this->isvTypeCode;
    }

    //定义应用标示
    public function setAppType($arg){
        $this->appType = $arg;
        return $this;
    }

    //获取应用简称标示
    public function getAppType(){
        return $this->appType;
    }

    //定义应用标示码
    public function setAppTypeCode($arg){
        $this->appTypeCode = $arg;
        return $this;
    }

    //获取应用标示码
    public function getAppTypeCode(){
        return $this->getAppTypeCode();
    }

    //定义应用的状态
    public function setAppStatus($arg){
        $this->appStatus = $arg;
        return $this;
    }

    //获取应用的状态
    public function getAppStatus(){
        return $this->appStatus;
    }

    //设置应用的版本号
    public function setAppVersion($arg){
        $this->appVersion = $arg;
        return $this;
    }

    //获取应用的版本号
    public function getAppVersion(){
        return $this->appVersion;
    }

    //设置应用的配置信息
    public function setAppInfo($args){
        $this->appInfo = $args;
        return $this;
    }

    //获取应用的配置信息
    public function getAppInfo(){
        return $this->appInfo;
    }

    //定义应用在本系统的配置信息
    public function setAppConfig($args){
        $this->appConfig = $args;
        return $this;
    }

    //获取应用在本系统内的配置信息
    public function getAppConfig(){
        return $this->appConfig;
    }

    //注入isv策略
    public function injectIsvStrategy($args){
        $this->isvStrategy = $args;
        return $this;
    }

    //获取isv客户端
    public function getIsvStrategy(){
        return $this->isvStrategy;
    }

    //获取当前应用的sdk客户端实例
    public function getSdkClient(){
        return $this->getIsvStrategy()->getInstance($this->token);
    }
}