<?php
  class JobTitle {
    public $user_id;
    public $job_title;
    public function __construct(int $user_id,String $job_title) {
      $this->user_id = $user_id;
      $this->job_title = $job_title;
    }
  }
