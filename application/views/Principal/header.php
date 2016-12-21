<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/header.css">



 
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
        <li class="active"><a href=" <?php echo base_url(); ?>index.php/Principal">Home</a></li>
       <li><a href=" <?php echo base_url(); ?>index.php/Productos">Products</a></li>
        <li><a href=" <?php echo base_url(); ?>index.php/Contact">Contacto</a></li>    
         <li><a href="<?php echo base_url(); ?>index.php/Agregar_productos">Agregar Productos</a></li>    
      </ul>


    <!-- cerrar sesion y login -->
    <ul class="nav navbar-nav navbar-right">

      <?php
        if(!$this->session->has_userdata('usuario')):
            echo '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"> Logueate<span class="caret"></span></a>';
        else:
             echo '<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"> '. $this->session->userdata('usuario') .'<span class="caret"></span></a>';
        endif;

      ?>
        <ul class="dropdown-menu">

        <?php
            if(!$this->session->has_userdata('usuario')):                                           
                echo '<li><a href="#" role="button" data-toggle="modal" data-target="#login-modal" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
            else:
              echo '<li><a href="'. base_url() .'index.php/Usuarios/cerrar_sesion" role="button"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesion</a></li>';
            endif;
        ?>
          
          
        </ul>
      </li>
      
    </ul>

    </div>
  </div>
</nav>

        <!-- BEGIN # MODAL LOGIN -->
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header" align="center">
                                  <img class="img-circle" id="img_logo" src="http://bootsnipp.com/img/logo.jpg">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </button>
                              </div>
                                      
                                      <!-- Begin # DIV Form -->
                                        <div id="div-forms">
                                                                        
                                                                  <!-- Begin # Login Form -->
                                                                  <form id="login-form" method="POST" action="<?php echo base_url(); ?>index.php/Usuarios/ingresar">
                                                                          <div class="modal-body">
                                                                                <div id="div-login-msg">
                                                                                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                                                                                <span id="text-login-msg">Type your username and password.</span>
                                                                                </div>
                                                                                <input id="login_username" name="username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                                                                                <input id="login_password" name="password" class="form-control" type="password" placeholder="Password" required>
                                                                                <div class="checkbox">
                                                                                    <label>
                                                                                          <input type="checkbox"> Remember me
                                                                                    </label>
                                                                                </div>
                                                                          </div>
                                                                          <div class="modal-footer">
                                                                                <div>
                                                                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                                                                                </div>
                                                                                <div>
                                                                                    <button id="login_lost_btn"  type="button" class="btn btn-link">Lost Password?</button>
                                                                                    <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                                                                                </div>
                                                                          </div>
                                                                  </form>
                                                                  <!-- End # Login Form -->                                          

                                                                  <!-- Begin | Lost Password Form -->
                                                                  <form id="lost-form" style="display:none;">
                                                                        <div class="modal-body">
                                                                                <div id="div-lost-msg">
                                                                                      <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                                                                      <span id="text-lost-msg">Type your e-mail.</span>
                                                                                </div>
                                                                                <input id="lost_email" class="form-control" type="text" placeholder="E-Mail (type ERROR for error effect)" required>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                                  <div>
                                                                                      <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                                                                                  </div>
                                                                                  <div>
                                                                                      <button id="lost_login_btn" type="button" class="btn btn-link">Log In</button>
                                                                                      <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                                                                                  </div>
                                                                        </div>
                                                                  </form>
                                                                  <!-- End | Lost Password Form -->

                                                                  <!-- Begin | Register Form -->
                                                                  <form id="register-form" style="display:none;">
                                                                    <div class="modal-body">
                                                                            <div id="div-register-msg">
                                                                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                                                                <span id="text-register-msg">Register an account.</span>
                                                                            </div>

                                                                            <input id="register_username" class="form-control" type="text" placeholder="Username (type ERROR for error effect)" required>
                                                                            <input id="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                                                                            <input id="register_password" class="form-control" type="password" placeholder="Password" required>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                            <div>
                                                                                <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                                                                            </div>
                                                                            <div>
                                                                                <button id="register_login_btn" type="button" class="btn btn-link">Log In</button>
                                                                                <button id="register_lost_btn" type="button" class="btn btn-link">Lost Password?</button>
                                                                            </div>
                                                                    </div>
                                                                  </form>
                                                                  <!-- End | Register Form -->      
                                        </div>
                                        <!-- End # DIV Form -->

                                                                     
                          </div>
                      </div>
        </div>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/login.js"></script>  


