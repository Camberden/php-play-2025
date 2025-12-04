<?php

namespace Core;

class App {

	protected static $container;

	public static function setContainer($container) {

		static::$container = $container;

	}

	public static function container() {

		return static::$container;

	}

	// Delegations from the Controller class:
	public static function bind($key, $factory) {

		static::container()->bind($key, $factory);
	
	}

	public static function resolve($key) {

		return static::container()->resolve($key);

	}
}

?>