<?php
  require_once(__DIR__."/Controller.php");
  require_once(__DIR__."/../model/AboutModel.php");
  class AboutController extends Controller {
    public function get($json=null) {
      $aboutModel = AboutModel::getInstance();
      $aboutModel->get();
    }
    public function post($json=null) {
      $aboutModel = AboutModel::getInstance();
      $aboutModel->post();
    }
  }
