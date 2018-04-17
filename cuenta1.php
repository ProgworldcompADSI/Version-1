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
        <link rel="stylesheet" type="text/css" href="bootstrap/css/botones.css" />
<style type="text/css">
	
	.tablas table { border-collapse: collapse; text-align: left; width: 100%; } .tablas {font: normal 12px/150% Geneva, Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 6px solid #000000; -webkit-border-radius: 20px; -moz-border-radius: 20px; border-radius: 20px; }.tablas table td, .tablas table th { padding: 13px 20px; }.tablas table thead th {background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #FFBF00), color-stop(1, #333333) );background:-moz-linear-gradient( center top, #FFBF00 5%, #333333 100% );filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#FFBF00', endColorstr='#333333');background-color:#FFBF00; color:#000000; font-size: 20px; font-weight: bold; border-left: 1px solid #000000; } .tablas table thead th:first-child { border: none; }.tablas table tbody td { color: #333333; border-left: 1px solid #000000;font-size: 17px;border-bottom: 1px solid #000000;font-weight: bold; }.tablas table tbody .alt td { background: #666666; color: #FFFFFF; }.tablas table tbody td:first-child { border-left: none; }.tablas table tbody tr:last-child td { border-bottom: none; }.tablas table tfoot td div { border-top: 1px solid #000000;background: #999999;} .tablas table tfoot td { padding: 0; font-size: 10px } .tablas table tfoot td div{ padding: 0px; }
	
	
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
 
 <?php include_once'../modelo/Musuario.php';?>
 
 
<br><br>
     <?php
 error_reporting(E_ERROR);
 $mysql=new mysqli("localhost","root","","peluqueria");
 if ($mysql->connect_error)
 die("Problemas con la conexión a la base de datos");
 $d1=($_SESSION['usuario']);
 $a2=($_SESSION['clave']);
 
 
 $registro=$mysql->query("SELECT nombre, apellido, documento, celular, contrasena FROM usuario  where 
 documento = '$d1' and contrasena = '$a2'") or
 die($mysql->error);  
                
 if ($reg=$registro->fetch_array())
 {
 ?>
 <center><font color="#ffbf00" size="+3" face="Trebuchet MS, Arial, Helvetica, sans-serif">SUS DATOS SON:</font></center><br><br>

 <div class="tablas"><table>
  <thead>
                   <tr>
                   <th>NOMBRE</th>
                       <th>APELLIDO</th>
                       <th>DOCUMENTO</th>
                       <th>CELULAR</th>
                   </tr>
               </thead>
               <tbody><tr class="alt">
  
  <td><?php echo $reg['nombre']; ?></td>

  <td><?php echo $reg['apellido']; ?></td>

  <td><?php echo $reg['documento']; ?></td>

  <td><?php echo $reg['celular']; ?></td>

</tr>
     </tbody>
           </table></div>
 <br><br><br>

<form name="areat" method="post"action="cuenta2.php">

  <button class="boton_1" style="width:250px"<input type="submit" name="login">MODIFICAR DATOS BASICOS </button>

</form>
<br>

 <?php
 }

 else
 echo '<font size="-1" color="#ffbf00">NO EXISTE USUARIO</font>';

 $mysql->close();
 ?>


</div>
 


  <br><br>
 </center>
 

</body>
</html>
 
 

