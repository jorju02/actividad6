<?php
require 'ordenador.php';

$ordenador1=new ordenador("Windows","HZ4521",true);
$ordenador2=new ordenador("Linux","HZ7895",false);
$ordenador3=new ordenador("Windows","HZ1247",false);
$ordenador4=new ordenador("Mac","HZ0189",true);
$ordenador5=new ordenador("Ubuntu","HZ1045",true);
$ordenador6=new ordenador("Windows","HZ4128",false);

$aOrdenadores=array($ordenador1,$ordenador2,$ordenador3,$ordenador4,$ordenador5,$ordenador6);


echo "<table style='border:1px solid black;'>";
echo "<tr style='border:1px solid black;'>";

for ($i = 0; $i < count($aOrdenadores) ; $i++) {
    echo "<td style='border:1px solid black;'>".$aOrdenadores[$i]."</td>";    
}

echo "</tr>";
echo "</table>";