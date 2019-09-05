<!DOCTYPE html>
<html lang = "en">
	<head>
		<script src = "js/angular.js"></script>
		<script src = "js/app.js"></script>
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<meta charset = "UTF-8" name = "viewport" content = "width=device-width, initial-scale=1"/>
	</head>
<body ng-app = "myModule" ng-controller = "myController">
	<nav class = "navbar navbar-default">
		<div class = "container-fluid">
			<a class = "navbar-brand" href = "https://sourcecodester.com" >Sourcecodester</a>
		</div>
	</nav>
	<div class = "col-md-3"></div>
	<div class = "col-md-6 well">
		<h3 class = "text-primary">AngularJS CRUD OPERATION WITH PHP/MySQLI - Part 1</h3>
		<hr style = "border-top:1px dotted #ccc;">
		<form>
			<div class = "form-inline">
				<label>Firstname</label>
				<input type = "text" class = "form-control" ng-model = "firstname" id = "firstname"/>
				<label>Lastname</label>
				<input type = "text" class = "form-control" ng-model = "lastname" id = "lastname"/>
				<button type = "button" class = "btn btn-primary form-control" ng-click = "insertData()"><span class = "glyphicon glyphicon-save"></span> Submit</button>
				<br /><br />
				<div ng-model = "message" ng-show = "msgBox" class = "alert alert-info">{{message}}</div>
			</div>
		</form>
		<br />
		<table class = "table table-responsive table-bordered alert-warning">
			<thead>
				<tr>
					<th>Firstname</th>
					<th>Lastname</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat = "member in members">
					<td>{{member.firstname}}</td>
					<td>{{member.lastname}}</td>
					<td><center><button class = "btn btn-warning"><span class = "glyphicon glyphicon-edit"></span></button> <button class = "btn btn-danger"><span class = "glyphicon glyphicon-remove"></span></button></center></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>	
</html>