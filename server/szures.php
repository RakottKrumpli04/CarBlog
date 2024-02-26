<?php 
require_once "db.php";
$sql="SELECT nev, id FROM `autok`;";
$stmt =$db->query($sql);
echo json_encode($stmt->fetchAll());

?>