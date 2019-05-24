<!DOCTYPE html>
<html ng-app = "appRoutes">
<head>
	<title></title>
 
  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
 
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
     <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
     <link rel="stylesheet" type="text/css" href="{{ asset('css/dashborb.css')}}">
    <!--
       <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/dashborb.css')}}">
   <script type="text/javascript" src="{{ asset('js/jquery-3.1.1.slim.min.js')}}"></script>
     <script type="text/javascript" src="{{ asset('js/tether.min.js')}}"></script>
	       <script type="text/javascript" src="{{ asset('js/bootstrap.min.js')}}"></script>
   -->
    <script type="text/javascript" src="{{asset('js/angular.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('js/angular.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/angular-route.js')}}"></script>
  
    <script type="text/javascript" src="{{ asset('js/main.js')}}"></script>
</head>
<body>
     <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
      <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">GESTION TRANSPORT</a>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#/type-conge">Conges/ TypeConge</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#/">Home <span class="sr-only"></span></a>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#">EMPLOYES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">AFFECTATIONS</a>
            </li>
          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#">MARCHANDISES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">LIVRAISONS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">FOURNISSEURS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#/clients">CLIENTS</a>
            </li>
          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="#/conge">CONGES</a>
            </li>
           
          </ul>
        </nav>

        <main class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 pt-3">
          <h1>Dashboard</h1>
              <div class="container-fluid">
               <ng-view></ng-view>
             </div>

          
        </main>
      </div>
    </div>








 


</body>
</html>