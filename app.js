  
  var EvandroApp = angular.module('Evandro', ['ngRoute','ngMaterial']);

 
  EvandroApp.config(function($routeProvider) {
    $routeProvider      
      .when('/', {
        templateUrl : 'template/home.html',
        controller  : 'homeCtrl'
      })    
      .when('/sobre', {
        templateUrl : 'pages/sobre.html',
        controller  : 'sobreCtrl'
      })    
      .when('/contato', {
        templateUrl : 'pages/contato.html',
        controller  : 'contatoCtrl'
      });
  });

  EvandroApp.controller('homeCtrl', function($scope,$interval) {  

    $scope.aberto = false;
    $scope.parametros = {
      aberto: false,
      count: 0,
      selectedDirection: 'left'
    };
    $scope.quotes = [{"background-image":"url(img/portifolio/seta.png)"},{"background-image":"url(img/portifolio/compufacil.png)"},{"background-image":"url(img/portifolio/ita.png)"}];
    $scope.imagem = $scope.quotes[Math.floor(Math.random() * $scope.quotes.length)];
    $interval(function() {
       $scope.imagem = $scope.quotes[Math.floor(Math.random() * $scope.quotes.length)];
    }, 5000);
  });

  EvandroApp.controller('sobreCtrl', function($scope) {
    $scope.message = 'Look! I am an about page.';
  });

  EvandroApp.controller('contatoCtrl', function($scope) {
    $scope.message = 'Contact us! JK. This is just a demo.';
  });