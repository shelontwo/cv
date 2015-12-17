  
  var EvandroApp = angular.module('Evandro', ['ngRoute','ngMaterial','ngMessages']);

 
  EvandroApp.config(function($routeProvider) {
    $routeProvider      
      .when('/', {
        templateUrl : 'template/home.html',
        controller  : 'homeCtrl'
      })    
      .when('/projetos', {
        templateUrl : 'template/projetos.html',
        controller  : 'projetosCtrl'
      })    
      .when('/contato', {
        templateUrl : 'template/contato.html',
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

  EvandroApp.controller('projetosCtrl', function($scope) {      
       $scope.mansory = function() {
            console.log('s');
            var $container = $('.projetos');
            $container.packery({
                itemSelector: '.item'
            });
      };
      $scope.mansory();
  });

  EvandroApp.controller('contatoCtrl', function($scope) {
      $scope.showHints = true;

  });