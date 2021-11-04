<?php

namespace application_center\sdk_library\amap_sdk_client ;

final class AmapSdkClient{

    private static $instance = null ;

    private static $appInfo = [];

    private function __construct($appInfo){
        self::$appInfo = $appInfo ;
    }

    public static function getInstance($appInfo){
        self::$appInfo = $appInfo ;
        if(self::$instance === null){
            self::$instance = new self(self::$appInfo);
        }
        return self::$instance ;
    }

}