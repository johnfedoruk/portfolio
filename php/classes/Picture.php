<?php
	class Picture {
		public $position;
		public $user_id;
		public $album_name;
		public $picture_name;
		public $picture_summ;
		public $picture_path;
		public $post_date;
		public function __construct(
			int $position,
			int $user_id,
			String $album_name,
			String $picture_name,
			$picture_summ,
			String $picture_path,
			$post_date
		) {
			$this->position = $position;
			$this->user_id = $user_id;
			$this->album_name = $album_name;
			$this->picture_name = $picture_name;
			$this->picture_summ = $picture_summ;
			$this->picture_path = $picture_path;
			$this->post_date = $post_date;
		}
	}