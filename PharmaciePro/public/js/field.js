var app = angular.module('App',  []);

  app.controller('MyFormCtrl', function($scope){
     $scope.allArticle = [];
     $scope.field = {
     	
     	
     }
     $scope.formData.dynamicFields = $scope.field;

      $scope.addFiels = function (){
      	$scope.formData.dynamicFields.push()
      }
  });