<?php

namespace Core\Middleware;

class Middleware {
	
	public const MIDDLEMAP = [
		"auth" => Auth::class,
		"guest" => Guest::class,
	];


	public static function resolve($key) {

		if (!$key) {
			return;
		}
		$middleware = static::MIDDLEMAP[$key];

		if (!$middleware) {
			// prevent null errors
			throw new \Exception("No middleware found for key " . $key . ".");
		}

		(new $middleware)->handle(); 

	}

}