<?php
	abstract class Controller {
		abstract public function get($json);
		abstract public function post($json);
	}
