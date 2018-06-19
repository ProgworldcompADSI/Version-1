<!DOCTYPE html>
<?php
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

<link rel="stylesheet" type="text/css" href="bootstrap/css/cuatro.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/selects.css" />
<script type="text/javascript" src="bootstrap/js/mostrar.js"></script>
<link rel="shortcut icon" type="image/ico" href="imagenes/icono.png"  />
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="bootstrap/css/style.css" rel="stylesheet" type="text/css" media="all">
	 <link rel="stylesheet" type="text/css" href="bootstrap/css/botones.css" />
	

			
</head>
<body>

	<div class="page-container">
    		
		<header>
			<div class="container dark-bg no_left no_right">
             <div class="col-md-4 col-xs-3 no_left">
						
							<img src="imagenes/LOGO-FINAL2.png" width="250" height="150">
					
					</div>
				<div class="row">

		
					<?php include_once'../modelo/header2.php';?>

				</div>
			</div>
		</header>

<br><br>
<div class="container">
      
                <div class="col-sm-12">	
<center><font color="#ffbf00" size="+6" face="Trebuchet MS, Arial, Helvetica, sans-serif">SERVICIOS</font><br><br><br></div>

<table>
<tr>
<td width="100px"><img src="imagenes/BIENVENIDO.png" width="450" height="250"></center><br></td>

<td width="100px">
<div align="center">
	<table border="0" width="500" cellspacing="0" cellpadding="0">
	<tr>
	<td><form action="index.php" method="post">
	<p><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFF" size="+2"><center>Por favor selecciona el servicio que deseas:</center><br><br>
    </font><font color="#ffbf00" size="3">
	&nbsp;<center><select id="status" name="status" onChange="mostrar(this.value);" size="1" class="sel">
        <option value="Inicio">SELECCIONAR SERVICIO</option>
        <option value="Hombre">CORTE HOMBRE</option>
        <option value="Mujer">CORTE MUJER</option>
        <option value="Cepillado">CEPILLADO</option>
        <option value="Manicure">MANICURE</option>
        <option value="Pedicure">PEDICURE</option>
        <option value="Tintura">TINTURA</option>
		</select></font></center> </p>
</form>





<div id="Hombre" class="element" style="display: none;"><br>

<center><img src="imagenes/CORTEH1.png" width="200" height="200"></center><br><br> 
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
 <form method="post" action="cepillado2.php">
 <table>
 <tr>
 <th height="35"><center><font color="#FFF"><h4>NOMBRE:</h4></font></center></th><th width="100"></th><th><center><font color="#FFF"><h4>APELLIDO:</h4></font></center></th></tr>
 <tr>
 <td>
 <input type="text" class="in" style="text-align: center; width:225px; height:30px" name="nombree" size="50" required autofocus value="<?php echo $reg['nombre']; ?>"readonly>
 </td>
 <td></td>
 <td>
 <input type="text" class="in"  style="text-align: center; width:225px; height:30px" name="apellidoo" size="50" required autofocus
 value="<?php echo $reg['apellido']; ?>" readonly>
 </td>
 <td height="20"></td>
 </tr>
 </table><br>
 
 
 
 
 
 <table>
 <tr>
<th height="35"><center><font color="#FFF"><h4>FECHA DEL SERVICIO:</h4></font></center></th><th width="100"></th>
<th><center><font color="#FFF"><h4>HORA DEL SERVICIO:</h4></font></center></th></tr>
 <tr>
 <td><input type="date" class="in" style="text-align: center; width:225px; height:30px" name="fecha" size="50" required autofocus>
 </td>
 <td></td>
 <td><select class="sel" name="horario">
  <option>6:00AM</option>
  <option>6:30AM</option>
  <option>7:00AM</option>
  <option>7:30AM</option>
  <option>8:00AM</option>
  <option>8:30AM</option>
  <option>9:00AM</option>
  <option>9:30AM</option>
  <option>10:00AM</option>
  <option>10:30AM</option>
  <option>11:00AM</option>
  <option>11:30AM</option>
  <option>12:00M</option>
  <option>12:30PM</option>
  <option>1:00PM</option>
  <option>1:30PM</option>
  <option>2:00PM</option>
  <option>2:30PM</option>
  <option>3:00PM</option>
  <option>3:30PM</option>
  <option>4:00PM</option>
  <option>4:30PM</option>
  <option>5:00PM</option>
  <option>5:30PM</option>
</select>
</td>
</tr>
</table><br>




<table>
<tr>
<th height="35"><center><font color="#FFF"><h4>SERVICIO ESCOGIDO:</h4></font></center></th><th width="100"></th>
<th><center><font color="#FFF"><h4>VALOR DEL SERVICIO:</h4></font></center></th></tr>
<tr>
<td><input type="text" class="in" style="text-align: center; width:225px; height:30px" value="CORTE DE HOMBRE" name="servicio" size="50"   readonly></td>
<td>
</td>
<td><input type="text" class="in" style="text-align: center; width:225px; height:30px" name="valor" size="50" required autofocus
 value="7.000" readonly>
</td>
</tr>
<tr height="20">
</tr>
</table>



<table>
<tr>

<td width="125"><th height="35"><center><font color="#FFF"><h4>EMPLEADO:</h4></font></center></th></tr></td>
<tr>
<input type="hidden" class="in" style="text-align: center; width:225px; height:30px" name="admi" size="50" required autofocus
 value="FLOR RODRIGUEZ" readonly>

<td>
</td>
 <?php
  $registro=$mysql->query("SELECT * FROM empleados") or
 die($mysql->error);
	 ?>
<td><select class="sel" name="empleado">
<?php
while($reg=$registro->fetch_array())
 {?>
  <option><?php echo $reg['nombre'] ." ". $reg['apellido'];?></option>
 <?php 
  }
	  $mysql->close();
	 ?>
</select>
</td>
</tr>
</table><br><br>

<center>
<table>
<tr>
<th>
<button class="boton_1" style="width:100px" input type="submit" name="login">RESERVAR </button>
</th>
</tr>
</form>
</table>
</center>
 <?php
 }

 $mysql->close();
 ?>
  <br><br>
 </center>
    
</div>

<div id="Mujer" class="element" style="display: none;"><br>
	<center><img src="imagenes/CORTEM1.png" width="200" height="200"></center><br><br> 
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
 
 <form method="post" action="cepillado2.php">
 <table>
 <tr>
 <th height="35"><center><font color="#FFF"><h4>NOMBRE:</h4></font></center></th><th width="100"></th><th><center><font color="#FFF"><h4>APELLIDO:</h4></font></center></th></tr>
 <tr>
 <td>
 <input type="text" class="in" style="text-align: center; width:225px; height:30px" name="nombree" size="50" required autofocus value="<?php echo $reg['nombre']; ?>"readonly>
 </td>
 <td></td>
 <td>
 <input type="text" class="in"  style="text-align: center; width:250px; height:30px" name="apellidoo" size="50" required autofocus
 value="<?php echo $reg['apellido']; ?>" readonly>
 </td>
 <td height="20"></td>
 </tr>
 </table><br>
 
 
 
 
 
 <table>
 <tr>
<th height="35"><center><font color="#FFF"><h4>FECHA DEL SERVICIO:</h4></font></center></th><th width="100"></th>
<th><center><font color="#FFF"><h4>HORA DEL SERVICIO:</h4></font></center></th></tr>
 <tr>
 <td><input type="date" class="in" style="text-align: center; width:225px; height:30px" name="fecha" size="50" required autofocus>
 </td>
 <td></td>
 <td><select class="sel" name="horario">
  <option>6:00AM</option>
  <option>6:30AM</option>
  <option>7:00AM</option>
  <option>7:30AM</option>
  <option>8:00AM</option>
  <option>8:30AM</option>
  <option>9:00AM</option>
  <option>9:30AM</option>
  <option>10:00AM</option>
  <option>10:30AM</option>
  <option>11:00AM</option>
  <option>11:30AM</option>
  <option>12:00M</option>
  <option>12:30PM</option>
  <option>1:00PM</option>
  <option>1:30PM</option>
  <option>2:00PM</option>
  <option>2:30PM</option>
  <option>3:00PM</option>
  <option>3:30PM</option>
  <option>4:00PM</option>
  <option>4:30PM</option>
  <option>5:00PM</option>
  <option>5:30PM</option>
</select>
</td>
</tr>
</table><br>




<table>
<tr>
<th height="35"><center><font color="#FFF"><h4>SERVICIO ESCOGIDO:</h4></font></center></th><th width="100"></th>
<th><center><font color="#FFF"><h4>VALOR DEL SERVICIO:</h4></font></center></th></tr>
<tr>
<td><input type="text" class="in" style="text-align: center; width:225px; height:30px" value="CORTE DE DAMA" name="servicio" size="50"   readonly></td>
<td>
</td>
<td><input type="text" class="in" style="text-align: center; width:225px; height:30px" name="valor" size="50" required autofocus
 value="7.000" readonly>
</td>
</tr>
<tr height="20">
</tr>
</table>



<table>
<tr>
<td width="125"><th height="35"><center><font color="#FFF"><h4>EMPLEADO:</h4></font></center></th></tr></td>
<tr>
<input type="hidden" class="in" style="text-align: center; width:225px; height:30px" name="admi" size="50" required autofocus
 value="FLOR RODRIGUEZ" readonly>
</td>

<td>
</td>
<?php
  $registro=$mysql->query("SELECT * FROM empleados") or
 die($mysql->error);
 
	 ?>
<td><select class="sel" name="empleado">
<?php
while($reg=$registro->fetch_array())
 {?>
  <option><?php echo $reg['nombre'] ." ". $reg['apellido'];?></option>
 <?php 
  }
	  $mysql->close();
	 ?>
</td>
</tr>
</table><br><br>

<center>
<table>
<tr>
<th>
<button class="boton_1" style="width:100px" input type="submit" name="login">RESERVAR </button>
</th>
</tr>
</form>
</table>
</center>
 



 <?php
 }

 $mysql->close();
 ?>
 
	
</div>

<div id="Cepillado" class="element" style="display: none;"><br>
		<center><img src="imagenes/CEPILLADO.png" width="200" height="200"></center><br><br> <br> 
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
 
 
 <form method="post" action="cepillado2.php">
 <table>
 <tr>
 <th height="35"><center><font color="#FFF"><h4>NOMBRE:</h4></font></center></th><th width="100"></th><th><center><font color="#FFF"><h4>APELLIDO:</h4></font></center></th></tr>
 <tr>
 <td>
 <input type="text" class="in" style="text-align: center; width:225px; height:30px" name="nombree" size="50" required autofocus value="<?php echo $reg['nombre']; ?>"readonly>
 </td>
 <td></td>
 <td>
 <input type="text" class="in"  style="text-align: center; width:225px; height:30px" name="apellidoo" size="50" required autofocus
 value="<?php echo $reg['apellido']; ?>" readonly>
 </td>
 <td height="20"></td>
 </tr>
 </table><br>
 
 
 
 
 
 <table>
 <tr>
<th height="35"><center><font color="#FFF"><h4>FECHA DEL SERVICIO:</h4></font></center></th><th width="100"></th>
<th><center><font color="#FFF"><h4>HORA DEL SERVICIO:</h4></font></center></th></tr>
 <tr>
 <td><input type="date" class="in" style="text-align: center; width:225px; height:30px" name="fecha" size="50" required autofocus>
 </td>
 <td></td>
 <td><select class="sel" name="horario">
  <option>6:00AM</option>
  <option>6:30AM</option>
  <option>7:00AM</option>
  <option>7:30AM</option>
  <option>8:00AM</option>
  <option>8:30AM</option>
  <option>9:00AM</option>
  <option>9:30AM</option>
  <option>10:00AM</option>
  <option>10:30AM</option>
  <option>11:00AM</option>
  <option>11:30AM</option>
  <option>12:00M</option>
  <option>12:30PM</option>
  <option>1:00PM</option>
  <option>1:30PM</option>
  <option>2:00PM</option>
  <option>2:30PM</option>
  <option>3:00PM</option>
  <option>3:30PM</option>
  <option>4:00PM</option>
  <option>4:30PM</option>
  <option>5:00PM</option>
  <option>5:30PM</option>
</select>
</td>
</tr>
</table><br>




<table>
<tr>
<th height="35"><center><font color="#FFF"><h4>SERVICIO ESCOGIDO:</h4></font></center></th><th width="100"></th>
<th><center><font color="#FFF"><h4>VALOR DEL SERVICIO:</h4></font></center></th></tr>
<tr>
<td><input type="text" class="in" style="text-align: center; width:225px; height:30px" value="CEPILLADO" name="servicio" size="50"   readonly></td>
<td>
</td>
<td><input type="text" class="in" style="text-align: center; width:225px; height:30px" name="valor" size="50" required autofocus
 value="7.000" readonly>
</td>
</tr>
<tr height="20">
</tr>
</table>



<table>
<tr>
<td width="125"><th height="35"><center><font color="#FFF"><h4>EMPLEADO:</h4></font></center></th></tr></td>
<tr>
<input type="hidden" class="in" style="text-align: center; width:225px; height:30px" name="admi" size="50" required autofocus
 value="FLOR RODRIGUEZ" readonly>
</td>
<td>
</td>
<?php
  $registro=$mysql->query("SELECT * FROM empleados") or
 die($mysql->error);
 
	 ?>
<td><select class="sel" name="empleado">
<?php
while($reg=$registro->fetch_array())
 {?>
  <option><?php echo $reg['nombre'] ." ". $reg['apellido'];?></option>
 <?php 
  }
	  $mysql->close();
	 ?>
</select>
</td>
</tr>
</table><br><br>

<center>
<table>
<tr>
<th>
<button class="boton_1" style="width:100px" input type="submit" name="login">RESERVAR </button>
</th>
</tr>
</form>
</table>
</center>


 <?php
 }

 $mysql->close();
 ?>

</div>


<div id="Manicure" class="element" style="display: none;"><br>
		<center><img src="imagenes/manicure.png" width="200" height="200"></center><br><br> 
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
 
 
  <form method="post" action="cepillado2.php">
 <table>
 <tr>
 <th height="35"><center><font color="#FFF"><h4>NOMBRE:</h4></font></center></th><th width="100"></th><th><center><font color="#FFF"><h4>APELLIDO:</h4></font></center></th></tr>
 <tr>
 <td>
 <input type="text" class="in" style="text-align: center; width:225px; height:30px" name="nombree" size="50" required autofocus value="<?php echo $reg['nombre']; ?>"readonly>
 </td>
 <td></td>
 <td>
 <input type="text" class="in"  style="text-align: center; width:225px; height:30px" name="apellidoo" size="50" required autofocus
 value="<?php echo $reg['apellido']; ?>" readonly>
 </td>
 <td height="20"></td>
 </tr>
 </table><br>
 
 
 
 
 
 <table>
 <tr>
<th height="35"><center><font color="#FFF"><h4>FECHA DEL SERVICIO:</h4></font></center></th><th width="100"></th>
<th><center><font color="#FFF"><h4>HORA DEL SERVICIO:</h4></font></center></th></tr>
 <tr>
 <td><input type="date" class="in" style="text-align: center; width:225px; height:30px" name="fecha" size="50" required autofocus>
 </td>
 <td></td>
 <td><select class="sel" name="horario">
  <option>6:00AM</option>
  <option>6:30AM</option>
  <option>7:00AM</option>
  <option>7:30AM</option>
  <option>8:00AM</option>
  <option>8:30AM</option>
  <option>9:00AM</option>
  <option>9:30AM</option>
  <option>10:00AM</option>
  <option>10:30AM</option>
  <option>11:00AM</option>
  <option>11:30AM</option>
  <option>12:00M</option>
  <option>12:30PM</option>
  <option>1:00PM</option>
  <option>1:30PM</option>
  <option>2:00PM</option>
  <option>2:30PM</option>
  <option>3:00PM</option>
  <option>3:30PM</option>
  <option>4:00PM</option>
  <option>4:30PM</option>
  <option>5:00PM</option>
  <option>5:30PM</option>
</select>
</td>
</tr>
</table><br>




<table>
<tr>
<th height="35"><center><font color="#FFF"><h4>SERVICIO ESCOGIDO:</h4></font></center></th><th width="100"></th>
<th><center><font color="#FFF"><h4>VALOR DEL SERVICIO:</h4></font></center></th></tr>
<tr>
<td><input type="text" class="in" style="text-align: center; width:225px; height:30px" value="MANICURE" name="servicio" size="50"   readonly></td>
<td>
</td>
<td><input type="text" class="in" style="text-align: center; width:225px; height:30px" name="valor" size="50" required autofocus
 value="7.000" readonly>
</td>
</tr>
<tr height="20">
</tr>
</table>



<table>
<tr>
<td width="125"><th height="35"><center><font color="#FFF"><h4>EMPLEADO:</h4></font></center></th></tr></td>
<tr>
<input type="hidden" class="in" style="text-align: center; width:225px; height:30px" name="admi" size="50" required autofocus
 value="FLOR RODRIGUEZ" readonly>
</td>
<td>
</td>
<?php
  $registro=$mysql->query("SELECT * FROM empleados") or
 die($mysql->error);
 
	 ?>
<td><select class="sel" name="empleado">
<?php
while($reg=$registro->fetch_array())
 {?>
  <option><?php echo $reg['nombre'] ." ". $reg['apellido'];?></option>
 <?php 
  }
	  $mysql->close();
	 ?>
</select>
</td>
</tr>
</table><br><br>

<center>
<table>
<tr>
<th>
<button class="boton_1" style="width:100px" input type="submit" name="login">RESERVAR </button>
</th>
</tr>
</form>
</table>
</center>
 
 

 <?php
 }

 $mysql->close();
 ?>

</div>

<div id="Pedicure" class="element" style="display: none;"><br>
		<center><img src="imagenes/PEDICURE.png" width="200" height="200"></center><br><br> 
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
 
 
 <form method="post" action="cepillado2.php">
 <table>
 <tr>
 <th height="35"><center><font color="#FFF"><h4>NOMBRE:</h4></font></center></th><th width="100"></th><th><center><font color="#FFF"><h4>APELLIDO:</h4></font></center></th></tr>
 <tr>
 <td>
 <input type="text" class="in" style="text-align: center; width:225px; height:30px" name="nombree" size="50" required autofocus value="<?php echo $reg['nombre']; ?>"readonly>
 </td>
 <td></td>
 <td>
 <input type="text" class="in"  style="text-align: center; width:225px; height:30px" name="apellidoo" size="50" required autofocus
 value="<?php echo $reg['apellido']; ?>" readonly>
 </td>
 <td height="20"></td>
 </tr>
 </table><br>
 
 
 
 
 
 <table>
 <tr>
<th height="35"><center><font color="#FFF"><h4>FECHA DEL SERVICIO:</h4></font></center></th><th width="100"></th>
<th><center><font color="#FFF"><h4>HORA DEL SERVICIO:</h4></font></center></th></tr>
 <tr>
 <td><input type="date" class="in" style="text-align: center; width:225px; height:30px" name="fecha" size="50" required autofocus>
 </td>
 <td></td>
 <td><select class="sel" name="horario">
  <option>6:00AM</option>
  <option>6:30AM</option>
  <option>7:00AM</option>
  <option>7:30AM</option>
  <option>8:00AM</option>
  <option>8:30AM</option>
  <option>9:00AM</option>
  <option>9:30AM</option>
  <option>10:00AM</option>
  <option>10:30AM</option>
  <option>11:00AM</option>
  <option>11:30AM</option>
  <option>12:00M</option>
  <option>12:30PM</option>
  <option>1:00PM</option>
  <option>1:30PM</option>
  <option>2:00PM</option>
  <option>2:30PM</option>
  <option>3:00PM</option>
  <option>3:30PM</option>
  <option>4:00PM</option>
  <option>4:30PM</option>
  <option>5:00PM</option>
  <option>5:30PM</option>
</select>
</td>
</tr>
</table><br>




<table>
<tr>
<th height="35"><center><font color="#FFF"><h4>SERVICIO ESCOGIDO:</h4></font></center></th><th width="100"></th>
<th><center><font color="#FFF"><h4>VALOR DEL SERVICIO:</h4></font></center></th></tr>
<tr>
<td><input type="text" class="in" style="text-align: center; width:225px; height:30px" value="PEDICURE" name="servicio" size="50"   readonly></td>
<td>
</td>
<td><input type="text" class="in" style="text-align: center; width:225px; height:30px" name="valor" size="50" required autofocus
 value="12.000" readonly>
</td>
</tr>
<tr height="20">
</tr>
</table>



<table>
<tr>
<td width="125"><th height="35"><center><font color="#FFF"><h4>EMPLEADO:</h4></font></center></th></tr></td>
<tr>
<input type="hidden" class="in" style="text-align: center; width:225px; height:30px" name="admi" size="50" required autofocus
 value="FLOR RODRIGUEZ" readonly>
</td>
<td>
</td>
<?php
  $registro=$mysql->query("SELECT * FROM empleados") or
 die($mysql->error);
 
	 ?>
<td><select class="sel" name="empleado">
<?php
while($reg=$registro->fetch_array())
 {?>
  <option><?php echo $reg['nombre'] ." ". $reg['apellido'];?></option>
 <?php 
  }
	  $mysql->close();
	 ?>
</select>
</td>
</tr>
</table><br><br>

<center>
<table>
<tr>
<th>
<button class="boton_1" style="width:100px" input type="submit" name="login">RESERVAR </button>
</th>
</tr>
</form>
</table>
</center>
 
 
 <?php
 }

 $mysql->close();
 ?>
</div>




<div id="Tintura" class="element" style="display: none;"><br>
	<center><img src="imagenes/TINTURA.png" width="200" height="200"></center><br><br>
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
 
  <form method="post" action="cepillado2.php">
 <table>
 <tr>
 <th height="35"><center><font color="#FFF"><h4>NOMBRE:</h4></font></center></th><th width="100"></th><th><center><font color="#FFF"><h4>APELLIDO:</h4></font></center></th></tr>
 <tr>
 <td>
 <input type="text" class="in" style="text-align: center; width:225px; height:30px" name="nombree" size="50" required autofocus value="<?php echo $reg['nombre']; ?>"readonly>
 </td>
 <td></td>
 <td>
 <input type="text" class="in"  style="text-align: center; width:225px; height:30px" name="apellidoo" size="50" required autofocus
 value="<?php echo $reg['apellido']; ?>" readonly>
 </td>
 <td height="20"></td>
 </tr>
 </table><br>
 
 
 
 
 
 <table>
 <tr>
<th height="35"><center><font color="#FFF"><h4>FECHA DEL SERVICIO:</h4></font></center></th><th width="100"></th>
<th><center><font color="#FFF"><h4>HORA DEL SERVICIO:</h4></font></center></th></tr>
 <tr>
 <td><input type="date" class="in" style="text-align: center; width:225px; height:30px" name="fecha" size="50" required autofocus>
 </td>
 <td></td>
 <td><select class="sel" name="horario">
  <option>6:00AM</option>
  <option>6:30AM</option>
  <option>7:00AM</option>
  <option>7:30AM</option>
  <option>8:00AM</option>
  <option>8:30AM</option>
  <option>9:00AM</option>
  <option>9:30AM</option>
  <option>10:00AM</option>
  <option>10:30AM</option>
  <option>11:00AM</option>
  <option>11:30AM</option>
  <option>12:00M</option>
  <option>12:30PM</option>
  <option>1:00PM</option>
  <option>1:30PM</option>
  <option>2:00PM</option>
  <option>2:30PM</option>
  <option>3:00PM</option>
  <option>3:30PM</option>
  <option>4:00PM</option>
  <option>4:30PM</option>
  <option>5:00PM</option>
  <option>5:30PM</option>
</select>
</td>
</tr>
</table><br>




<table>
<tr>
<th height="35"><center><font color="#FFF"><h4>SERVICIO ESCOGIDO:</h4></font></center></th><th width="100"></th>
<th><center><font color="#FFF"><h4>VALOR DEL SERVICIO:</h4></font></center></th></tr>
<tr>
<td><input type="text" class="in" style="text-align: center; width:225px; height:30px" value="TINTURA" name="servicio" size="50"   readonly></td>
<td>
</td>
<td><input type="text" class="in" style="text-align: center; width:225px; height:30px" name="valor" size="50" required autofocus
 value="60.000" readonly>
</td>
</tr>
<tr height="20">
</tr>
</table>



<table>
<tr>
<td width="125"><th height="35"><center><font color="#FFF"><h4>EMPLEADO:</h4></font></center></th></tr></td>
<tr>
<input type="hidden" class="in" style="text-align: center; width:225px; height:30px" name="admi" size="50" required autofocus
 value="FLOR RODRIGUEZ" readonly>
</td>
<td>
</td>
<?php
  $registro=$mysql->query("SELECT * FROM empleados") or
 die($mysql->error);
 
	 ?>
<td><select class="sel" name="empleado">
<?php
while($reg=$registro->fetch_array())
 {?>
  <option><?php echo $reg['nombre'] ." ". $reg['apellido'];?></option>
 <?php 
  }
	  $mysql->close();
	 ?>
</select>
</td>
</tr>
</table><br><br>

<center>
<table>
<tr>
<th>
<button class="boton_1" style="width:100px" input type="submit" name="login">RESERVAR </button>
</th>
</tr>
</form>
</table>
</center>
 
 
 <?php
 }

 $mysql->close();
 ?>
</div>

	</td>
</tr>
</table><br><br><br><br><br><br>
  </body>
</html>