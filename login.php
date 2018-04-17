<!DOCTYPE html>
<?php
session_start();
$_SESSION['estado']=0;
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
		<link rel="stylesheet" type="text/css" href="bootstrap/css/selects.css" />
	    <link rel="stylesheet" type="text/css" href="bootstrap/css/botones.css" />
	

		

			
</head>
<body>

	<div class="page-container">
    		
		<header>
			<div class="container dark-bg no_left no_right">
            <div class="col-md-4 col-xs-12 no_left">
						
							<img src="imagenes/LOGO-FINAL2.png" width="280" height="150">
					
					</div>
				<div class="row">

		
					<?php include_once'../modelo/header.php';?>

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
        <div class="card card-container">
            
            <img id="profile-img" class="profile-img-card" src="imagenes/login.png" width="200" height="200" />
            <p id="profile-name" class="profile-name-card"></p>
            <br><br>
            
 <form name="areat" method="post"action="login2.php">

         
<input type="number" class="in" name="documentos" placeholder="documento" required autofocus style="width:350px; height:40px"> 
<br><br>
<input type="password" class="in" name="contrasenas" placeholder="contraseña" required autofocus style="width:350px; height:40px"> 
<br><br>

  <button class="boton_1" style="width:125px"<input type="submit" name="login">INGRESAR </button>

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