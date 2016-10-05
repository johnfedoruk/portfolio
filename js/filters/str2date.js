app.filter(
  "String2Date",
  [
    "$filter",
    function($filter) {
      return function(start,end) {
        var str = "";
        var dateFormat = "MMMM, y";
        try {
          if(start!=null&&end!=null) {
            var t1 = $filter('date')(Date.parse(start),dateFormat);
            var t2 = $filter('date')(Date.parse(end),dateFormat);
            str = t1+" to "+t2;
          }
          else if(start!=null&&end==null) {
            var t1 = $filter('date')(Date.parse(start),dateFormat);
            str = "since "+t1;
          }
          else if(start==null&&end!=null) {
            var t2 = $filter('date')(Date.parse(end),dateFormat);
            str = "completed "+t2;
          }
          else {
            str = "";
          }
        }
        catch(e) {
          console.log(e);
          str = "";
        }
        return str;
      };
    }
  ]
);
