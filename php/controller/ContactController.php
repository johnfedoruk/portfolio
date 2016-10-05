<?php
  require_once(__DIR__."/Controller.php");
  require_once(__DIR__."/../model/ContactModel.php");
  class ContactController extends Controller {
    public function get($json=null) {
      $contactModel = ContactModel::getInstance();
      $contactModel->get();
    }
    public function post($json=null) {
      $contactModel = ContactModel::getInstance();
      $contactModel->post();
    }
  }
