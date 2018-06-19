<!DOCTYPE html>

<html>
<?php
session_start();
if ($_SESSION['estado']!="1")
{
	header("Location: logout.php");
}
	?>

<head>
				<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Equipe Etoile</title>
		
<style>#free-flash-header a,#free-flash-header a:hover {color:#363636;}#free-flash-header a:hover {text-decoration:none}</style>
<link rel="shortcut icon" type="image/ico" href="imagenes/icono.png"  />
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="bootstrap/css/style.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
	.cuatro img {
  padding: 20px;
    border-radius: 50px 50px 50px 50px / 50px 50px 50px 50px;
	text-align: center;
	
    }
	
	.cuatro img:hover {
  padding: 10px;
	border-radius: 50px 50px 50px 50px / 50px 50px 50px 50px;
	text-align: center;
	
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

		
					<?php include_once'../modelo/header3.php';?>

				</div>
			</div>
		</header>
<br><br>
<div class="container">
        <div class="row">
            <div class="box">
             
                <div class="col-sm-12">
<center><font color="#ffbf00" size="+3" face="Trebuchet MS, Arial, Helvetica, sans-serif">REGISTRAR</font></center><br><br><br><br>


		
                <center>
            <div class="cuatro">
            <table><tr height=""><td>
            <a href="registrarF3.php"><br>
            <center>
            <font color="#ffbf00" size="+2" face="Trebuchet MS, Arial, Helvetica, sans-serif"><B>ADMINISTRADOR</B></font><br><br>
            </center>
            <img src="imagenes/admin.png" width="250" height="250" ></a><br><br><br>
            <td width="200"></td></td></td>
            
            <td>
            <a href="registrarF1.php"><br>
            <center>
            <font color="#ffbf00" size="+2" face="Trebuchet MS, Arial, Helvetica, sans-serif"><B>EMPLEADO</B></font><br><br>
            </center>
            <img src="imagenes/user2.png" width="250" height="250"></a><br><br><br>
            </td></tr></table><br></div>

            </center>
        
    </div> 

</div>
					</div>



		</footer>
	
	</div>
  </body>
</html>