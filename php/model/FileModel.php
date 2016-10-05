<?php
	require_once(__DIR__."/Model.php");
	class FileModel extends Model {
		private $path = null;
		public function get($filename,$user_id,$works_name) {
      $this->path = __DIR__."/../../assets/files/users/"
      .$user_id."/".$works_name."/".$filename;
      //$file = "/var/www/html/assets/files/users/1/XV6 Kernel Hacking/hello.txt";
			//die($this->path."<br>".$file);
      return $this->path;
		}
		public function post($json=null) {

		}
		public function __toString() {
			return $this->path;
		}
	}
