<?php

$type = $_POST['type'];
$proizvodjac = $_POST['proizvodjac'];
$model = $_POST['model'];
$motor = $_POST['motor'];
$cena = $_POST['cena'];

if($type == "json"){
    header("Content-type: application/json");
    $test_array = array (
        'type' => $type,
        'proizvodjac' => $proizvodjac,
        'model' => $model,
        'motor' => $motor,
        'cena' => $cena
    );
    echo json_encode($test_array);
}
else {
    header("Content-type: text/xml");
    $test_array = array (
       'type' => $type,
        'proizvodjac' => $proizvodjac,
        'motor' => $motor,
        'cena' => $cena
    );
    $xml = new SimpleXMLElement('<root/>');
    array_walk_recursive($test_array, array ($xml, 'addChild'));
    print $xml->asXML();
}
?>