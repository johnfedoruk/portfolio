<?php
	require_once(__DIR__."/Model.php");
	class ErrorModel extends Model {
		protected $errorList = array();
	    public function pushError($error) {
	      $this->errorList[] = $error;
	    }
	    public function isErrors() {
	      return sizeof($this->errorList)>0;
	    }
	    public function __toString() {
	      return "ERROR ".json_encode($this->errorList);
	    }
	}
