<?php
  require_once(__DIR__."/JobTitle.php");
  require_once(__DIR__."/EmploymentHistory.php");
  require_once(__DIR__."/Education.php");
  require_once(__DIR__."/Residence.php");
  require_once(__DIR__."/Project.php");
  class About {
    public $job_titles;
    public $employment_histories;
    public $education;
    public $residence;
    public $projects;
    public function __construct() {
      $this->job_titles = array();
      $this->employment_histories = array();
      $this->education = array();
      $this->residence = array();
      $this->projects = array();
    }
    public function pushJobTitle(JobTitle $job_title) {
      $this->job_titles[] = $job_title;
    }
    public function pushEmploymentHistory(EmploymentHistory $emp_history) {
      $this->employment_histories[] = $emp_history;
    }
    public function pushEducation(Education $education) {
      $this->education[] = $education;
    }
    public function pushResidence(Residence $residence) {
      $this->residence[] = $residence;
    }
    public function pushProject(Project $project) {
      $this->projects[] = $project;
    }
  }
