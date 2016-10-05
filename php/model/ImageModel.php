<?php
	require_once(__DIR__."/Model.php");
	class ImageModel extends Model {
		private $image = null;
		public function get($user_id,$album,$image,$dimensions=false) {
			try {
				//phpinfo();
				$path = "../assets/images/users/$user_id/$album/$image";
				if($dimensions) {
					$thumb_path = $path.".".hash("md5",json_encode($dimensions)).".thumb";
					if(false & file_exists($thumb_path))
						$this->image = imagecreatefromjpeg($thumb_path);
					else {
						$src_size = getimagesize($path);
						$src_w = $src_size[0];
						$src_h = $src_size[1];
						$src = imagecreatefromjpeg($path);
						if(isset($dimensions->{"h"})&&isset($dimensions->{"w"})) {
							$dst_h = $dimensions->{"h"};
							$dst_w = $dimensions->{"w"};
							$v_align = 0;
							$h_align = 0;
							//die($dst_h." ".$dst_w);
						}
						else{
							if(isset($dimensions->{"h"})) {
								$dst_h = $dimensions->{"h"};
								$dst_w = $dst_h * $src_w / $src_h;
							}
							else if(isset($dimensions->{"w"})) {
								$dst_w = $dimensions->{"w"};
								$dst_h = $dst_w * $src_h / $src_w;
							}
							else
								die("Error");
							$v_align = 0;
							$h_align = 0;
						}
						$this->image = imagecreatetruecolor($dst_w,$dst_h);
						imagecopyresampled($this->image,$src,0,0,0,0,$dst_w,$dst_h,$src_w,$src_h);
						//imagejpeg($this->image, $thumb_path);
						imagedestroy($src);
					}
				}
				else {
					$this->image = imagecreatefromjpeg($path);
				}
			}
			catch(Exception $e) {
				
			}
		}
		public function post($json=null) {

		}
		public function getImage() {
			return $this->image;
		}
	}
