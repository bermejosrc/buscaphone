<?php
if(isset($_REQUEST["consulta"])) {
    $consulta = $_REQUEST["consulta"];
}
$datos = Array();

$env = parse_ini_file('../env.ini');
$conexion = mysqli_connect($env['host'], $env['username'], $env['passwd']);

mysqli_select_db($conexion,$env['baseDatos']);

$resultado = mysqli_query($conexion, $consulta);

//$datos = $resultado->fetch_all(); // No funciona en el hosting

while ($fila = $resultado->fetch_array()) {
    $datos[] = $fila;
}

echo json_encode($datos);
exit;
?>