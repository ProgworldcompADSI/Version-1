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
<link rel="shortcut icon" type="image/ico" href="imagenes/icono.png"  />
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="bootstrap/css/style.css" rel="stylesheet" type="text/css" media="all">
        <link rel="stylesheet" href="bootstrap/css/style2.css" type="text/css" media="screen"/>
           	    <link rel="stylesheet" type="text/css" href="bootstrap/css/infoV.css" />
                	    <link rel="stylesheet" type="text/css" href="bootstrap/css/botones.css" />
                        <link rel="stylesheet" type="text/css" href="bootstrap/css/cuatro.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/selects.css" />
	

			
</head>
<body>

	<div class="page-container">
    		
		<header>
			<div class="container dark-bg no_left no_right">
            <div class="col-md-4 col-xs-3 no_left">
						
							<img src="imagenes/LOGO-FINAL2.png" width="280" height="150">
					
					</div>
				<div class="row">
				
					<?php include_once'../modelo/header3.php';?>

				</div>
			</div>
		</header>

<br>
		<div><div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                  <center>
<br><br>

     
      <select id="status" name="status" onChange="location.href=this.value" size="1" class="sel">
       
        <option value="reservadoa1.php">RESERVAS POR FECHA</option>
        <option value="reservadoa2.php">RESERVAS POR CEDULA</option>
        <option value="reservadoa3.php">RESERVAS POR EMPLEADO</option>
        <option value="reservadoa.php">HISTORIA DE RESERVAS</option>
     
		</select>


<br><br><br><br>
                    

<center><font color="#FF3300" size="+3" face="Trebuchet MS, Arial, Helvetica, sans-serif">CONSULTA DE RESERVAS:</font></center><br><br>
 <form name="areat" method="post"action="../controlador/libreria.php">
 <font color="#fffffff" size="+1">FECHA: <br><br><br>DE:
<input type="date" class="in" style="text-align: center; width:225px; height:30px" name="de" size="50" value="<?php if(isset($_REQUEST['dato1'])) 
{ echo $_REQUEST['dato1']; }?>"  >
   HASTA: <input type="date" class="in" style="text-align: center; width:225px; height:30px" name="hasta" size="50" value="<?php if(isset($_REQUEST['dato2'])) 
{ echo $_REQUEST['dato2']; }?>"  ><br><br>
 
<br><br>
<font color="#ffbf00" size="-1"><b>ESCOJA EL ESTADO A CONSULTAR<font color="#FF3300" size="+1"> *</font> : </b></font>
<font color="#ffffff" size="-1">
 <input type="checkbox" name="activo" value="ACTIVO" > ACTIVOS
 <input type="checkbox" name="realizados" value="REALIZADO" > REALIZADOS
  <input type="checkbox" name="cancelados" value="CANCELADO"> CANCELADOS
<br><br><br>
  <button class="boton_1" style="width:200px"<input type="submit" name="login">CONSULTAR </button>
<br><br><br>
</form>
 
 
 <?php
 error_reporting(E_ERROR);
 $mysql=new mysqli("localhost","root","","peluqueria");
 if ($mysql->connect_error)
 die("Problemas con la conexión a la base de datos");
 $d1=($_SESSION['usuario']);
 $a2=($_SESSION['clave']);


 $registro=$mysql->query("SELECT usuario.nombre,usuario.apellido,usuario.documento,idreservas, fecha, hora, servicio,precio,usuario, empleado,estado FROM reservas INNER JOIN usuario ON reservas.usuario=usuario.documento WHERE   reservas.fecha BETWEEN '$_REQUEST[dato1]' and '$_REQUEST[dato2]' and (reservas.estado='$_REQUEST[dato6]'or reservas.estado='$_REQUEST[dato7]' or reservas.estado='$_REQUEST[dato8]') ") or
 die($mysql->error);

 echo "<center>";
   echo '<table class="tabla1">';
 echo '<tr ><thead><th>CLIENTE  </th><th>   IDENTIFICACION </th><th>  FECHA  </th><th>  HORA </th> <th>SERVICIO </th><th>PRECIO </th><th>EMPLEADO </th><th>ESTADO </th><th> </th><th> </th></tr></thead>';
 while ($reg=$registro->fetch_array())
 {
 echo '<tr><tbody>';
 echo '<td WIDTH="800" 
	    HEIGHT="35">';
 echo $reg['nombre'].' '.$reg['apellido'];
 echo '</td>';
 echo '<td WIDTH="100">';
 echo $reg['documento'];
 echo '</td>';
 echo '<td WIDTH="800">';
 echo $reg['fecha'];
 echo '</td>';
  echo '<td WIDTH="150">';
 echo $reg['hora'];
 echo '</td>';
   echo '<td WIDTH="200">';
 echo $reg['servicio'];
 echo '</td>';
  echo '<td WIDTH="200">';
 echo $reg['precio'];
 echo '</td>';
  echo '<td WIDTH="200">';
 echo $reg['empleado'];
 echo '</td>';
  echo '<td WIDTH="200">';
 echo $reg['estado'];
 echo '<td WIDTH="500">';
echo "<font color='#CC0000'><a href='cancelara.php?idreservas=$reg[idreservas] '>CANCELAR <img src='imagenes/ex.png' width='30' height='30'></a>";
echo '<td WIDTH="500">';
echo "<font color='#CC0000'><a href='realizara.php?idreservas=$reg[idreservas] '>REALIZADO <img src='imagenes/chulo.png' width='30' height='30'></a>";

 echo '</td></tbody>';
 ?>

<form action="reportes_fecha.php" method="post" target="_blank"> 
 
 <input type="hidden" class="in" style="text-align: center; width:225px; height:30px" name="dee" size="50" value="<?php if(isset($_REQUEST['dato1'])) 
{ echo $_REQUEST['dato1']; }?>"  >
 <input type="hidden" class="in" style="text-align: center; width:225px; height:30px" name="hastaa" size="50" value="<?php if(isset($_REQUEST['dato2'])) 
{ echo $_REQUEST['dato2']; }?>"  >
 <input type="hidden" class="in" style="text-align: center; width:225px; height:30px" name="act" size="50" value="<?php if(isset($_REQUEST['dato6'])) 
{ echo $_REQUEST['dato6']; }?>"  >
 <input type="hidden" class="in" style="text-align: center; width:225px; height:30px" name="rea" size="50" value="<?php if(isset($_REQUEST['dato7'])) 
{ echo$_REQUEST['dato7']; }?>"  >
 <input type="hidden" class="in" style="text-align: center; width:225px; height:30px" name="canc" size="50" value="<?php if(isset($_REQUEST['dato8'])) 
{ echo $_REQUEST['dato8']; }?>"  >

 <?php
 
}
 $mysql->close();
 ?>
 </table>
<br><br><br>
<button class="boton_2" style="width:250px" input type="submit" name="login">GENERAR REPORTE </button>
	</form>

<br><br>

 </center>

 </center>
 

</body>
</html>
 
 
