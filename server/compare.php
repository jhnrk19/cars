<?php
require_once 'db.php';

extract($_GET);
$sql="SELECT * FROM `car_data` WHERE id={$id1} or id={$id2}";
$stmt=$db->query($sql);
//print_r($stmt->fetchAll());
echo json_encode($stmt->fetchAll());

?>