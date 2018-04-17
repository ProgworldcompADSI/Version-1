<!DOCTYPE html>

<html><head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Equipe Etoile</title>
		
<style>#free-flash-header a,#free-flash-header a:hover {color:#363636;}#free-flash-header a:hover {text-decoration:none}</style>
<link rel="stylesheet" type="text/css" href="bootstrap/css/cuatro.css" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/selects.css" />
<script type="text/javascript" src="bootstrap/js/mostrar.js"></script>
	
	
	


<link rel="shortcut icon" type="image/ico" href="imagenes/icono.png"  />
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="bootstrap/css/style.css" rel="stylesheet" type="text/css" media="all">
	 
	

			
</head>
<body>

	<div class="page-container">
    		
		<header>
			<div class="container dark-bg no_left no_right">
            <div class="col-md-4 col-xs-12 no_left">
						
							<img src="imagenes/LOGO-FINAL2.png" width="250" height="150">
					
					</div>
				<div class="row">

		
					<?php include_once'../modelo/header.php';?>

				</div>
			</div>
		</header>

<br><br>
<center><font color="#ffbf00" size="+6" face="Trebuchet MS, Arial, Helvetica, sans-serif">SERVICIOS</font><br><br><br>

<table>
<tr>
<td width="100px"><img src="imagenes/BIENVENIDO.png" width="450" height="250"></center><br></td>

<td width="100px">
<div align="center">
	<table border="0" width="500" cellspacing="0" cellpadding="0">
	<tr>
	<td><form action="index.php" method="post">
	<p><font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFF" size="+2"><center>Por favor selecciona el servicio que deseas:</center><br><br>
    </font><font color="#ffbf00" size="3">
	&nbsp;<center><select id="status" name="status" onChange="mostrar(this.value);" size="1" class="sel">
        <option value="Inicio">SELECCIONAR SERVICIO</option>
        <option value="Hombre">CORTE HOMBRE</option>
        <option value="Mujer">CORTE MUJER</option>
        <option value="Cepillado">CEPILLADO</option>
        <option value="Manicure">MANICURE</option>
        <option value="Pedicure">PEDICURE</option>
        <option value="Tintura">TINTURA</option>
		</select></font></center> </p>
</form>





<div id="Hombre" class="element" style="display: none;"><br>
	<h2><font face="Trebuchet MS, Arial, Helvetica, sans-serif" size="+3" color="#ffbf00"><center>PRIMERO DEBES INGRESAR O REGISTRATE</center></font></h2><br><br> 
  
    <center>
	<form method="post" action="loginF.php">   
    <button class="btn btn-lg btn-primary btn-block btn-sm" style="width:200px"<input type="submit" name="login">INGRESAR </button>
  	<br>
	</form>
	<form method="post" action="registro.php">
	<button class="btn btn-lg btn-primary btn-block btn-sm" style="width:200px"<input type="submit" name="login">REGISTRARSE </button></form>
	</center><br><br><br>  
    
</div>

<div id="Mujer" class="element" style="display: none;"><br>
	<h2><font face="Trebuchet MS, Arial, Helvetica, sans-serif" size="+3" color="#ffbf00"><center>PRIMERO DEBES INGRESAR O REGISTRATE</center></font></h2><br><br> 
 
<center>
	<form method="post" action="loginF.php">   
    <button class="btn btn-lg btn-primary btn-block btn-sm" style="width:200px"<input type="submit" name="login">INGRESAR </button>
  	<br>
	</form>
	<form method="post" action="registro.php">
	<button class="btn btn-lg btn-primary btn-block btn-sm" style="width:200px"<input type="submit" name="login">REGISTRARSE </button></form>
	</center><br><br><br>
	
</div>

<div id="Cepillado" class="element" style="display: none;"><br>
	<h2><font face="Trebuchet MS, Arial, Helvetica, sans-serif" size="+3" color="#ffbf00"><center>PRIMERO DEBES INGRESAR O REGISTRATE</center></font></h2><br><br> 
    
    <center>
	<form method="post" action="loginF.php">   
    <button class="btn btn-lg btn-primary btn-block btn-sm" style="width:200px"<input type="submit" name="login">INGRESAR </button>
  	<br>
	</form>
	<form method="post" action="registro.php">
	<button class="btn btn-lg btn-primary btn-block btn-sm" style="width:200px"<input type="submit" name="login">REGISTRARSE </button></form>
	</center><br><br><br> 
    
</form>

</div>


<div id="Manicure" class="element" style="display: none;"><br>
	<h2><font face="Trebuchet MS, Arial, Helvetica, sans-serif" size="+3" color="#ffbf00"><center>PRIMERO DEBES INGRESAR O REGISTRATE</center></font></h2><br><br> 
    
    <center>
	<form method="post" action="loginF.php">   
    <button class="btn btn-lg btn-primary btn-block btn-sm" style="width:200px"<input type="submit" name="login">INGRESAR </button>
  	<br>
	</form>
	<form method="post" action="registro.php">
	<button class="btn btn-lg btn-primary btn-block btn-sm" style="width:200px"<input type="submit" name="login">REGISTRARSE </button></form>
	</center><br><br><br> 
    
</form>

</div>

<div id="Pedicure" class="element" style="display: none;"><br>
	<h2><font face="Trebuchet MS, Arial, Helvetica, sans-serif" size="+3" color="#ffbf00"><center>PRIMERO DEBES INGRESAR O REGISTRATE</center></font></h2><br><br> 
    
    <center>
	<form method="post" action="loginF.php">   
    <button class="btn btn-lg btn-primary btn-block btn-sm" style="width:200px"<input type="submit" name="login">INGRESAR </button>
  	<br>
	</form>
	<form method="post" action="registro.php">
	<button class="btn btn-lg btn-primary btn-block btn-sm" style="width:200px"<input type="submit" name="login">REGISTRARSE </button></form>
	</center><br><br><br>
    
</form>

</div>




<div id="Tintura" class="element" style="display: none;"><br>
	<h2><font face="Trebuchet MS, Arial, Helvetica, sans-serif" size="+3" color="#ffbf00"><center>PRIMERO DEBES INGRESAR O REGISTRATE</center></font></h2><br><br> 
	
	<center>
	<form method="post" action="loginF.php">   
    <button class="btn btn-lg btn-primary btn-block btn-sm" style="width:200px"<input type="submit" name="login">INGRESAR </button>
  	<br>
	</form>
	<form method="post" action="registro.php">
	<button class="btn btn-lg btn-primary btn-block btn-sm" style="width:200px"<input type="submit" name="login">REGISTRARSE </button></form>
	</center><br><br><br>
	
</td>
		</tr>
	</table>
</div>

	</td>
</tr>
</table><br><br><br><br><br><br>
  </body>
</html>