app.factory(
  "AboutService",
  [
    "$http",
    function($http) {
      var about = null;
      var callbacks = [];
      var success = false;
      $http(
        {
          method:"GET",
          //url:"./about2.json",
          url:"./php/index.php",
          params:{content:"about"}
        }
      ).then(
        function successCallback(response) {
          about = response.data;
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
        getJobTitles:function() {
          if(about!=null&&"job_titles" in about)
            return about.job_titles;
          return null;
        },
        getEmploymentHistories:function() {
          if(about!=null&&"employment_histories" in about)
            return about.employment_histories;
          return null;
        },
        getEducation:function() {
          if(about!=null&&"education" in about)
            return about.education;
          return null;
        },
        getResidence:function() {
          if(about!=null&&"residence" in about)
            return about.residence;
          return null;
        },
        getProjects:function() {
          if(about!=null&&"projects" in about)
            return about.projects;
          return null;
        }
      };
    }
  ]
);
