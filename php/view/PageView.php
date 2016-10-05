<?php
  require_once(__DIR__."/View.php");
  class PageView extends View {
    public function render() {
      ob_start();
      include((String)$this->model);
      $page = ob_get_contents();
      ob_end_clean();
      die($page);
    }
  }
