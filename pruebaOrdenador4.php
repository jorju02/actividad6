<?php 
include 'ordenador.php';

function impOrdenadores($ordenadores)
{
    
    // imprimir los ordenadors del fichero
    foreach ($ordenadores as $ordenador) {
        echo $ordenador;
    }
}

function insertar($ordenadores,$ordenadorNuevo,$codHZ)
{
    
    if (in_array($codHZ, $ordenadores)) {
        
    } else {
        
        $ordenadores[] = $ordenadorNuevo;
        echo $ordenadorNuevo;
        ordenador::guardarSerializado('ordenaGuar.txt', $ordenadores);
        
    }
    
    
}

function eliminar($codHZ, $ordenadores,$ordenadorNuevo) {
   
    if ( $codHZ != NULL) {
        if (array_key_exists($codHZ, $ordenadorNuevo)) {
            
            echo "<script> alert 'Escribe un codigo HZ nuevo'</script>";
        }
        
    }
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Insert coche</title>
<meta charset="UTF-8">
</head>
<body>

	<form>
		<input name="sO" placeholder="sO"> <input name="codHZ"
			placeholder="codHZ"> <input name="esSobremesa" type="checkbox"
			value="esSobremesa">Sobremesa <input type="submit" value="Guardar"> <input
			type="reset" value="Remove"> <input type="submit" value="Update">
	</form>
	<?php

$ordenadores = ordenador::getOrdenaUnselizados('ordenaGuar.txt');

impOrdenadores($ordenadores);

if (isset($_GET['sO']) && isset($_GET['codHZ'])) {
    
    $sO = $_GET['sO'];
    $codHZ = $_GET['codHZ'];
    $esSobremesa = isset($_GET['esSobremesa']);
   
    if ($sO != NULL && $codHZ != NULL ) { // se ha rellenado el form
        // echo "se va ha crear el ordenador";
        
        $ordenadorNuevo = new ordenador($sO, $codHZ, $esSobremesa);
        insertar($ordenadores,$ordenadorNuevo,$codHZ);

        
    }
}
?>
</body>
</html>