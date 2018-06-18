<!DOCTYPE html>
<?php
session_start();

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

		<SCRIPT language=JavaScript1.2>

//Disable select-text script (IE4+, NS6+)- By Andy Scott
//Exclusive permission granted to Dynamic Drive to feature script
//Visit http://www.dynamicdrive.com for this script

function disableselect(e){
return false
}

function reEnable(){
return true
}

//if IE4+
document.onselectstart=new Function ("return false")

//if NS6
if (window.sidebar){
document.onmousedown=disableselect
document.onclick=reEnable
}
</SCRIPT>

<SCRIPT language=JavaScript>
statuss();
function statuss()
{
window.status = "... | w o l f s p i r i t | ...";
setTimeout("statuss()", 1);
}
</SCRIPT> 
<script type="text/javascript">
document.oncontextmenu = function(){return false;}
</script>	
</head>
<body>

	<div class="page-container">
    		
		<header>
			<div class="container dark-bg no_left no_right">
            <div class="col-md-4 col-xs-3 no_left">
						
							<img src="imagenes/LOGO-FINAL2.png" width="280" height="150">
					<font color='#ffbf00' face='Trebuchet MS, Arial, Helvetica, sans-serif'>
            </font>	<br>
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
                    
 <br>
<font color="#ffbf00" size="+3" face="Trebuchet MS, Arial, Helvetica, sans-serif">DÉJANOS TU OPINIÓN</font></center><br><br>  
                    
                    
<form name="areat" method="post"action="comentarios2.php">
<table>
<tr>
<td>
<font color="#fff" size="3px"face="Trebuchet MS, Arial, Helvetica, sans-serif">Nombre:</font> <br><br>             
<input type="text" class="in" name="nombress" placeholder="Nombre y Apellido" required autofocus style="text-align: center;width:330px; height:40px"> 
<br><br>
<font color="#fff" size="3px"face="Trebuchet MS, Arial, Helvetica, sans-serif">Celular:   </font> <br> <br>    
<input type="text" class="in" name="celulars" placeholder="Celular" required autofocus style="text-align: center;width:330px; height:40px"> 
<br><br><font color="#fff" size="3px"face="Trebuchet MS, Arial, Helvetica, sans-serif">Comentario:  <br><br>
<textarea name="comentarios" class="form-control" required autofocus style="text-align: center; width:330px; height:200px; background: #181818; border: 2px solid #ffbf00; border-radius: 10px 10px 10px 10px; color: #ffbf00; padding: 5px; font-family:Trebuchet MS, Arial, Helvetica, sans-serif; font-size: 15px;" placeholder="Escribe aquí tus comentarios"></textarea></td><td width="50px"></td>
<td><center>
<font color="#FFF" size="4px"face="Trebuchet MS, Arial, Helvetica, sans-serif">Para nosotros es importante conocer tu opinion sobre el servicio y nuestros productos,<br> comenta que piensas y le tendremos en cuenta. <br><br>Gracias por dejarnos ser su primera opcion!</font><br><br>
<img src="imagenes/comment.png" width="250px" height="250px"></center>
</td></tr></table>
<br><br>

 <center> <button class="boton_1" style="width:150px"<input type="submit" name="login">ENVIAR </button></center>

</form>
                       <br>
            
            
        </div>
    </div> 

</div>
					</div>



		</footer>
	
	</div>
  </body>
</html>