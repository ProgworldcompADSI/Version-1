<!DOCTYPE html>
<?php
error_reporting(E_ERROR);
session_start();
$_SESSION['usuarioa']=$_REQUEST['documentosa'];
$_SESSION['clavea']=$_REQUEST['contrasenasa'];
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

	
		
</head>
<body>

                  <center>
                    <div class="container">
        <div class="card card-container">
            

<?php 

 include ("../controlador/administradorC.php");

$admin = new Administrador();
			
$admin->Validar();

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
