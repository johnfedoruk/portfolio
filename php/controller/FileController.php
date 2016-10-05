<?php
  require_once(__DIR__."/Controller.php");
  require_once(__DIR__."/../model/FileModel.php");
  class FileController extends Controller {
    public function get($json=null) {
      try {
        $filename = $_GET["filename"];
        $user_id = $_GET["user_id"];
        $works_name = $_GET["works_name"];
        $fileModel = FileModel::getInstance();
        $fileModel->get($filename,$user_id,$works_name);
      }
      catch(Exception $e) {

      }
    }
    public function post($json=null) {
      $fileModel = FileModel::getInstance();
      $fileModel->post();
    }
  }
