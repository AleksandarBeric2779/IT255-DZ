<?php

header("Content-type: application/json");
	$test_array = array (
	'proizvodjac' => 'BMW',
	'model' => '330csi',
	'motor' => 'M54B30',
	'cena' => '50.000$',
);
echo json_encode($test_array);
?>