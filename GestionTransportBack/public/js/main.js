var app = angular.module('appRoutes', ['ngRoute']);
app.config(['$routeProvider', '$locationProvider',function ($routeProvider, $locationProvider){
  $routeProvider.when('/',{
    templateUrl: '/vehicules',
    controller: 'mainController'
  }).when('/client', {
  	 controller: 'clientController',
  	 templateUrl: 'view/client/index'
  }).when('/vehicules', {
  	 controller: 'congeController',
  	 templateUrl: 'api/conge'
  }).when('/type-conge', {
  	 templateUrl:'type-conge',
  	 controller: 'typecongeCtrl'
  }).when('/vehicule/:id', {
     controller: 'mainController',
     templateUrl: 'vehicule/show'
  })
   $locationProvider.hashPrefix('');

}]);

	app.factory('clientFactorys', function($http){
		return {
			getall: function()
			{    
				return $http.get('http://localhost:8000/api');

			}
		}
	});
	app.factory('factoryClient', function($http){
		return {
			getall: function(){
				return $http.get('http://localhost:8000/api/clients');
			}
		}
	});
	app.factory('congeFctry', function($http){
			return{
				getTypeconge: function(){
					return $http.get('http://localhost:8000/api/type-conge');
				}
			}
	});
	// Les actions de CRUD sur les vehicules
	app.factory('vehiculeFct', function($http){
			return{
				getall: function(){
					return $http.get('http://localhost:8000/api/vehicule');
				},
				post: function(dataPost)
				{
					return  $http.post('http://localhost:8000/api/vehicule', dataPost);
				},
        getOneVehicule: function(id){
          return $http.get('http://localhost:8000/api/vehicule/'+ id);
        }

			}
	});
    app.controller('mainController', function($scope, $http,vehiculeFct, $routeParams){
          $scope.vehicules = [];
          $scope.typevehicule = [];
          $scope.SingleVehicule = {};
          vehiculeFct.getOneVehicule($routeParams.id)
             .then(function success(result)
                {
                   $scope.SingleVehicule = result.data;
                }, function error(result){

                });
          $scope.initialise = function(){
            $http({
            method: 'GET',
            url: 'http://localhost:8000/api/vehicule'
           }).then(function success(result){
              $scope.vehicules = result.data;
          
           }, function error(result){
               // console.log(result);
           });
          }
           $scope.addvehicule = function (){
           
            PostData = {
            vh_poids : $scope.vh_poids,
             vh_hauteure : $scope.vh_hauteure,
             vh_longueur: $scope.vh_longueur,
             vh_largeur : $scope.vh_largeur,
             vh_ptac:  $scope.vh_ptac,
             typevehicule_id : $scope.typevehicule_id,
             vh_statut : 1, 
             vh_ptra: $scope.vh_ptra,
             vh_essieu : $scope.vh_essieu,
             vh_disponibilite : 1
            }

             console.log(PostData);
            $http.post('http://localhost:8000/api/vehicule', PostData)
                  .then(function success(result){
                      $scope.vh_essieu = "";
                      $scope.vh_ptac = "";
                      $scope.vh_largeur = "";
                      $scope.vh_longueur = "";
                      $scope.vh_poids = "";
                      $scope.vh_hauteure = ""
                      $scope.vh_ptra = "";
                     
                  }, function error(result){

                  });
                   $scope.initialise();
          }
          $scope.checkStatus = {
              Status : true
          }
           $http({
            method: 'GET',
            url: 'http://localhost:8000/api/vehicule'
           }).then(function success(result){
              $scope.vehicules = result.data;
            //console.log($scope.vehicules);
           }, function error(result){
                console.log(result);
           });
           $http({
              method: 'GET',
              url: 'http://localhost:8000/api/type_vehicule'
           }).then(function success(data){
             $scope.typevehicule = data.data;
               //console.log($scope.typevehicule);
           }, function error(data){
             console.log(result.statusText);
           });
           $scope.addVehicule = function(){

           }
        });
         
        /*
         *
         *
         */
 
    app.controller('clientController', function($scope, factoryClient){
     $scope.clients = [];
       var getClients = function(){
       	factoryClient.getall()
       	  .then(function(dataclients){
       	  	$scope.clients = dataclients.data;

       	  });
       };

    });
    app.controller('congeController', function($scope){

    });
    app.controller('typecongeCtrl', function($scope, $http){
    	$scope.typeconge = [];
    	$scope.error;
    		$http ({
    			method: 'GET',
    			url: 'http://localhost:8000/api/type-conge'
    		}).then(function sucess(result){
    		$scope.typeconge = result.data;
    		
    		}, function error(result){
    				console.log(result.statusText);
    		});
});

   