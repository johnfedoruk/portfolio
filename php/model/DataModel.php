<?php
	require_once(__DIR__."/Model.php");
	abstract class DataModel extends Model {
		protected static $connected = false;
		abstract public function connect();
	}
