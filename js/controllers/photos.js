app.controller(
  "PhotosController",
  [
    "$scope",
    "PhotosService",
    function($scope,PhotosService) {
      function syncServices() {
        $scope.photos = PhotosService.getRandomPhotos(9);
        $scope.albums = PhotosService.getAlbums();
      }
      syncServices();
      PhotosService.registerCallback(
        function() {
          syncServices();
        }
      )
      $scope.getAlbumPictures = function(album_name) {
        for(var i=0;i<$scope.albums.length;i++) {
          if($scope.albums[i].album_name==album_name)
            return $scope.albums[i].pictures;
        }
        return [];
      }
    }
  ]
);
