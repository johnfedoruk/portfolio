<?php
  require_once(__DIR__."/Model.php");
  class ConfigModel extends Model {
  	protected static $loaded = false;
    protected $ini;
    private function load() {
      $config_path = __DIR__."/../../config.ini";
      $this->ini=parse_ini_file($config_path);
      self::$loaded=true;
    }
    public function get(String $config) {
      if(!self::$loaded)
        $this->load();
      return $this->ini[$config];
    }
  }
