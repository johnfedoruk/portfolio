<?php
	require_once(__DIR__."/Picture.php");
  	class Album {
	  	public $user_id;
	  	public $album_name;
	  	public $album_summ;
	  	public $pictures;
	    public function __construct(
	    	int $user_id,
	    	String $album_name,
	    	$album_summ
	    ) {
			$this->user_id = $user_id;
			$this->album_name = $album_name;
			$this->album_summ = $album_summ;
			$this->pictures = array();
	    }
	    public function pushPicture(Picture $picture) {
	    	$this->pictures[] = $picture;
	   	}
  	}
