<?php

namespace application_center\model ;

class ApplicationInfoModel{

    //数据访问层，根据token从数据库获取数据
    public function getAppInfoByToken($token, $secret = false){
        if($secret) $field = "secret";
        else $field = "app_name";
        return $field;
    }

}