<?php
	require_once(__DIR__."/Model.php");
	require_once(__DIR__."/../classes/User.php");
	require_once(__DIR__."/DatabaseModel.php");
	class UserModel extends Model {
		private $user = null;
		public function get($user_id=1) {
      $db = DatabaseModel::getInstance();
			$db->connect();

			$sql = "SELECT * FROM users WHERE user_id=".$user_id;
			$result = $db->select($sql);

			if($row=$db->fetch_array($result)) {
        $username=$row['username'];
        $first_name=$row['first_name'];
        $middle_name=$row['middle_name'];
        $last_name=$row['last_name'];
        $this->user = new User(
          $user_id,
          $username,
          $first_name,
          $middle_name,
          $last_name
        );
      }
      return $this->user;
    }
    public function post() {

    }
		public function __toString() {
			return json_encode($this->user);
		}
  }
