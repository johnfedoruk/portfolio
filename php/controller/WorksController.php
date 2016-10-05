<?php
  require_once(__DIR__."/Controller.php");
  require_once(__DIR__."/../model/WorksModel.php");
  class WorksController extends Controller {
    public function get($json=null) {
      $worksModel = WorksModel::getInstance();
      $worksModel->get();
    }
    public function post($json=null) {
      $worksModel = worksModel::getInstance();
      $worksModel->post();
    }
  }
