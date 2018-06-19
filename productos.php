<!DOCTYPE html>

<html><head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Equipe Etoile</title>
		
<style>#free-flash-header a,#free-flash-header a:hover {color:#363636;}#free-flash-header a:hover {text-decoration:none}</style>

	
<script type="text/javascript">

function mostrar(id) {
if (id == "Laca") {
document.getElementById("Laca").style.display = 'block';
document.getElementById("Gel").style.display = 'none';
document.getElementById("Extencion").style.display = 'none';
document.getElementById("Joyeria").style.display = 'none';

}

if (id == "Gel") {
document.getElementById("Laca").style.display = 'none';
document.getElementById("Gel").style.display = 'block';
document.getElementById("Extencion").style.display = 'none';
document.getElementById("Joyeria").style.display = 'none';

}

if (id == "Extencion") {
document.getElementById("Laca").style.display = 'none';
document.getElementById("Gel").style.display = 'none';
document.getElementById("Extencion").style.display = 'block';
document.getElementById("Joyeria").style.display = 'none';

}

if (id == "Joyeria") {
document.getElementById("Laca").style.display = 'none';
document.getElementById("Gel").style.display = 'none';
document.getElementById("Extencion").style.display = 'none';
document.getElementById("Joyeria").style.display = 'block';

}

}
</script>
<link rel="stylesheet" type="text/css" href="bootstrap/css/cuatro.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/selects.css" />
 <link rel="stylesheet" type="text/css" href="bootstrap/css/botones.css" />
	
	


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

		
					<?php include_once'../modelo/header.php';?>

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
	<td><form action="index.php" method="post">
	<p><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFF" size="+2"><center>Por favor selecciona el producto que deseas adquirir:</center><br><br>
    </font><font color="#ffbf00" size="3">
	&nbsp;<center><select id="status" name="status" onChange="mostrar(this.value);" size="1" class="sel">
        <option value="Inicio">SELECCIONAR PRODUCTO</option>
        <option value="Laca">LACA</option>
        <option value="Gel">GEL</option>
        <option value="Extencion">EXTENCIONES</option>
        <option value="Joyeria">JOYERIA</option>
		</select></font></center> </p>
</form>





<div id="Laca" class="element" style="display: none;"><br><center>

<img src="imagenes/LACA2,1.png" width="250" height="250">

	<h2><font face="Trebuchet MS, Arial, Helvetica, sans-serif" size="+3" color="#ffbf00">PRIMERO DEBES INGRESAR O REGISTRATE</center></font></h2><br><br> 
  
    <center>
    <form method="post" action="login.php">   
    <button class="boton_1" style="width:200px"<input type="submit" name="login"> INGRESAR </button>
  	<br><br>
	</form>
	<form method="post" action="registro.php">
	<button class="boton_1" style="width:200px"<input type="submit" name="login">REGISTRARSE </button></form>
     </center><br><br><br>  
    
</div>

<div id="Gel" class="element" style="display: none;"><br><center>

<img src="imagenes/GEL1,1.png" width="250" height="250">

	<h2><font face="Trebuchet MS, Arial, Helvetica, sans-serif" size="+3" color="#ffbf00">PRIMERO DEBES INGRESAR O REGISTRATE</center></font></h2><br><br> 
 
	<center>
   <form method="post" action="login.php">   
    <button class="boton_1" style="width:200px"<input type="submit" name="login"> INGRESAR </button>
  	<br><br>
	</form>
	<form method="post" action="registro.php">
	<button class="boton_1" style="width:200px"<input type="submit" name="login">REGISTRARSE </button></form>
	</center><br><br><br>
	
</div>

<div id="Extencion" class="element" style="display: none;"><br><center>

<img src="imagenes/EXTENCION1,1.png" width="250" height="250">

	<h2><font face="Trebuchet MS, Arial, Helvetica, sans-serif" size="+3" color="#ffbf00">PRIMERO DEBES INGRESAR O REGISTRATE</center></font></h2><br><br> 
    
    <center>
    <form method="post" action="login.php">   
    <button class="boton_1" style="width:200px"<input type="submit" name="login"> INGRESAR </button>
  	<br><br>
	</form>
	<form method="post" action="registro.php">
	<button class="boton_1" style="width:200px"<input type="submit" name="login">REGISTRARSE </button></form> </center><br><br><br> 
    
</form>

</div>


<div id="Joyeria" class="element" style="display: none;"><br><center>

<img src="imagenes/JOYERIA,1.png" width="250" height="250">

	<h2><font face="Trebuchet MS, Arial, Helvetica, sans-serif" size="+3" color="#ffbf00">PRIMERO DEBES INGRESAR O REGISTRATE</center></font></h2><br><br> 
    
    <center>
    <form method="post" action="login.php">   
    <button class="boton_1" style="width:200px"<input type="submit" name="login"> INGRESAR </button>
  	<br><br>
	</form>
	<form method="post" action="registro.php">
	<button class="boton_1" style="width:200px"<input type="submit" name="login">REGISTRARSE </button></form> </center><br><br><br> 
    
</form>

</div>

	</tr>
	</table>


	</td>
</tr>
</table><br><br><br><br><br><br>
  </body>
</html>