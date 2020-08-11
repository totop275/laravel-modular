<?php

namespace App\Libraries;

class Modular
{
	protected $database = [];

	public function __get($key)
	{
		return $this->database[$key] ?? null;
	}

	/**
	 * Check module active or not
	 * @param  string  $moduleName Module name in lowercase
	 * @return boolean             True if exist, false otherwise
	 */
	public function isActive($moduleName)
	{
		return true;
	}

	/**
	 * Get shared module data
	 * @param  string $key     data key
	 * @param  any 	  $default default value if data unavailable
	 * @return any  		   anything set before
	 */
	public function getData($key, $default = null) 
	{
		return $this->database[$key] ?? $default;
	}

	/**
	 * Set data for everyone
	 * @param string $key   data key
	 * @param any    $value anything to set
	 * @return void
	 */
	public function setData($key, $value) 
	{
		$this->database[$key] = $value;
	}
}
