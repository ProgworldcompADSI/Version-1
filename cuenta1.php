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
        <link rel="stylesheet" type="text/css" href="bootstrap/css/tablasC.css" />
        <link rel="stylesheet" type="text/css" href="bootstrap/css/botones.css" />
	

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
 
 
