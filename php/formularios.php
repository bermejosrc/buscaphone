<?php
if(isset($_REQUEST["consulta"])) {
    $consulta = $_REQUEST["consulta"];
}

$env = parse_ini_file('../env.ini');
$conexion = mysqli_connect($env['host'], $env['username'], $env['passwd']);
if (!$conexion) {
    die('No pudo conectarse a la base de datos.');
}

mysqli_select_db($conexion,$env['baseDatos']);
$resultado = mysqli_query($conexion, $consulta) or die("");
exit;
?>