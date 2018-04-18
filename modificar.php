<!DOCTYPE html>
<?php
error_reporting(E_ERROR);
session_start();
if ($_SESSION['estado']!="1")
{
	header("Location: logout.php");
}
?>
<html><head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Equipe Etoile</title>
		
<style>#free-flash-header a,#free-flash-header a:hover {color:#363636;}#free-flash-header a:hover {text-decoration:none}</style>
<link rel="shortcut icon" type="image/ico" href="imagenes/icono.png"  />
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="bootstrap/css/style.css" rel="stylesheet" type="text/css" media="all">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/botones.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/selects.css" />
	
<style type="text/css">

* {
 padding:0px;
 margin:0px;
 font-family: Trebuchet MS, Arial, Helvetica, sans-serif;
 font-size:+6;
}


ul, ol {
 list-style:none;
}

.nav li a {
background-color:#333;
 color:#ffbf00;
 text-decoration:none;
 padding: 10px 15px;
 display:block;
}

.nav li a:hover {
 background-color:#666;
}


.nav li ul {
 display:none;
 position:absolute;
}

.nav li:hover > ul {
 display:block;
}

.nav li ul li {
 position:relative;
}

.nav li ul li ul {
 right:-140px;
 top:0px;
}

</style>
	

			
</head>
<body>

	<div class="page-container">
    		
		<header>
			<div class="container dark-bg no_left no_right">
            <div class="col-md-4 col-xs-12 no_left">
						
						<img src="imagenes/LOGO-FINAL2.png" width="280" height="150">
					
					</div>
				<div class="row">

		
					<?php include_once'../modelo/header2.php';?>

				</div>
			</div>
		</header>

<br>
		<div><div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                  <center>
                    <div class="container">
        <div class="card card-container">
    
    <?php include_once'../modelo/Musuario.php';?>
<br><br>       
 <?php
 error_reporting(E_ERROR);
 $mysql=new mysqli("localhost","root","","peluqueria");
 if ($mysql->connect_error)
 die("Problemas con la conexión a la base de datos");
 $d2=($_SESSION['usuario']);
 $a3=($_SESSION['clave']);
 
  $registro=$mysql->query("SELECT nombre, apellido, documento, celular, contrasena FROM usuario  where 
 documento = '$d2' and contrasena = '$a3'") or
 die($mysql->error);

 if ($reg=$registro->fetch_array())
 {
 ?>
 <form method="post" action="modificar1.php">
<h4>INGRESE SU CONTRESEÑA ACTUAL :</h4><br>
 <input type="password" class="in" style="width:300px; height:30px" name="antigua" size="50" required autofocus
>
 <br><br>

  <button class="boton_1" style="width:125px" input type="submit" name="login">VALIDAR </button>
 </form>
<br>

 <?php
 }

 $mysql->close();
 ?>
                       <br>
            
            
        </div>
    </div> 
  </center>
</div>
					</div>



		</footer>
	
	</div>
  </body>
</html>