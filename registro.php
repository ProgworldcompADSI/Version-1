<!DOCTYPE html>

<html><head>
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
<center><font color="#ffbf00" size="+3" face="Trebuchet MS, Arial, Helvetica, sans-serif">REGISTRARSE</font></center><br><br>
<div class="row">
				<div class="col-md-12 col-xs-12">
					
				</div>
               <center> <font face="Trebuchet MS, Arial, Helvetica, sans-serif" color="#FFF"><p><h4>Complete todos los campos requeridos para su registro en nuestra base de datos.</p></center><br><br></h4></font>
              
			</div>
		<div><div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                  <center>
                    <div class="container">
        <div class="card card-container">
                      
<form class="form-signin" method="post"action="registro2.php">
      <span id="reauth-email" class="reauth-email"></span>

<input type="text"  class="in" name="nombre" placeholder="nombre" required autofocus style="width:350px; height:40px" > 
 <br> <br>
<input type="text"  class="in" name="apellido" placeholder="apellido" required autofocus style="width:350px; height:40px"> 
 <br>     <br> 
       
 <input type="number"  class="in" name="documento" placeholder="documento" required autofocus style="width:350px; height:40px"> 
 <br>  <br>
 

<input type="number"  class="in" name="celular" placeholder="celular" required autofocus style="width:350px; height:40px">
<br>  <br>
<input type="password"  class="in" name="contrasena" placeholder="contrasena" required autofocus style="width:350px; height:40px"> 
<br>      <br>          
  <button class="boton_1" style="width:150px"<input value="CALCULAR" type="submit"name="registro">REGISTRARSE </button>
            </form>
            <br>
            
            
        </div>
    </div> 
  </center>
</div>
					</div>



		</footer>
	
	</div>
  </body>
</html>