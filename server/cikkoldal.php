<?php 
require_once "db.php";
extract($_GET);
$sql="SELECT * FROM cikkek WHERE id = {$cikkszam}";
$stmt =$db->query($sql);
echo json_encode($stmt->fetchAll());

?>
