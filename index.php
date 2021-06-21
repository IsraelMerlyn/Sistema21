<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <title>Login - <?php include('dist/includes/title.php');?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

    <div class="login-box">
      <div class="login-logo">
  
      </div><!-- /.login-logo -->
      <div class="login-box-body">
      <H1>
        <p class="login-box-msg">Inicio de sesión </p>
        </H1>
        <form action="login.php" method="post">

          <div class="form-group has-feedback">
            <input type="text" class="form-control" id="inputime1" name="username" value="" required>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control"  name="password" value="" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  <div class="form-group has-feedback">
         
          </div>
          <center>
          <div class="row">
			<div class="col-xs-6 pull-right">
			  <!--<button type="reset" class="btn btn-block btn-flat">Limpiar</button>-->
            </div><!-- /.col -->
            
			<div class="col-xs-6 pull-right">
       <button type="submit" class="btn btn-primary btn-block btn-flat" name="login" default>Ingresar</button>
      </div><!-- /.col -->
          </div>
          </center>
        </form>



      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <!---
       <center>
         <h2>Usuarios/ contraseñas</h2>
         <h4>Docente:Usuario/contraseña=vinicius/vinicius </h4>
           <h4>Docente:Usuario/contraseña=mercury/mercury </h4>
             <h4>alumno:Usuario/contraseña=suckov/suckov </h4>
<h4>alumno:Usuario/contraseña=sergio/12345 </h4>

       </center>--->
   
<!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>

  </body>
</html>
