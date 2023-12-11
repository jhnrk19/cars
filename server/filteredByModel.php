<?php
require_once 'db.php';

extract($_GET);

$sql="SELECT model FROM `car_data` where Brand='{$brand}';";
$stmt=$db->query($sql);
//print_r($stmt->fetchAll());
echo json_encode($stmt->fetchAll());

?>