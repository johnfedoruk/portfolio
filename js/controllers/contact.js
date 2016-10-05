app.controller(
  "ContactController",
  [
    "$scope",
    "$timeout",
    "ContactService",
    function($scope,$timeout,ContactService) {
      function syncServices() {
        $scope.phone_numbers = ContactService.getPhoneNumbers();
        $scope.emails = ContactService.getEmails();
      };
      syncServices();
      ContactService.registerCallback(
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
