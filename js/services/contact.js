app.factory(
  "ContactService",
  [
    "$http",
    function($http) {
      var contact = null;
      var callbacks = [];
      var success = false;
      $http(
        {
          method:"GET",
          url:"./php/index.php",
          params:{content:"contact"}
        }
      ).then(
        function successCallback(response) {
          contact = response.data;
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
        getEmails:function() {
          if(contact!=null&&"emails" in contact)
            return contact.emails;
          return null;
        },
        getPhoneNumbers:function() {
          if(contact!=null&&"phone_numbers" in contact)
            return contact.phone_numbers;
          return null;
        }
      };
    }
  ]
);
