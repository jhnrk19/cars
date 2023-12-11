<?php
require_once 'db.php';

$sql="SELECT Brand from car_data group by Brand ORDER BY Brand, Model;";
$stmt=$db->query($sql);
//print_r($stmt->fetchAll());
echo json_encode($stmt->fetchAll());

?>