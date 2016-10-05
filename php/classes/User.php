<?php
  class User {
    public $user_id;
    public $username;
    public $first_name;
    public $middle_name;
    public $last_name;
    public function __construct(
      int $user_id,
      String $username,
      String $first_name,
      $middle_name,
      String $last_name
    ) {
      $this->user_id = $user_id;
      $this->username = $username;
      $this->first_name = $first_name;
      $this->middle_name = $middle_name;
      $this->last_name = $last_name;
    }
  }
