<?php
	require_once(__DIR__."/Model.php");
	require_once(__DIR__."/../classes/Work.php");
	require_once(__DIR__."/../classes/Album.php");
	require_once(__DIR__."/../classes/Picture.php");
	require_once(__DIR__."/../classes/File.php");
  require_once(__DIR__."/PhotosModel.php");
	require_once(__DIR__."/DatabaseModel.php");
	class WorksModel extends Model {
		private $works = null;
		public function get($user_id=1) {
      $this->works = array();
      $photosmodel = PhotosModel::getInstance();
      $db = DatabaseModel::getInstance();
			$db->connect();
      $sql_works = "SELECT * FROM works WHERE user_id=".$user_id;
      $result_works = $db->select($sql_works);
      while($row_works=$db->fetch_array($result_works)) {
        $work_name = $row_works['work_name'];
        $work_summ = $row_works['work_summ'];
        $work_desc = $row_works['work_desc'];
        $work_date = $row_works['post_date'];
        $sql_album = "SELECT * FROM works_albums WHERE user_id=".$user_id." AND"
        ." work_name='".$work_name."' LIMIT 1";
        $result_album = $db->select($sql_album);
        $album = null;
        if($row_album=$db->fetch_array($result_album)) {
          $album_name = $row_album['album_name'];
          $albums = $photosmodel->get($user_id,$album_name);
          if(sizeof($albums)>0)
            $album = $albums[0];
        }
        $work = new Work($user_id,$work_name,$work_summ,$work_desc,$work_date,$album);
        $sql_files = "SELECT * FROM files WHERE user_id=".$user_id." AND work_name='".$work_name."'";
        $result_files = $db->select($sql_files);
        while($row_files=$db->fetch_array($result_files)) {
          $file_name = $row_files["file_name"];
          $file_summ = $row_files["file_summ"];
          $file_path = $row_files["file_path"];
          $file = new File($user_id,$work_name,$file_name,$file_summ,$file_path);
          $work->pushFile($file);
        }
        $this->works[] = $work;
      }
      return $this->works;
		}
		public function post($json=null) {

		}
		public function __toString() {
			return json_encode($this->works);
		}
	}
