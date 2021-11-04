<?php

namespace application_center\sdk_library\alipay_sdk_client ;

final class AlipaySdkClient{

    private static $instance = null ;

    private static $appInfo = [];

    private function __construct($appInfo){
        self::$appInfo = $appInfo ;
    }

    //伪单例模式
    public static function getInstance($appInfo){
        self::$appInfo = $appInfo ;
        if(self::$instance === null){
            self::$instance = new self(self::$appInfo);
        }
        return self::$instance ;
    }

}