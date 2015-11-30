<?php
	$codigo = "";
	$longitud = 6;
	for ($i=1; $i<=$longitud; $i++){
	$numero = rand(0,5);
	$codigo .= $numero;
	}
	echo "Codigo: <B>$codigo</B>";
?> 