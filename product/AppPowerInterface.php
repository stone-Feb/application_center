<?php
/**
 * 应用工厂-应用基础能力接口定义类
 */

namespace application_center\product;

interface AppPowerInterface{

	/**
	 * 定义应用令牌
	 *
	 * @param String $token
	 * @return self
	 */
	public function setToken($token);

	/**
	 * 获取应用令牌
	 *
	 * @return String
	 */
	public function getToken();

	/**
	 * 定义ISV标示字
	 *
	 * @param String $arg
	 * @return self
	 */
	public function setIsvType($arg);

	/**
	 * 获取ISV标示字
	 *
	 * @return mixed
	 */
	public function getIsvType();

	/**
	 * 定义ISV标示码
	 *
	 * @param String $arg
	 * @return self
	 */
	public function setIsvTypeCode($arg);

	/**
	 * 获取ISV标示码
	 *
	 * @return mixed
	 */
	public function getIsvTypeCode();

	/**
	 * 定义本系统应用标示字
	 *
	 * @param String $arg
	 * @return self
	 */
	public function setAppType($arg);

	/**
	 * 获取本系统应用简称标示字
	 *
	 * @return String
	 */
	public function getAppType();

	/**
	 * 定义本系统应用标示码
	 *
	 * @param int $arg
	 * @return self
	 */
	public function setAppTypeCode($arg);

	/**
	 * 获取本系统应用标示码
	 *
	 * @return int
	 */
	public function getAppTypeCode();

	/**
	 * 定义应用的状态
	 *
	 * @param mixed $arg
	 * @return self
	 */
	public function setAppStatus($arg);

	/**
	 * 获取应用的状态
	 *
	 * @return mixed
	 */
	public function getAppStatus();

	/**
	 * 设置应用的版本号
	 *
	 * @param $arg
	 * @return self
	 */
	public function setAppVersion($arg);

	/**
	 * 获取应用的版本号
	 *
	 * @return String
	 */
	public function getAppVersion();

	/**
	 * 定义应用的配置信息
	 *
	 * @param mixed $args
	 * @return self
	 */
	public function setAppInfo($args);

	/**
	 * 获取应用的配置信息
	 *
	 * @return array
	 */
	public function getAppInfo();

	/**
	 * 定义应用在本系统的配置信息
	 *
	 * @param $args
	 * @return mixed
	 */
	public function setAppConfig($args);

	/**
	 * 获取应用在本系统内的配置信息
	 *
	 * @return mixed
	 */
	public function getAppConfig();

	/**
	 * 注入isv策略
	 *
	 * @param mixed $args
	 * @return self
	 */
	public function injectIsvStrategy($args);

	/**
	 * 获取isv客户端
	 *
	 * @return mixed
	 */
	public function getIsvStrategy();

	/**
	 * 获取当前应用的sdk客户端实例
	 *
	 * @return mixed
	 */
	public function getSdkClient();

	/**
	 * 应用登录方法
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function login(...$args);

	/**
	 * 应用的用户模块
	 *
	 * @param mixed $args
	 * @return mixed
	 */
	public function setUserModule($args);

	/**
	 * 获取应用的用户模块
	 *
	 * @return mixed
	 */
	public function getUserModule();

	/**
	 * 应用登录后操作
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function loginAfter(...$args);

	/**
	 * 交易支付
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function tradePay(...$args);

	/**
	 * 支付回调后的操作
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function payCallback(...$args);

	/**
	 * 交易退款
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function tradeRefund(...$args);


}