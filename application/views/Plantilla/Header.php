<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $titulo ?> | mvc</title>
	<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<aside class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>       
      </button>
      <a class="navbar-brand" href="#>">Mercadeo App</a>
      </div>  

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	<ul class="nav navbar-nav">
      	  <li class="dropdown">
      	  	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Acciones <span class="caret"></span></a>
      	  	<ul class="dropdown-menu">
      	  		<li><a href="<?php echo base_url()?>Acciones/Agregar">Agregar</a></li>
      <li><a href="<?php echo base_url()?>Acciones/Listar">Listar</a></li>
      	  	</ul>
      	  </li>    		
      	</ul>
      </div>
     </div>
    </nav>
    </aside>




        