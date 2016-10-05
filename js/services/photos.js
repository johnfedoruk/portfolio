app.factory(
  "PhotosService",
  [
    "$http",
    function($http) {
      var albums = [];
      var callbacks = [];
      var success = false;
      $http(
        {
          method:"GET",
          url:"./php/index.php",
          params:{content:"photos"}
        }
      ).then(
        function successCallback(response) {
          albums = response.data;
          for(var i=0;i<albums.length;i++){
            albums[i].pictures.sort(
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
        getAlbums:function() {
          return albums;
        },
        getPhotos:function() {
          var pictures = [];
          for(var i=0;i<albums.length;i++)
            pictures = pictures.concat(albums[i].pictures);
          return pictures;
        },
        getRandomPhotos:function(n) {
          var pictures = [];
          for(var i=0;i<albums.length;i++)
            pictures = pictures.concat(albums[i].pictures);
          var indicies = [];
          for(var i=0;i<pictures.length;i++)
            indicies.push(i);
          var ret = [];
          var index;
          for(var i=0;i<n&&i<pictures.length;i++) {
            index = Math.floor(Math.random()*indicies.length);
            ret.push(pictures[indicies[index]]);
            indicies.splice(index,1);
          }
          return ret;
        }
      };
    }
  ]
);
