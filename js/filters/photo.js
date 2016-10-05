app.filter(
  "Photo",
  [
    function() {
      return function(picture,w,h) {
      	var root = "./php/";
      	var dimensions = "";
      	if(w!=null&&h!=null) {
      		dimensions = '&dimensions={"w":'+w+',"h":'+h+'}';
      	}
      	else if(w!=null) {
      		dimensions = '&dimensions={"w":'+w+'}';
      	}
      	else if(h!=null) {
      		dimensions = '&dimensions={"h":'+h+'}';
     	}
     	return root+"?content=image&user_id="+picture.user_id+"&album="+picture.album_name+"&image="+picture.picture_path+dimensions;
     	
 		//./php/?content=image&user_id={{user.user_id}}&album=Profile Photos&image={{user.profile_photos[0].picture_path}}&dimensions={"w":100,"h":150}
      };
    }
  ]
);
