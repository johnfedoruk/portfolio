<?php
	require_once(__DIR__."/Model.php");
	require_once(__DIR__."/../classes/Contact.php");
	class PageModel extends Model {
    private $page;
		public function get($page) {
        $this->page=__DIR__."/../templates/".$page;
		}
		public function post($page) {

		}
    public function __toString() {
      return $this->page;
    }
	}
