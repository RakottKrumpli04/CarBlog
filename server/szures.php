<?php 
require_once "db.php";
$sql="SELECT nev, id FROM `autok` WHERE 1;";
$stmt =$db->query($sql);
echo json_encode($stmt->fetchAll());

?>