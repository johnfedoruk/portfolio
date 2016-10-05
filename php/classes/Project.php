<?php
  class Project {
    public $user_id;
    public $project_name;
    public $project_path;
    public $project_summ;
    public $project_desc;
    public $start_date;
    public $end_date;
    public function __construct(
      int $user_id,
      String $project_name,
      String $project_path,
      $project_summ,
      $project_desc,
      $start_date,
      $end_date
    ) {
      $this->user_id = $user_id;
      $this->project_name = $project_name;
      $this->project_path = $project_path;
      $this->project_summ = $project_summ;
      $this->project_desc = $project_desc;
      $this->start_date = $start_date;
      $this->end_date = $end_date;
    }
  }
