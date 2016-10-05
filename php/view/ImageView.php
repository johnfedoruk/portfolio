<?php
  require_once(__DIR__."/View.php");
  class ImageView extends View {
    public function render() {
  		$image = $this->model->getImage();
  		header("content-type:image/jpg");
  		imagejpeg($image,null,100);
  		imagedestroy($image);
  		die();
    }
  }
