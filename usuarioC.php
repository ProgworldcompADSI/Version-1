<?php 

class Usuario{
	protected $docu;
	private $contra;
	
	function Usuario(){
		
		$this->docu = $_POST['documentos'];
		$this->contra = $_POST['contrasenas'];
		
		}
		
		function get_Dato(){
			return $this->docu;
			
			}	
	function get_Con(){
		
		return $this->contra;
	}
		
	function Ingresar(){
		 error_reporting(E_ERROR);
 $mysql=new mysqli("localhost","root","","peluqueria");
 if ($mysql->connect_error)
 die("Problemas con la conexión a la base de datos");

$username = $_POST['documentos'];
$password = $_POST['contrasenas'];

 $registro=$mysql->query("SELECT nombre, apellido, documento, celular, contrasena FROM usuario  where
documento='$username' and contrasena='$password'") or
 die($mysql->error);
 if ($reg=mysqli_fetch_array($registro))
 {
 $_SESSION['usuario']=$reg['documento'];
  $_SESSION['clave']=$reg['contrasena'];
   $_SESSION['estado']=1;
 
 echo '<header><div class="container dark-bg no_left no_right"><div class="col-md-4 col-xs-12 no_left"><img src="imagenes/LOGO-FINAL2.png" width="280" height="150"></div><div class="row">';
		include_once'../modelo/header2.php';
		echo'</div></div></header><br>';;
$a= $reg['nombre'];$a = strtoupper($a);
   
echo "<font size='+3' color='#ffbf00'>Bienvenido(a) ".$a."</font><br><br>";
 
 echo "<span style='color:#FFf; font-size:30px;'><B> INGRESASTE CON EXITO.</B></span><p><br>";
 
 
 echo '<img src="imagenes/chulo.png".png" width="220" height="220"> ';
 echo "<br><br>";
  echo '<span style="color:#FFF; font-size:20px;"><B>   Puedes seguir navegando en la pagina en las opciones del menú superior.  </B></span><p>';
  echo '<span style="color:#ffbf00; font-size:15px;">Recomendacion: para poder reservar elige la opcion de servicios.</span><p>';}
  
  else
 {
	echo '<header><div class="container dark-bg no_left no_right"><div class="col-md-4 col-xs-12 no_left"><img src="imagenes/LOGO-FINAL2.png" width="280" height="150"></div><div class="row">';
	 
	echo'</div></div></header><br>';
	 
	echo '<span style="color:#FF9900; font-size:18px;">No existe usuario o los datos son erroneos.</span><br><br>';
	 
	echo"<h4>Los datos que usted ingreso son: <br><br>";
	 
	echo 'Documento:<br><br>' . $this->get_Dato().'<br><br>';
	 
	echo 'Contraseña:<br><div id="contrasena">' . $this->get_Con(). '</div><br></h4>';
	 
	 echo "<script>document.getElementById('contrasena').innerHTML = '<h3>********</h3>';</script>";
	 
    echo '<img src="imagenes/ex.png" width="220" height="220">';
  
	echo "<br><br>";
  
	echo' <form method="post" action="login.php">';
  
	echo '<button class="btn btn-lg btn-primary btn-block btn-sm" style="width:200px"<input type="submit" name="login">VOLVER A INGRESAR </button>';
echo "<br>";
echo '</form>';
  echo' <form method="post" action="registro.php">';
  echo '<button class="btn btn-lg btn-primary btn-block btn-sm" style="width:200px"<input type="submit" name="login">REGISTRESE </button>';

echo '</form>';
 }
  $mysql->close();
    
	}
		
	}


?>
