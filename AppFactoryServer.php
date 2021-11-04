<?php
namespace application_center ;

use application_center\model\ApplicationInfoModel;
use application_center\sdk_library\alipay_sdk_client\AlipaySdkClient;
use application_center\sdk_library\amap_sdk_client\AmapSdkClient;
use application_center\sdk_library\app_sdk_client\AppSdkClient;
use application_center\sdk_library\baidu_sdk_client\BaiduSdkClient;
use application_center\sdk_library\bytedance_sdk_client\ByteDanceSdkClient;
use application_center\sdk_library\quickapp_sdk_client\QuickAppSdkClient;
use application_center\sdk_library\unionpay_sdk_client\UnionPaySdkClient;
use application_center\sdk_library\wechat_sdk_client\WechatSdkClient;

class AppFactoryServer{

    //创建APP实例工厂类
    public function CreateAppFactory($token){
        $appInfo = self::GetAppInfo($token , true);
        $secretInfo = $appInfo;
        unset($appInfo['rsa_private_self'], $appInfo['rsa_public_isv'], $appInfo['rsa_private_cert']);
        //实例化应用实现类
        $insPath = "\\application_center\\isv_client\\".$appInfo['app_type'];
        $instance = new $insPath;
        //创建实例
        $instance->setToken($token)
                 ->setAppStatus($appInfo['app_status'])
                 ->setIsvType($appInfo['isv_type'])
                 ->setIsvTypeCode($appInfo['isv_type_code'])
                 ->setAppType($appInfo['app_type'])
                 ->setAppTypeCode($appInfo['app_type_code'])
                 ->setAppVersion($appInfo['version'])
                 ->injectIsvStrategy($this->sdkFactory($appInfo['isv_type_code'], $secretInfo))
                 ->setAppInfo($appInfo);
        return $instance;
    }

    //获取应用信息
    private static function GetAppInfo($token, $secret = false){
        $client = new ApplicationInfoModel();
        return $client->getAppInfoByToken($token , $secret);
    }

    //客户端SDK的封装
    private function sdkFactory($isvType,$appInfo){
        $client = null;
        switch($isvType){
            case 1 :
                $client = AlipaySdkClient::getInstance($appInfo);
                break;
            case 2 :
                $client = AmapSdkClient::getInstance($appInfo);
                break;
            case 3 :
                $client = WechatSdkClient::getMiniAppInstance($appInfo);
                break;
            case 4 :
                $client = WechatSdkClient::getWebInstance($appInfo);
                break;
            case 5 :
                $client = BaiduSdkClient::getInstance($appInfo);
                break;
            case 6 :
                $client = ByteDanceSdkClient::getInstance($appInfo);
                break;
            case 7 :
                $client = AppSdkClient::getBAppInstance($appInfo);
                break;
            case 8 :
                $client = AppSdkClient::getWAppInstance($appInfo);
                break;
            case 9 :
                $client = QuickAppSdkClient::getInstance($appInfo);
                break;
            case 10 :
                $client = UnionPaySdkClient::getInstance($appInfo);
                break ;
            default :
                throw new \Exception('未定义的厂商');
                break;
        }
        return $client;
    }
}