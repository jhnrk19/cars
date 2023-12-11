<?php
require_once 'db.php';

$sql="SELECT * FROM car_data order by brand";
$stmt=$db->query($sql);
//print_r($stmt->fetchAll());
echo json_encode($stmt->fetchAll());

?>