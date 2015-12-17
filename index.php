<html ng-app="Evandro">
<head>
	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Evandro Diego Erlo</title>
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="libs/angular/angular.min.js"></script>
	<script src="libs/angular/angular-animate.min.js"></script>
	<script src="libs/angular/angular-route.min.js"></script>
	<script src="libs/angular/angular-aria.min.js"></script>
	<script src="libs/angular/angular-messages.min.js"></script>
	<script src="libs/material/material.js"></script>
	<script src="app.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="libs/material/material.css"/>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="libs/css/style.css">
</head>
<body ng-controller="homeCtrl" ng-style="imagem">
<div class="conteudo">	
  <md-fab-toolbar md-open="parametros.aberto" count="parametros.count" md-direction="{{parametros.selectedDirection}}">
    <md-fab-trigger class="align-with-text">
      <md-button aria-label="menu" class="md-fab md-primary">
       <md-icon md-svg-src="icons/menu48.svg"></md-icon>
      </md-button>
    </md-fab-trigger>

    <md-toolbar>
      <md-fab-actions class="md-toolbar-tools">
        <md-button aria-label="Contato" ng-href="#contato">
          Contato
        </md-button>
        <md-button aria-label="Projetos" ng-href="#projetos">
          Projetos
        </md-button>
        <md-button aria-label="photo" class="md-icon-button" ng-href="">
          <md-icon md-svg-src="icons/facebook2.svg"></md-icon>
        </md-button>
      </md-fab-actions>
    </md-toolbar>
  </md-fab-toolbar>
	<div ng-view></div>
</div> 
</body>
</html>