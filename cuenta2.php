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
	  <link rel="stylesheet" type="text/css" href="bootstrap/css/selects.css" />
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
                    
        <?php include_once'../modelo/Musuario.php';?><br><br>
                   
  <center><font color="#ffbf00" size="+1" face="Trebuchet MS, Arial, Helvetica, sans-serif">SELECCIONA LOS CAMPOS QUE DESEAS MODIFICAR</font></center><br><br> 
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
 <form method="post" action="cuenta3.php">
NOMBRE:<br>
 <input type="text" class="in"style="width:300px; height:30px" name="nombree" size="50" required autofocus
 value="<?php echo $reg['nombre']; ?>">
 <br><br>
APELLIDO:<br>
 <input type="text" class="in"style="width:300px; height:30px" name="apellidoo" size="50" required autofocus
 value="<?php echo $reg['apellido']; ?>">
 <br><br>
DOCUMENTO:<br>
 <input type="text" class="in"style="width:300px; height:30px" name="documentoo" size="50" required autofocus
 value="<?php echo $reg['documento']; ?>">
 <br><br>
 CELULAR:<br>
  <input type="text" class="in"style="width:300px; height:30px" name="celularr" size="50" 
 value="<?php echo $reg['celular']; ?>">
 <br><br>

 <br><br>
  <button class="boton_1" style="width:200px"<input type="submit" name="login">MODIFICAR </button>
 </form>
<br>

 <?php
 }

 $mysql->close();
 ?>
  <br><br>
 </center>
 

</body>
</html>
 