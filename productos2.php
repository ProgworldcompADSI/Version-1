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
<style>
.serP a {

		background-color: #fc9c65;
		padding: 5px;
		border-top-width: 14px;
		border-top-style: ridge;
		border-top-color: #804000;
		border-right-color: #804000;
		border-bottom-color: #804000;
		border-left-color: #804000;
		border-right-width: 14px;
		border-bottom-width: 14px;
		border-left-width: 14px;
		border-right-style: groove;
		border-bottom-style: ridge;
		border-left-style: groove;
	}
	.serP a:hover {
		
		background-color: #fc9c65;
		background-position: left top;
		padding: 8px;
		border-top-width: 14px;
		border-top-style: groove;
		border-top-color: #804000;
		border-right-color: #804000;
		border-bottom-color: #804000;
		b		border-left-color: #804000;
order-right-width: 14px;
		border-bottom-width: 14px;
		border-left-width: 14px;
		border-right-style: ridge;
		border-bottom-style: groove;
		border-left-style: ridge;
	}

</style>


		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="bootstrap/css/style.css" rel="stylesheet" type="text/css" media="all">
        <link rel="shortcut icon" type="image/ico" href="imagenes/icono.png"  />
	 
	

			
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

<br><br>
<center> <font color="#ffbf00" size="+6" face="Trebuchet MS, Arial, Helvetica, sans-serif">PRODUCTOS</font></center><br><br>


		<div class="container">
        <div class="row">
            <div class="box">
             
                <div class="col-sm-12">
                <center>
                  <table><tr><td>
            <div class="serP"><a href="#"><img src="imagenes/LACA2.png" width="250" height="250" ><td width="20"></td></a></div>   </td></td>
            
            <td><div class="serP"><a href="#"><img src="imagenes/JOYERIA.png" width="250" height="250"></a></div>   </td></tr></table><br>
        
            <table> <tr><td rowspan="2"><div class="serP"><a href="#"><img src="imagenes/EXTENCION1.png" width="250" height="250"><td width="20"></td></a></div></td>
            <td rowspan="2"><div class="serP"><a href="#"><img src="imagenes/GEL1.png" width="250" height="250"></a></div></td></tr></table><br>

            </center>
        
    </div> 

</div>
					</div>



		</footer>
	
	</div>
  </body>
</html>