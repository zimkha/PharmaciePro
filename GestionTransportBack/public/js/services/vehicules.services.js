var myapp = angular.module('VehiculeService', [])
    .factory('vehciculeSevice', function($http){
        var url_api = 'http://localhost:8000/api';
          return {
          	getAll: function(){
          		return $http.get(url_api + '/vehicule');
          	}
          }
    });