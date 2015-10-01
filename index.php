<!doctype html>
<html ng-app>
  <head>
    <script src="./js/angular.min.js"></script>
  </head>
  <body>
    <div>
      <label>Name:</label>
      <input type="text" ng-model="yourName" placeholder="Enter a name here">
      <hr>
      <h1>Hello {{yourName}} {{1+1}}!</h1>
	  <script type="text/javascript">
		console.log("angular object: ",angular);
	</script>
    </div>
  </body>
</html>