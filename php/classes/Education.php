<?php
  class Education {
    public $user_id;
    public $ed_title;
    public $school_site;
    public $school_name;
    public $start_date;
    public $end_date;
    public function __construct(
      int $user_id,
      String $ed_title,
      String $school_site,
      String $school_name,
      String $start_date,
      $end_date
    ) {
      $this->user_id = $user_id;
      $this->ed_title = $ed_title;
      $this->school_site = $school_site;
      $this->school_name = $school_name;
      $this->start_date = $start_date;
      $this->end_date = $end_date;
    }
  }
