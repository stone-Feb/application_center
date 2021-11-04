<?php

namespace application_center;

class AppFactoryTest{

    public function getAppInfo(){
        $token = "app_id";
        $class = new AppFactoryServer();
        $appClient = $class->CreateAppFactory($token);
        return $appClient->getAppInfo();
    }

    public function login(){
        $utoken = "user client utoken";
        $appClient = $this->getAppInfo();
        $userInfo = $appClient->getUserModule()->getUtoken($utoken);
        if ($userInfo != null) return $userInfo ;
        $appClient->login();
        $appClient->getUserModule()->createUser();
        $appClient->getUserModule()->setUtoken();
        $appClient->loginAfter();
    }

    public function pay(){
        $appClient = $this->getAppInfo();
        $appClient->tradePay();
    }

    public function executeSdk(){
        $appClient = $this->getAppInfo();
        $sdkClient = $appClient->getSdkClient();
        $sdkClient->pushMessage();
    }
}