<?php
  require_once(__DIR__."/Email.php");
  require_once(__DIR__."/PhoneNumber.php");
  class Contact {
    public $emails;
    public $phone_numbers;
    public function __construct() {
      $this->emails = array();
      $this->phone_numbers = array();
    }
    public function pushEmail(Email $email) {
      $this->emails[] = $email;
    }
    public function pushPhoneNumber(PhoneNumber $phone_number) {
      $this->phone_numbers[] = $phone_number;
    }
  }
