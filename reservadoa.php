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
        <link rel="stylesheet" href="bootstrap/css/style2.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="bootstrap/css/botones.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="bootstrap/css/tablasC.css" type="text/css" media="screen"/>
    <style>
 label.C{
		
		background-color: #000000;
		border-top: transparent;
	    border-bottom:4px solid #ffbf00;
		border-bottom-right-radius: 15px;
	    border-bottom-left-radius: 15px;
		padding: 8px, 8px;
		cursor: pointer;
		
		}


</style>    
	
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
            <div class="col-md-4 col-xs-3 no_left">
						
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
 <?php include_once'../modelo/Musuario.php';?>
<br>
           
 <a href="reservado1.php"><button class="boton_1">VER RESERVAS</button></a>    <br> <br> 

  <center><font color="#FFF" size="+3" face="Trebuchet MS, Arial, Helvetica, sans-serif">CANCELAR RESERVAS:</font></center><br><br>


<?php
 error_reporting(E_ERROR);
 $mysql=new mysqli("localhost","root","","peluqueria");
 if ($mysql->connect_error)
 die("Problemas con la conexión a la base de datos");
 $d1=($_SESSION['usuario']);
 $a2=($_SESSION['clave']);
 
 
 $registro=$mysql->query("SELECT idreservas, fecha, hora, servicio,precio, empleado,estado FROM reservas  WHERE 
 usuario = '$d1' and estado='activo' order by fecha desc") or
 die($mysql->error);

    echo "<center><table><tr><td width='75px'>";
    echo '<div class="tablas"><table>';
 echo '<thead><tr><th>FECHA</th><th>HORA</th><th>SERVICIO</th><th>PRECIO</th><th>EMPLEADO</th><th>ESTADO</th><th>CANCELAR</th></tr></thead>';
 
 while ($reg=$registro->fetch_array())
 {
 echo "<tbody><tr class='alt'><td>".$reg['fecha'] ."</td><td>".$reg['hora']."</td><td>".$reg['servicio']."</td><td>".$reg['precio']."</td><td>".$reg['empleado']."</td><td>".$reg['estado']."</td><td><center><a href='cancelar.php?idreservas=$reg[idreservas]'><img src='imagenes/ex.png' width='30' height='30'></a></center></td></tr></tbody>";

 }
echo "</table></div></td></tr></table></center>";
 $mysql->close();
 ?>
 <br><br>
 </center>
 

</body>
</html>
 
 
