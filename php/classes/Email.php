<?php
  class Email {
    public $user_id;
    public $email;
    public function __construct(int $user_id,String $email) {
      $this->user_id = $user_id;
      $this->email = $email;
    }
  }
