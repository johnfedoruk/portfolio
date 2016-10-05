<?php
  require_once(__DIR__."/Controller.php");
  require_once(__DIR__."/../model/UserModel.php");
  class UserController extends Controller {
    public function get($json=null) {
      $userModel = UserModel::getInstance();
      $userModel->get();
    }
    public function post($json=null) {
      $userModel = UserModel::getInstance();
      $userModel->post();
    }
  }
