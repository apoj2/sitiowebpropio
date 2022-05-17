<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

if(!empty($nombre) || !empty($email) || !empty($mensaje) ){
  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "contacto";

  $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
  if(mysqli_connect_error()){
    die('connect error('.mysqli_connect_errno().')' .mysqli_connect_error());
  }
else{
    $INSERT = "INSERT INTO id (nombre,email,mensaje)values(???)";
    

     $stmt = $conn->prepare($INSERT);
     $stmt ->bind_param("sss",$nombre,$email,$mensaje);
     $stmt ->execute();
     echo"registro completado.";
}
   $stmt->close();
   $conn->close();
}
else{
    echo "todos los datos son OBLIGATORIOS";
    die();
}
?>