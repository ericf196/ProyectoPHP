<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;}
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href=" <?php echo base_url(); ?>/index.php/Principal">Home</a></li>
       <li><a href=" <?php echo base_url(); ?>index.php/Productos ">Products</a></li>
        <li><a href=" <?php echo base_url(); ?>index.php/Contact ">Contacto</a></li>        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  

<div class="container">
  <h2>Contactanos</h2>
  <form name="formulario_contacto" method="POST" action="<?php echo base_url();?>index.php/Contact/guardarContacto">
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" class="form-control" id="email" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="asunto">Asunto:</label>
      <input type="text" name="asunto" class="form-control" id="asunto" placeholder="Asunto">
    </div>
    
    <div class="form-group">
      <label for="comentario">Cometario:</label>
      <textarea id="comentario" name="comentario" class="form-control" rows="4" cols="50" name="comentario" placeholder="Comentario"></textarea>
    </div>
    
    <button type="submit" class="btn btn-default">Enviar</button>
  </form>
</div>
<br/>
<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

</body>
</html>

