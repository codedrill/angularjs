<!DOCTYPE html>
<html lang="en-us" ng-app="rex">
    <head>
        <title>Learn and Understand AngularJS</title>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta charset="UTF-8">

        <!-- load bootstrap and fontawesome via CDN -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" />
        <style>
           
        </style>
        
        <!-- load angular via CDN -->
        <script src="//code.angularjs.org/1.3.0-rc.1/angular.min.js"></script>
        <script src="//code.angularjs.org/1.3.0-rc.1/angular-messages.min.js"></script>
        <script src="//code.angularjs.org/1.3.0-rc.1/angular-resource.min.js"></script>
        <script src="ng.js"></script>
    </head>
    <body>

        <header>
			<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand" href="/">AngularJS</a>
				</div>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
				</ul>
			</div>
			</nav>
		</header>

        <div class="container">

            <div ng-controller="mainController">
            
			<form name="userform" 	method="POST" >
				
					<input type="text" ng-model="username" name="name" Placeholder="Name" />
					
						<hr />
						<input type="number" ng-model="userphone" name="phone"  Placeholder="Phonenumber" />
						
						<hr />
						<input type="text" ng-model="userstate" name="state"  Placeholder="State" />
						
						<hr />
						<input type="button" ng-click="insertData()" name="submit" value="submit" />
						<input type="button" ng-click="retrieveData()" name="retrieve" value="retrieve" />
					</div>
					
			</form>
            </div>
            
		</div>
		<div ng-repeat="students in Details " ng-model="Details">
			{{students.name}}
			{{students.phone}}
			{{students.state}}
		</div>	
    </body>
</html>
