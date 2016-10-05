app.controller(
  "AboutController",
  [
    "$scope",
    "$timeout",
    "AboutService",
    function($scope,$timeout,AboutService) {
      function syncServices() {
        $scope.job_titles = AboutService.getJobTitles();
        $scope.employment_histories = AboutService.getEmploymentHistories();
        $scope.education = AboutService.getEducation();
        $scope.residence = AboutService.getResidence();
        $scope.projects = AboutService.getProjects();
      };
      syncServices();
      function setScope() {
        syncServices();
        //$scope.$apply();
        $timeout(function() {
          $(document.body).trigger("sticky_kit:recalc");
        },0);
      };
      AboutService.registerCallback(
        function() {
          setScope();
        }
      );
    }
  ]
);
