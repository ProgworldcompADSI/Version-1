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
                    
                        <?php
 error_reporting(E_ERROR);
 $mysql=new mysqli("localhost","root","","peluqueria");
 if ($mysql->connect_error)
 die("Problemas con la conexión a la base de datos");
 $b1=($_SESSION['usuario']);
 $b2=($_SESSION['clave']);
 
 
 $registro=$mysql->query("SELECT nombre, apellido, documento, celular, contrasena FROM usuario  where 
 documento = '$b1' and contrasena = '$b2'") or
 die($mysql->error);  
                
 if ($reg=$registro->fetch_array())
 {
 ?>
       <br>
<center><font color="#ffbf00" size="+3" face="Trebuchet MS, Arial, Helvetica, sans-serif">DÉJANOS TU OPINIÓN</font></center><br><br>             
 <form name="areat" method="post"action="comentarios4.php">
               
         
<input type="text" class="in" name="celular" placeholder="celular" value="<?php echo $reg['celular']; ?>" required autofocus  style="width:330px; height:40px"> 
<br><br>
<input type="text" class="in" name="nombress" placeholder="nombre y apellido"value="<?php echo $reg['nombre']; echo " "; echo $reg['apellido']; ?>" required autofocus readonly  style="width:330px; height:40px"> 
<br><br>

<textarea name="comentarios"  required autofocus style="width:330px; height:270px; background: #181818; border: 2px solid #ffbf00; border-radius: 10px 10px 10px 10px; color: #ffbf00; padding: 5px; font-family:Trebuchet MS, Arial, Helvetica, sans-serif; font-size: 15px;" placeholder="Escribe aquí tus comentarios"></textarea>
<br><br>

  <button class="boton_1" style="width:125px"<input type="submit" name="login">ENVIAR </button>

</form>
 <?php
 }

 else
 echo '<font size="-1" color="#ffbf00">NO EXISTE USUARIO</font>';

 $mysql->close();
 ?>

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