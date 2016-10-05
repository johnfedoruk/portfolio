<?php
	require_once(__DIR__."/Model.php");
	require_once(__DIR__."/../classes/About.php");
	require_once(__DIR__."/DatabaseModel.php");
	class AboutModel extends Model {
		private $about = null;
		public function get($json=null) {
			$this->about = new About();
			$db = DatabaseModel::getInstance();
			$db->connect();

			$sql = "SELECT * FROM job_titles";
			$result = $db->select($sql);
			while($row=$db->fetch_array($result))
				$this->about->pushJobTitle(
					new JobTitle(
						$row["user_id"],
						$row["job_title"]
					)
				);

			$sql = "SELECT * FROM employment_histories";
			$result = $db->select($sql);
			while($row=$db->fetch_array($result))
				$this->about->pushEmploymentHistory(
					new EmploymentHistory(
						$row["user_id"],
						$row["roll"],
						$row["employer_site"],
						$row["employer_name"],
						$row["start_date"],
						$row["end_date"]
					)
				);

			$sql = "SELECT * FROM education";
			$result = $db->select($sql);
			while($row=$db->fetch_array($result))
				$this->about->pushEducation(
					new Education(
						$row["user_id"],
						$row["ed_title"],
						$row["school_site"],
						$row["school_name"],
						$row["start_date"],
						$row["end_date"]
					)
				);

			$sql = "SELECT * FROM residence";
			$result = $db->select($sql);
			while($row=$db->fetch_array($result))
				$this->about->pushResidence(
					new Residence(
						$row["user_id"],
						$row["district"],
						$row["city"],
						$row["province"],
						$row["country"],
						$row["area_code"],
						$row["start_date"],
						$row["end_date"]
					)
				);

			$sql = "SELECT * FROM projects";
			$result = $db->select($sql);
			while($row=$db->fetch_array($result))
				$this->about->pushProject(
					new Project(
						$row["user_id"],
						$row["project_name"],
						$row["project_path"],
						$row["project_summ"],
						$row["project_desc"],
						$row["start_date"],
						$row["end_date"]
					)
				);
		}
		public function post($json=null) {

		}
		public function __toString() {
			return json_encode($this->about);
		}
	}
