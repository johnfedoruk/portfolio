<?php
  require_once(__DIR__."/Controller.php");
  require_once(__DIR__."/../model/PageModel.php");
  class PageController extends Controller {
    public function get($page) {
      $pageModel = PageModel::getInstance();
      $pageModel->get($page);
    }
    public function post($json=null) {
      $pageModel = PageModel::getInstance();
      $pageModel->post($page);
    }
  }
