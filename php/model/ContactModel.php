<?php
	require_once(__DIR__."/Model.php");
	require_once(__DIR__."/../classes/Contact.php");
	require_once(__DIR__."/DatabaseModel.php");
	class ContactModel extends Model {
		private $contact = null;
		public function get($json=null) {
			$this->contact = new Contact();
			$db = DatabaseModel::getInstance();
			$db->connect();
			$sql = "SELECT * FROM emails";
			$result = $db->select($sql);
			while($row=$db->fetch_array($result))
				$this->contact->pushEmail(new Email($row["user_id"],$row["email"]));
			$sql = "SELECT * FROM phone_numbers";
			$result = $db->select($sql);
			while($row=$db->fetch_array($result))
				$this->contact->pushPhoneNumber(new PhoneNumber($row["phone_number"]));
		}
		public function post($json=null) {

		}
		public function __toString() {
			return json_encode($this->contact);
		}
	}
