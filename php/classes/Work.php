<?php
  require_once(__DIR__."/../classes/Album.php");
  require_once(__DIR__."/../classes/File.php");
  class Work {
    public $user_id;
    public $work_name;
    public $work_summ;
    public $work_desc;
    public $post_date;
    public $album;
    public $files;
    public function __construct(
      String $user_id,
      String $work_name,
      $work_summ,
      $work_desc,
      $post_date,
      $album
      //Album $album=null
    ) {
      $this->user_id = $user_id;
      $this->work_name = $work_name;
      $this->work_summ = $work_summ;
      $this->work_desc = $work_desc;
      $this->post_date = $post_date;
      $this->album = $album;
      $this->files = array();
    }
    public function pushFile(File $file) {
      $this->files[] = $file;
    }
  }
