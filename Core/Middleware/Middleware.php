<?php

namespace Core\Middleware;

class Middleware {
	const MIDDLEMAP = [
		"auth" => Auth::class,
		"guest" => Guest::class,
	];
}