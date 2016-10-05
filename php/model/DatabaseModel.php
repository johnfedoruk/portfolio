<?php
	require_once(__DIR__."/Model.php");
	require_once(__DIR__."/ConfigModel.php");
	class DatabaseModel extends Model {
		protected static $connected = false;
		protected $connection = null;
		public function connect() {
			if(self::$connected)
				return;
			$config=ConfigModel::getInstance();
			$this->connection = mysqli_connect(
				$config->get("database_server"),
				$config->get("database_username"),
				$config->get("database_password")
			) or die("<h1>ACCESS DENIED TO DATABASE</h1>");
			mysqli_select_db(
				$this->connection,
				$config->get("database_name")
			) or $this->error();
			self::$connected=true;
		}
		private function error() {
			require_once(__DIR__."/ErrorModel.php");
			$errorModel = ErrorModel::getInstance();
			$errorModel->pushError(mysqli_error($this->connection));
			$this->close();
		}
		public function insert(String $sql) {
			mysqli_query($this->connection,$sql) or $this->error();
			return mysql_insert_id();
		}
		public function select(String $sql) {
			$result = mysqli_query($this->connection,$sql) or $this->error();
			return $result;
		}
		public function fetch_array($result) {
			return mysqli_fetch_array($result);
		}
		public function close() {
			mysqli_close($this->connection);
		}
		public function __destroy() {
			$this->close();
		}
	}
