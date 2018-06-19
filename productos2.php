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
			 <link rel="stylesheet" type="text/css" href="bootstrap/css/botones.css" />

<style>#free-flash-header a,#free-flash-header a:hover {color:#363636;}#free-flash-header a:hover {text-decoration:none}</style>

	
<link rel="stylesheet" type="text/css" href="bootstrap/css/cuatro.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/selects.css" />
	
	


<link rel="shortcut icon" type="image/ico" href="imagenes/icono.png"  />
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="bootstrap/css/style.css" rel="stylesheet" type="text/css" media="all">
	 
	

			
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

<br><br>
<div class="container">
        <div class="row">
            <div class="box">
             
                <div class="col-sm-12">
<center><font color="#ffbf00" size="+6" face="Trebuchet MS, Arial, Helvetica, sans-serif">PRODUCTOS</font><br><br><br>
	</div>
<table>
<tr>
<td width="100px"><img src="imagenes/BIENVENIDO.png" width="450" height="250"></center><br></td>

<td width="100px">
<div align="center">
	<table border="0" width="500" cellspacing="0" cellpadding="0">
	<tr>
	<td><form action="productos3.php" method="get">
	<p><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFF" size="+2"><center>Por favor selecciona el producto que deseas adquirir:</center><br><br>
    </font><font color="#ffbf00" size="3">
    <?php
		 error_reporting(E_ERROR);
 $mysql=new mysqli("localhost","root","","peluqueria");
 if ($mysql->connect_error)
 die("Problemas con la conexión a la base de datos");
  $registro=$mysql->query("SELECT * FROM productos WHERE existencias>0") or
 die($mysql->error);
	 ?>
	&nbsp;<center><select id="status" name="status" onChange="location.href=this.value" size="1" class="sel">
       <option value="#">SELECCIONAR PRODUCTO</option>
       <?php
while($reg=$registro->fetch_array())
 {?>
       
        <option value="productos3.php?status=<?php echo $reg['descripcion'];?>"><?php echo $reg['descripcion'];?></option>
       <?php 
  }
	  $mysql->close();
	 ?>
		</select>
	   
   
	
		<br><br><br>
		
		</font></center> </p>
		
</form>


  
</div>
</tr>
</table><br><br><br><br><br><br>
  </body>
</html>