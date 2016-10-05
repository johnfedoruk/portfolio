<?php
	abstract class Singleton {
		/**
			The singleton instance of the class
		**/
		protected static $instances = array();
		/**
			Returns the Singleton instance of this class
		**/
		public static function getInstance() {
			$cls = get_called_class(); // late-static-bound class name
			if(!isset(self::$instances[$cls])) {
				self::$instances[$cls]=new static();
			}
			return self::$instances[$cls];
		}
		/**
			prevent creating a new instance by protecting constructor
		**/
		protected function __construct() {
		}
		/**
			prevent cloning an instance by privitizing the clone method
		**/
		private function __clone() {
			throw new Exception("Cannot clone singleton");
		}
		/**
			prevent unserializing method by privitizing the wakeup method
		**/
		private function __wakeup() {
			throw new Exception("Cannot unserialize singleton");
		}
	}
