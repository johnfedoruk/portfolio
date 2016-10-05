<?php
	require_once(__DIR__."/Model.php");
	require_once(__DIR__."/../classes/Album.php");
	require_once(__DIR__."/DatabaseModel.php");
	class PhotosModel extends Model {
		private $albums = null;
		public function get($user_id=1,$album_name=null) {
			$db = DatabaseModel::getInstance();
			$db->connect();

			if($album_name==null)
				$sql = "SELECT * FROM albums WHERE user_id=".$user_id;
			else
				$sql = "SELECT * FROM albums WHERE user_id=".$user_id." AND album_name='".$album_name."' LIMIT 1";
			$this->albums = array();
			$result_alb = $db->select($sql);
			while($row=$db->fetch_array($result_alb)) {
				$album = new Album($row["user_id"],$row["album_name"],$row["album_summ"]);
				$album_name = $row["album_name"];
				$sql = "SELECT * FROM pictures WHERE user_id=$user_id AND album_name='$album_name'";
				$result_pic = $db->select($sql);
				while($row=$db->fetch_array($result_pic)) {
					$album->pushPicture(
						new Picture(
							$row["position"],
							$row["user_id"],
							$row["album_name"],
							$row["picture_name"],
							$row["picture_summ"],
							$row["picture_path"],
							$row["post_date"]
						)
					);
				}
				$this->albums[] = $album;
			}
			return $this->albums;

			/*
			$this->album = new Album();
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
			*/
		}
		public function post($json=null) {

		}
		public function __toString() {
			return json_encode($this->albums);
		}
	}
