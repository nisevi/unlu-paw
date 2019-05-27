<?php 

/**
 * Database generic object builder
 */
class DatabaseBuilder
{
	private static $instances = [];

	private function __construct()
	{
	}

	public static function getInstance($type = 'DatabaseFile')
	{
		if ( ! isset(self::$instances[$type]) ) {
			self::$instances[$type] = new $type;
		}
		return self::$instances[$type];
	}
}