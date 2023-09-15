<?php require_once('../conn/connect.php') ?>

<?php



$folio_salida=strtoupper($_POST["folio_salida"]);
$solicita=strtoupper($_POST["solicita"]);
$area= ' ';
if( isset($_POST['area'])){
  $area = implode( ',', $_POST['area']);
}
$dirigido=strtoupper($_POST["dirigido"]);
$otorga=strtoupper($_POST["otorga"]);
$responde=strtoupper($_POST["responde"]);
$firma=strtoupper($_POST["firma"]);
$asunto=strtoupper($_POST["asunto"]);
$estatus=strtoupper($_POST["estatus"]);


  $insertar = "INSERT INTO salida (folio_salida, solicita, area,  dirigido, otorga, responde, firma, asunto, estatus)
  VALUES ('$folio_salida', '$solicita', '$area',  '$dirigido', '$otorga', '$responde', '$firma', '$asunto', '$estatus');";


echo "<br>".$insertar."<br>";
#echo $solicita;

$resultado = mysqli_query($connect, $insertar);
if (!$resultado) {
  echo "Error al registrar su solicitud";
} else {
  echo "Solicitud registrada exitosamente";
}
mysqli_close($connect);


#header('Refresh:0; url=../vistas/RegistroTrabajadores.html');



?>
