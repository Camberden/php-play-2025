<?php

namespace Core;

use Core\Middleware\Auth;
use Core\Middleware\Guest;
use Core\Middleware\Middleware;

class Router {

	protected $routes = [];

	public function add($method, $uri, $controller) {

			$this->routes[] = [
				"method" => $method,
				"uri" => $uri,
				"controller" => $controller,
				"middleware" => null, // Adding middleware support Dec09
		];
		return $this;
	}

	public function get($uri, $controller) {

		return $this->add("GET", $uri, $controller);

	}

	public function post($uri, $controller) {
	
		return $this->add("POST", $uri, $controller);

	}

	public function delete($uri, $controller) {
			
		return $this->add("DELETE", $uri, $controller);

	}

	public function patch($uri, $controller) {
		
		return $this->add("PATCH", $uri, $controller);

	}

	public function put($uri, $controller) {
		
		return $this->add("PUT", $uri, $controller);

	}

	public function only($key) {

		$this->routes[array_key_last($this->routes)]["middleware"] = $key;
		// dd($key);
		// dd($this->routes);
		return $this;
	}

	public function route($uri, $method) {

		foreach($this->routes as $route) {
			if ($route["uri"] === $uri && $route["method"] === strtoupper($method)) {
				// Applying middleware Dec09
				// if statement needed to avoid error when no middleware is set
				if($route["middleware"]) {
					$middleware = Middleware::MIDDLEMAP[$route["middleware"]] ?? null;
					(new $middleware)->handle();
				}
				return require base_path($route["controller"]);
			}
		}
		abort();
	}
}
