<!DOCTYPE html>  
 <!-- index.php !-->  
 <html>  
      <head>  
           <title>Stock Entry</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
           
      </head>  
      <body>  
           
           <div class="container" style="width:700px;">  
               
                <div ng-app="myapp" ng-controller="usercontroller" ng-init="displayData()">  
                     <div class="container-fluid">
                      <div class="row">
                     <div class="col-sm-6">
                     <label>Product Name</label>  
                     <input type="text" name="first_name" ng-model="firstname" class="form-control" />  

                     <br />  
                     <label>Product Description</label>
                     <textarea  name="last_name" ng-model="lastname" class="form-control"></textarea>
                     <br /> 
                     <label>Upload Image</label>  
                     <input type="file"  ng-model="image1" accept="image/*" onchange="angular.element(this).scope().uploadedFile(this)" ng-required="true" class="btn btn-info"/>
                     <br /> 
                     <br>
                     <input type="hidden" ng-model="id" />  
                     <input type="submit" name="btnInsert" class="btn btn-primary form-control" ng-click="insertData()" value="{{btnName}}"/>  
                     <br /><br />  
                     </div> 
                     <div class="col-sm-6" style="height: 300px;">
                     <!--  Upload Image  -->
                     <img  id="output" class="img-responsive"/>
                     </div>
                     </div>
                     </div>
                     <div style="margin-top: 70px;"> </div>
                     <table class="table table-responsive ">  
                          <tr>  
                               <th>Product Name</th>  
                               <th>Description</th>  
                               <th>Update</th>  
                               <th>Delete</th>  
                          </tr>  
                          <tr ng-repeat="x in names">  
                               <td style="font-style: italic;font-weight: bold;">{{x.first_name}}</td>  
                               <td>{{x.last_name}}</td>  
                               <td><button ng-click="updateData(x.id, x.first_name, x.last_name)" class="btn btn-info btn-xs">Update</button></td>  
                               <td><button ng-click="deleteData(x.id )"class="btn btn-danger btn-xs">Delete</button></td>  
                          </tr>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 var app = angular.module("myapp",[]);  
 app.controller("usercontroller", function($scope, $http){  
      $scope.btnName = "ADD";  
      $scope.insertData = function(){  
           if($scope.firstname == null)  
           {  
                alert("First Name is required");  
           }  
           else if($scope.lastname == null)  
           {  
                alert("Last Name is required");  
           }  
           else  
           {  
                $http.post(  
                     "insert.php",  
                     {'firstname':$scope.firstname, 'lastname':$scope.lastname, 'btnName':$scope.btnName, 'id':$scope.id}  
                ).success(function(data){  
                     alert(data);  
                     $scope.firstname = null;  
                     $scope.lastname = null;  
                     $scope.btnName = "ADD";  
                     $scope.displayData();  
                });  
           }  
      }  
      $scope.displayData = function(){  
           $http.get("select.php")  
           .success(function(data){  
                $scope.names = data;  
           });  
      }  
      $scope.updateData = function(id, first_name, last_name){  
           $scope.id = id;  
           $scope.firstname = first_name;  
           $scope.lastname = last_name;  
           $scope.btnName = "Update";  
      }  
      $scope.deleteData = function(id){  
           if(confirm("Are you sure you want to delete this data?"))  
           {  
                $http.post("delete.php", {'id':id})  
                .success(function(data){  
                     alert(data);  
                     $scope.displayData();  
                });  
           }  
           else  
           {  
                return false;  
           }  
      }  
 });  
 </script>  
