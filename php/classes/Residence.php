<?php
  class Residence {
    public $user_id;
    public $district;
    public $city;
    public $province;
    public $country;
    public $area_code;
    public $start_date;
    public $end_date;
    public function __construct(
      int $user_id,
      $district,
      String $city,
      $province,
      String $country,
      String $area_code,
      $start_date,
      $end_date
    ) {
      $this->user_id = $user_id;
      $this->district = $district;
      $this->city = $city;
      $this->province = $province;
      $this->country = $country;
      $this->area_code = $area_code;
      $this->start_date = $start_date;
      $this->end_date = $end_date;
    }
  }
