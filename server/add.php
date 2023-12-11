<?php
require_once 'db.php';

$sql="INSERT INTO `car_data`( `Brand`, `Model`, `Type`, `Interior_Color`, `Exterior_Color`, `Engine_Size`, `Horsepower`, `Body_Details`, `IMG`) 
    VALUES ();";
$stmt=$db->query($sql);
//print_r($stmt->fetchAll());
echo json_encode($stmt->fetchAll());

?>