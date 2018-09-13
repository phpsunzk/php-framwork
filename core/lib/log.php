<?php
namespace core\lib;

use \core\lib\config;
class log
{
	/**
	 * 	1.确定日志存储方式
	 *
	 *	2.写日志
	 */
	static $class;
	//确定存放方式
	static public function init()
	{
		$drive = config::get('DRIVE','log');
		$class = "\core\lib\drive\log\\" . $drive;
		self::$class = new $class;
	}
    static public function log($name,$file='log')
    {
        self::$class->log($name,$file);
    }


}