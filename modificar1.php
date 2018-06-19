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
                <link rel="stylesheet" type="text/css" href="bootstrap/css/selects.css" />
	

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
            <div class="box">
                <div class="col-lg-12">
                  <center>
                    <div class="container">
        <div class="card card-container">
            <?php include_once'../modelo/Musuario.php';?><br><br>
                      
 <?php
 $mysql=new mysqli("localhost","root","","peluqueria"); 
if ($mysql->connect_error)
 die("Problemas con la conexión a la base de datos");
$d10=($_SESSION['usuario']);
$d11=$_POST['antigua'];
 $registro=$mysql->query("SELECT contrasena FROM usuario where 
 documento = '$d10' and contrasena = sha1(('$d11'))") or
 die($mysql->error);
 

 if ($reg=$registro->fetch_array())
 {
 ?>
 <form method="post" action="modificar2.php">
<span style="color:#39ff14; font-size:20px;">INGRESE SU NUEVA CONTRASEÑA:</span>
<br><br>
<input type="password" class="in"style="width:300px; height:30px" name="nueva" size="50" required autofocus
>
<br><br>
<button class="boton_1" style="width:200px"<input type="submit" name="login">MODIFICAR </button>
 </form>
 <?php
 }
 else{
 echo '<span style="color:red; font-size:30px;"><B>Contraseña incorrecta.</B></span><p><br><br>';?>
 <img src="imagenes/ex.png" width="150" height="150">
<form method="post" action="modificar.php">
<br>
<button class="boton_1" style="width:200px"<input type="submit" name="login">VUELVE A INTENTARLO </button> </form>
<?php
 }
 $mysql->close();
 ?>

  <br><br>
 </center>
 

</body>
</html>
 