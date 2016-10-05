app.filter(
  "FullName",
  [
    function() {
      return function(firstname,middlename,lastname) {
      	if(middlename!=null) {
      		try {
      			return firstname+" "+middlename.charAt(0)+". "+lastname;
      		}
      		catch(e) {
      			console.log(e);
      		}
      	}
      	return firstname+" "+lastname;
      };
    }
  ]
);
