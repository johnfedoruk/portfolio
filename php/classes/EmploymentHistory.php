<?php
  class EmploymentHistory {
    public $user_id;
    public $roll;
    public $employer_site;
    public $employer_name;
    public $start_date;
    public $end_date;
    public function __construct(
      int $user_id,
      String $roll,
      String $employer_site,
      String $employer_name,
      $start_date,
      $end_date
    ) {
      $this->user_id = $user_id;
      $this->roll = $roll;
      $this->employer_site = $employer_site;
      $this->employer_name = $employer_name;
      $this->start_date = $start_date;
      $this->end_date = $end_date;
    }
  }
