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
<link rel="stylesheet" href="">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Equipe Etoile</title>
		
<style>#free-flash-header a,#free-flash-header a:hover {color:#363636;}#free-flash-header a:hover {text-decoration:none}</style>
<link rel="shortcut icon" type="image/ico" href="imagenes/icono.png"  />
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="bootstrap/css/style.css" rel="stylesheet" type="text/css" media="all">
	

<link rel="stylesheet" type="text/css" href="bootstrap/css/botones.css" />		

			
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
                    
         
 <?php
 $mysql=new mysqli("localhost","root","","peluqueria");
 if ($mysql->connect_error)
 die("Problemas con la conexión a la base de datos");
 $d3=($_SESSION['usuario']);
 $a4=($_SESSION['clave']);
$mysql->query("update usuario set nombre=('$_REQUEST[nombree]'), apellido=('$_REQUEST[apellidoo]'), documento=('$_REQUEST[documentoo]'), celular=('$_REQUEST[celularr]') where usuario.documento= '$d3' and usuario.contrasena= '$a4'") or
 die($mysql->error);
 echo '<br><br><font color="#ffbf00" size="+3" face="Trebuchet MS, Arial, Helvetica, sans-serif">SUS DATOS SE ACTUALIZARON EXISTOSAMENTE.</font><br><br><br>';

  echo "<img src='imagenes/chulo.png' width='250px' height='250px'>";

 $mysql->close();
 ?> 
 <br><br><br>
   <form method="post" action="cuenta.php">
 <button class="boton_1" style="width:150px"<input type="submit" name="login">VOLVER </button>
  </form>
  <br><br>
 </center>
 

</body>
</html>
 
 

