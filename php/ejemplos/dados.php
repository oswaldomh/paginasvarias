<?php

$uno = rand(1,6);
$dos = rand(1,6);
$tres = rand(1,6);
$cuatro = rand(1,6);
$cinco = rand(1,6);
$seis = rand(1,6);

$dados = array
	(
 	array("uno",$uno),
    array("dos",$dos),
    array("tres",$tres),
    array("cuatro",$cuatro),
    array("cinco",$cinco),
    array("seis",$seis),
    );
    echo $dados[0][0].": Randomnum: ".$uno.".<br>";
	echo $dados[1][0].": Randomnum: ".$dos.".<br>";
	echo $dados[2][0].": Randomnum: ".$tres.".<br>";
    echo $dados[3][0].": Randomnum: ".$cuatro.".<br>";
	echo $dados[4][0].": Randomnum: ".$cinco.".<br>";
	echo $dados[5][0].": Randomnum: ".$seis.".<br>";

?>