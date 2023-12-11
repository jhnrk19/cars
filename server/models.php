<?php
require_once 'db.php';

$sql="SELECT Brand, Model from car_data ORDER BY Model;";
$stmt=$db->query($sql);
//print_r($stmt->fetchAll());
echo json_encode($stmt->fetchAll());

?>