<?php

namespace application_center\sdk_library\app_sdk_client;

class AppSdkClient{

    private static $instance = null;
    private static $workerAppInstance = null;

    private static $appInfo = [];

    private function __construct($appInfo){
        self::$appInfo = $appInfo;
    }

    //商家端APP
    public static function getBAppInstance($appInfo){
        self::$appInfo = $appInfo;
        if(self::$instance === null){
            self::$instance = new self(self::$appInfo);
        }
        return self::$instance;
    }

    //工人端APP
    public static function getWAppInstance($appInfo){
        self::$appInfo = $appInfo;
        if(self::$workerAppInstance === null){
            self::$workerAppInstance = new self(self::$appInfo);
        }
        return self::$workerAppInstance;
    }

}