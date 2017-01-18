<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Listar datos con Angular, MySQL y PHP</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

  </head>
  <body>
    <div class="container">

      <h1 align="center">Listar datos con Angular, MySQL y PHP</h1>

      <div class="row" align="center">
        

        <div class="col-md-12">          

          <div ng-app="listarRegistros" ng-controller="postresController">

          <table class="table table-striped">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
              </tr>          
            </thead>
            <tbody>
              <tr ng-repeat="x in names">
                <td>{{ x.Nombre }}</td>
                <td>S/. {{ x.Precio }}</td>
                <td>{{ x.Stock }} unidades</td>
              </tr>
            </tbody>
          </table> 
           
          </div>
           
          <script type="text/javascript">
              var app = angular.module('listarRegistros', []);
              app.controller('postresController', function($scope, $http) {
                  $http.get("php/")
                  .then(function (response) {$scope.names = response.data.records;});
              });       
          </script>

          
        </div>

        
      </div>
      
    </div>

    <br>

  <footer>

      <div class="container text-center">

        <p class="text-muted credit">

          Desarrollado por <a href="http://www.collectivecloudperu.com" target="blank">Collective Cloud Peru</a>

        </p>

      </div>        

    </footer>    

  </body>
</html>