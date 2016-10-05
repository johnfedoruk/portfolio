app.factory(
	"UserService",
	[
		"$http",
		function($http) {
			var user = null;
			var callbacks = [];
			var success = false;
			$http(
				{
					method:"GET",
					url:"./php/index.php",
					params:{content:"user"}
				}
			).then(
				function successCallback(response) {
					user = response.data;
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
				getUser:function() {
					return user;
				}
			};
		}
	]
);
