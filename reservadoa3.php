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
       
        <option value="reservadoa3.php">RESERVAS POR EMPLEADO</option>
        <option value="reservadoa.php">HISTORIA DE RESERVAS</option>
        <option value="reservadoa1.php">RESERVAS POR FECHA</option>
         <option value="reservadoa2.php">RESERVAS POR CEDULA</option>
     
		</select>


<br><br><br><br>       

 <center><font color="#FF3300" size="+3" face="Trebuchet MS, Arial, Helvetica, sans-serif">RESERVAS:</font></center><br><br>



 <form name="areat" method="post"action="reservadoa3.php">

 EMPLEADO A CONSULTAR:     
<input type="text" class="form-control" name="empleadoa" placeholder="Empleado" required autofocus style="width:350px; height:40px"> 
<br>

  <button class="boton_1" style="width:200px"<input type="submit" name="login">INGRESAR </button>
<br><br>
</form>
 
 <?php
 
 error_reporting(E_ERROR);
 $mysql=new mysqli("localhost","root","","peluqueria");
 if ($mysql->connect_error)
 die("Problemas con la conexiأ╠n a la base de datos");
 $d1=($_SESSION['usuario']);
 $a2=($_SESSION['clave']);
 $a5=$_POST['empleadoa'];

 
 $registro=$mysql->query("SELECT usuario.nombre,usuario.apellido,usuario.documento,idreservas, fecha, hora, servicio,precio,usuario, empleado,estado FROM reservas INNER JOIN usuario ON reservas.usuario=usuario.documento where reservas.empleado like'%$a5%' ") or
 die($mysql->error);

   echo '<table class="tabla1">';
   //
 echo '<tr ><thead><th><center> EMPLEADO  </th><th>   CLIENTE </th><th><center>  SERVICIO  </th><th>  FECHA </th> <th>HORA </th><th>PRECIO </th><th>ESTADO </th><th> </th><th> </th></tr></thead>';

while ($reg=$registro->fetch_array())
 {
 echo '<tr><tbody>';
 echo '<td WIDTH="600" 
	    HEIGHT="35">';
 echo $reg['empleado'];
 echo '</td>';
 
 echo '<td WIDTH="600">';
 echo $reg['nombre'].' '.$reg['apellido'];
 echo '</td>';
  echo '<td WIDTH="150">';
 echo $reg['servicio'];
 echo '</td>';
   echo '<td WIDTH="200">';
 echo $reg['fecha'];
 echo '</td>';
  echo '<td WIDTH="200">';
 echo $reg['hora'];
 echo '</td>';
  echo '<td WIDTH="200">';
 echo $reg['precio'];
 echo '</td>';
  echo '<td WIDTH="200">';
 echo $reg['estado'];
  echo '<td WIDTH="500">';
echo "<font color='#CC0000'><a href='cancelara.php?idreservas=$reg[idreservas] '>CANCELAR <img src='imagenes/ex.png' width='30' height='30'></a>";
echo '<td WIDTH="500">';
echo "<font color='#CC0000'><a href='realizara.php?idreservas=$reg[idreservas] '>REALIZADO <img src='imagenes/chulo.png' width='30' height='30'></a>";
 echo '</td></tbody>';
 


?>
<form action="reportes_empleado.php" method="post" target="_blank">
 <input type="hidden" class="in" style="text-align: center; width:225px; height:30px" name="emp" size="50" value="<?php echo $a5;?>"  > 
<?php
  }
 $mysql->close();
 ?>
  </table>
<br><br><br>
<button class="boton_2" style="width:250px" input type="submit" name="login">GENERAR REPORTE </button>
	</form>
 </center>
 

</body>
</html>
 
 
