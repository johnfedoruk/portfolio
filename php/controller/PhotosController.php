<?php
  require_once(__DIR__."/Controller.php");
  require_once(__DIR__."/../model/PhotosModel.php");
  class PhotosController extends Controller {
    public function get($json=null) {
      $photosModel = PhotosModel::getInstance();
      $photosModel->get();
    }
    public function post($json=null) {
      $photosModel = PhotosModel::getInstance();
      $photosModel->post();
    }
  }
