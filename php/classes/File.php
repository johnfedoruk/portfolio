<?php
	class File {
		public $user_id;
		public $work_name;
		public $file_name;
		public $file_summ;
		public $file_path;
		public function __construct(
			int $user_id,
			String $work_name,
			String $file_name,
			$file_summ,
			String $file_path
		) {
			{
				$this->user_id = $user_id;
				$this->work_name = $work_name;
				$this->file_name = $file_name;
				$this->file_summ = $file_summ;
				$this->file_path = $file_path;
			}
		}
	}
