<?php
  require_once(__DIR__."/View.php");
  class FileView extends View {
    public function render() {
  		$file = (String)$this->model;
      //die($file);
      if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($file).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: '.filesize($file));
        readfile($file);
        die();
      }
    }
  }
