app.controller(
  "WorksController",
  [
    "$scope",
    "$timeout",
    "WorksService",
    function($scope,$timeout,WorksService) {
      function syncServices() {
        $scope.works = WorksService.getWorks();
      };
      syncServices();
      WorksService.registerCallback(
        function() {
          syncServices();
          //$scope.$apply();
          $timeout(function() {
            $(document.body).trigger("sticky_kit:recalc");
          },10);
        }
      );
    }
  ]
);
