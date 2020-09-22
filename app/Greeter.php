<?php

class Greeter {
	
	public function greet($name = null) {
		echo 'Hello, ' . (is_null($name) ? 'World' : $name) . '!';
	}
	
}
