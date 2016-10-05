<?php
  require_once(__DIR__."/Controller.php");
  require_once(__DIR__."/../model/ImageModel.php");
  class ImageController extends Controller {
    public function get($json=null) {
      $imageModel = ImageModel::getInstance();
      $user_id = $_GET['user_id'] or die("ERROR - no user_id specified");
      $album = $_GET['album'] or die("ERROR - no album specified");
      $image = $_GET['image'] or die("ERROR - no image specified");
      $dimensions = ((isset($_GET["dimensions"]))?(json_decode($_GET["dimensions"])):(false));
      $imageModel->get($user_id,$album,$image,$dimensions);
    }
    public function post($json=null) {
      $imageModel = ImageModel::getInstance();
      $imageModel->post();
    }
  }
