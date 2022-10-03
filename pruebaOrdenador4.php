<?php
include 'ordenador.php';

function impOrdenadores($ordenadores)
{

    // imprimir los ordenadors del fichero
    foreach ($ordenadores as $ordenador) {
        echo $ordenador;
    }
}

function comprobar($ordenadores, $codigoHZ)
{
    foreach ($ordenadores as $a) {
        if ($a->getCodHZ() == $codigoHZ) {
            return true;
        }
    }
    return false;
}

function insertar($ordenadores, $ordenadorNuevo, $codHZ)
{
    if (comprobar($ordenadores, $codHZ)) {
        echo "PORFAVOR NO REPITAS CODIGO";
    } else {

        $ordenadores[] = $ordenadorNuevo;
        echo $ordenadorNuevo;
        ordenador::guardarSerializado('ordenaGuar.txt', $ordenadores);
    }
}

function eliminar($ordenadores, $codigoHZ)
{
    foreach ($ordenadores as $key => $a) {
        if (comprobar($ordenadores, $a->getCodHZ())) {
            unset($ordenadores[$key]);
        }
    }
    ordenador::guardarSerializado('ordenaGuar.txt', $ordenadores);
}

function modificar($ordenadores, $codigoHZ)
{
    foreach ($ordenadores as $a) {
        if (comprobar($ordenadores, $a->getCodHZ())) {
            $a->setSO($_GET['sO']);
            $a->setCodHZ($_GET['codHZ']);
            $a->setEsSobremesa(isset($_GET['esSobremesa']));
        }
    }
    ordenador::guardarSerializado('ordenaGuar.txt', $ordenadores);
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Insert coche</title>
<meta charset="UTF-8">
</head>
<body>

	<form action="pruebaOrdenador4.php">
		<input name="sO" placeholder="sO"> <input name="codHZ"
			placeholder="codHZ"> <input name="esSobremesa" type="checkbox"
			value="esSobremesa">Sobremesa <input type="submit" name="selector"
			value="Guardar"> <input type="submit" name="selector" value="Remove">
		<input type="submit" name="selector" value="Update">
	</form>
	<?php

$ordenadores = ordenador::getOrdenaUnselizados('ordenaGuar.txt');

impOrdenadores($ordenadores);

if (isset($_GET['sO']) && isset($_GET['codHZ'])) {

    $sO = $_GET['sO'];
    $codHZ = $_GET['codHZ'];
    $esSobremesa = isset($_GET['esSobremesa']);

    if ($sO != NULL && $codHZ != NULL) { // se ha rellenado el form
                                         // echo "se va ha crear el ordenador";

        $ordenadorNuevo = new ordenador($sO, $codHZ, $esSobremesa);
        if ($_GET['selector'] == "Guardar")
            insertar($ordenadores, $ordenadorNuevo, $codHZ);
        if ($_GET['selector'] == "Update")
            modificar($ordenadores, $codHZ);
        if ($_GET['selector'] == "Remove")
            eliminar($ordenadores, $codHZ);
    }
}
?>
</body>
</html>