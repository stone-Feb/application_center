<?php

namespace application_center\sdk_library\wechat_sdk_client;

final class WechatSdkClient{

    private static $miniAppInstance = null;

    private static $WebInstance = null;

    private static $appInfo = [];

    private function __construct($appInfo){
        self::$appInfo = $appInfo;
    }

    //小程序
    public static function getMiniAppInstance($appInfo){
        self::$appInfo = $appInfo;
        if(self::$miniAppInstance === null){
            self::$miniAppInstance = new self(self::$appInfo);
        }
        return self::$miniAppInstance;
    }

    //公众号
    public static function getWebInstance($appInfo){
        self::$appInfo = $appInfo;
        if(self::$WebInstance === null){
            self::$WebInstance = new self(self::$appInfo);
        }
        return self::$WebInstance;
    }

}