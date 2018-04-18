<!DOCTYPE html>
<?php
session_start();
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
	
<style type="text/css">

* {
 padding:0px;
 margin:0px;
 font-family: Trebuchet MS, Arial, Helvetica, sans-serif;

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
 <table>
 <th width="163">

<div id="">
 <ul class="nav">
     
        <li><a href="reservadoa.php"><center>OPCIONES DE RESERVA</center></a>
         <ul>
          <li><a href="reservadoa1.php">RESERVAS DEL DIA DE HOY</a></li>
             <li><a href="reservadoa2.php">CONSULTA RESERVA POR CEDULA</a></li>
               <li><a href="reservadoa4.php"><font size="1px">CONSULTAR RESERVA POR EMPLEADO</font></a> 
               <ul><a href="reservadoa5.php"><font size="1px">RESERVAS POR EMPLEADO DE HOY</a></font></ul></li>
             <li><a href="reservadoa3.php">HISTORIAL DE RESERVAS</a> </li>

            </ul>
        </li>
        
 </ul>
</div>
</th>
</table>
<br><br>
                    

  <center><font color="#FF3300" size="+3" face="Trebuchet MS, Arial, Helvetica, sans-serif">RESERVAS:</font></center><br><br>



 <form name="areat" method="post"action="reservadoa4.php">

 EMPLEADO A CONSULTAR:     
<input type="text" class="form-control" name="empleadoa" placeholder="Empleado" required autofocus style="width:350px; height:40px"> 
<br>

  <button class="btn btn-lg btn-primary btn-block btn-sm" style="width:200px"<input type="submit" name="login">INGRESAR </button>
<br><br>
</form>
 
 <?php
 
 error_reporting(E_ERROR);
 $mysql=new mysqli("localhost","root","","peluqueria");
 if ($mysql->connect_error)
 die("Problemas con la conexiأ╠n a la base de datos");
 $d1=($_SESSION['usuario']);
 $a2=($_SESSION['clave']);
  $a4=($_POST['empleadoa']);
 
 $registro=$mysql->query("SELECT usuario.nombre,usuario.apellido,usuario.documento,idreservas, fecha, hora, servicio,precio,usuario, empleado,estado FROM reservas INNER JOIN usuario ON reservas.usuario=usuario.documento where reservas.estado='activo' AND empleado like '%$a4%' ") or
 die($mysql->error);

   echo '<table class="tabla1">';
   //
 echo '<tr ><thead><th><center> EMPLEADO  </th><th>   CLIENTE </th><th><center>  SERVICIO  </th><th>  FECHA </th> <th>HORA </th><th>PRECIO </th><th>ESTADO </th></tr></thead>';

 while ($reg=$registro->fetch_array())
 {
 echo '<tr><tbody>';
 echo '<td WIDTH="800" 
	    HEIGHT="35">';
 echo $reg['empleado'];
 echo '</td>';
 
 echo '<td WIDTH="800">';
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

 echo '</td></tbody>';
 

 }

 $mysql->close();
 ?>

 </center>
 

</body>
</html>
 
 
