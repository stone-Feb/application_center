<?php
/**
 * 用户模块超类
 */

namespace application_center\user_module;

interface UserInfoInterface{

	/**
	 * 创建用户
	 *
	 * @param mixed $args
	 * @return mixed
	 */
	public function createUser(...$args);

	/**
	 * 获取用户信息
	 *
	 * @param mixed $args
	 * @return mixed
	 */
	public function getUserInfo(...$args);

	/**
	 * 设置用户信息
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function setUserInfo(...$args);

	/**
	 * 设置用户 utoken 信息
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function setUtoken(...$args);

	/**
	 * 获取用户 utoken 信息
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function getUtoken(...$args);

	/**
	 * 记录用户来源标示
	 *
	 * @param mixed ...$args
	 * @return mixed
	 */
	public function setUserChannelCode(...$args);

}