app.factory(
  "WorksService",
  [
    "$http",
    function($http) {
      var works = [];
      var callbacks = [];
      var success = false;
      $http(
        {
          method:"GET",
					url:"./php/index.php",
					params:{content:"works"}
        }
      ).then(
        function successCallback(response) {
          works = response.data;
          for(var i=0;i<works.length;i++){
            works[i].album.pictures.sort(
              function(a,b) {
                return a.position - b.position;
              }
            );
          }
          success = true;
          for(i=0;i<callbacks.length;i++) {
            try {
              callbacks[i]();
            }
            catch(e) {
              console.log(e);
            }
          }
        }
      );
      return {
        registerCallback:function(callback) {
          if(success) {
            try {
              callback();
            }
            catch(e) {
              console.log(e);
            }
          }
          else
            callbacks.push(callback);
        },
        getWorks:function() {
          return works;
        },
        getNumberPosts:function() {
          return works.length;
        }
      };
    }
  ]
);


/*
var works = {
  user_id:null,
  work_name:null,
  work_summ:null,
  work_desc:null,
  work_date:null,
  gallery: {
    user_id:null,
    album_name:null,
    album_summ:null,
    pictures:[
      {
        position:null,
        user_id:null,
        album_name:null,
        picture_name:null,
        picture_summ:null,
        picture_path:null,
        post_date:null
      }
    ]
  },
  files: [
    {
      user_id:null,
      work_name:null,
      file_name:null,
      file_summ:null,
      file_path:null
    }
  ]
};
*/
