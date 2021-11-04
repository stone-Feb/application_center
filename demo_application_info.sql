SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for demo_application_info
-- ----------------------------
DROP TABLE IF EXISTS `demo_application_info`;
CREATE TABLE `demo_application_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(100) NOT NULL COMMENT '应用标示',
  `app_name` varchar(255) NOT NULL COMMENT '应用名称',
  `isv_type` varchar(100) NOT NULL COMMENT 'isv 厂商标示字:',
  `isv_type_code` int(11) NOT NULL DEFAULT '1' COMMENT 'isv 厂商标示码',
  `user_field` varchar(255) NOT NULL COMMENT 'isv 用户标示字段',
  `app_type` varchar(100) NOT NULL COMMENT '系统内应用标示字',
  `app_type_code` int(11) NOT NULL DEFAULT '0' COMMENT '系统内应用标示字',
  `app_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '应用当前状态。0-删除。1-配置中。2-已上线。3-线上调试',
  `product_type` varchar(100) NOT NULL DEFAULT 'Customer' COMMENT '应用类型',
  `product_sub_type` varchar(100) NOT NULL DEFAULT 'store' COMMENT 'product 子类型',
  `access_type` tinyint(1) NOT NULL DEFAULT '0' COMMENT '接入类型。0为手动，1为授权',
  `version` varchar(50) NOT NULL DEFAULT '1.0.0' COMMENT '应用版本',
  `app_logo` varchar(100) NOT NULL COMMENT '应用logo',
  `rsa_private_cert` text NOT NULL COMMENT '公钥证书方式私钥',
  `rsa_private_self` text NOT NULL COMMENT '自己的rsa私钥',
  `rsa_public_isv` text NOT NULL COMMENT 'isv的rsa公钥',
  `aes_secret` varchar(255) NOT NULL COMMENT 'aes 密钥',
  `alipay_rsa_type` tinyint(1) NOT NULL COMMENT '支付宝小程序：公钥接入方式.0 普通公钥方式;1,公钥证书方式',
  `alipay_pid` varchar(255) NOT NULL COMMENT '支付宝-合作伙伴ID',
  `wechat_appid` varchar(255) NOT NULL COMMENT '微信：开发者ID',
  `wechat_app_secret` varchar(255) NOT NULL COMMENT '微信：开发者密码',
  `wechat_mch_id` varchar(50) NOT NULL COMMENT '微信：商户id',
  `wechat_pay_key` varchar(255) NOT NULL COMMENT '微信：支付key',
  `byte_app_id` varchar(255) NOT NULL COMMENT '字节-支付-appid',
  `byte_merchant_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '字节-商户号',
  `byte_pay_secret` varchar(255) NOT NULL COMMENT '字节-支付secret',
  `authorizer_refresh_token` varchar(255) NOT NULL COMMENT '授权接入的应用的授权token',
  `create_time` datetime NOT NULL COMMENT '创建时间',
  `last_update_time` datetime NOT NULL COMMENT '最后一次修改时间',
  `platform_token` varchar(100) NOT NULL DEFAULT '' COMMENT '三方平台token为空说明没有绑定平台',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '应用描述',
  `is_partner_app` tinyint(3) NOT NULL DEFAULT '0' COMMENT '是否是商户自建应用 0否 1是',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `unique_token` (`token`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

SET FOREIGN_KEY_CHECKS = 1;
